<?php if(isset($_GET['source'])){ die(highlight_file(__FILE__)); } ?>
<?php

//Gen code:
include('secret.php');

$colors=array();
$keys=array();
foreach($_POST as $key=>$post){
	//echo "\n$key=>$post";
	$substr=substr($key,0,3);

	if($substr=='rul'){
		$explode=explode('_',$key);
		$keys[]=$explode[1];
	}elseif($substr=='key'){
		$explode=explode('_',$key);
		if(in_array($explode[1],$keys))
			$colors[$explode[1]][$explode[3]]=$post;
	}
}
$extracss= (isset($_POST['extracss']) AND $extracss!='/*Extra CSS*/' ) ? $_POST['extracss'] : false;
//Extra CSS:
if($extracss){
	if(strlen($extracss)>7000)
		$extracss=false;
}

unset($key,$post);

//var_dump($keys,$colors);


//Bouwen CSS$file
include('newrules.php');

//Disclaimer
$disclaimer=<<<EOM
/* Dit is een CSS-bestand voor FOK!. Voer deze URL in bij 'edit' om hem aan te passen.

Json representatie settings:
%s
:-)
*/
EOM;
$disclaimer=sprintf($disclaimer,json_encode(array($keys,$colors,$extracss)));

$file='';

foreach($keys as $key){
	$css=$rules[$key][1];

	if(isset($colors[$key]))
	{
		$eval='$add=sprintf($css';
		foreach($colors[$key] as $color)
		{
			$eval.=',"'.$color.'"';
		}
		$eval.=');';
		eval($eval);
		
		$file.="\n".$add;
	}else{
		$file.="\n".$css;
	}
	unset($css,$add);
}
unset($rules);

include('class.csstidy.php');

$css_code = $file."\n".$extracss;
$css = new csstidy();
$css->set_cfg('remove_last_;',TRUE);
$css->set_cfg('sort_selectors',TRUE);
$css->set_cfg('lowercase',TRUE);
$css->set_cfg('compress_colors',TRUE);
$css->set_cfg('merge_selectors',2);
$css->set_cfg('merge_selectors',TRUE);
$css->set_cfg('template','hightest');
ob_end_clean();
$css->parse($css_code);
$data =$css->print->plain();

$data = str_replace(') ""',')',$data);

if(isset($_POST['code']) AND $_POST['code']==code($_POST['filename']))
{
	//overschrijven
	$filename=$_POST['filename'].'.css';
}else{
	//nieuwe
	$filename=time().rand(100,999).'.css';
}

$data=$disclaimer."\n".$data;

//var_dump($filename,$data);
//die();
$fp = fopen ('files/'.$filename, "w") or die('can\'t open file');;
fwrite($fp, $data); 
fclose($fp);
	
$url='http://kexx.net/fokcss2/files/'.$filename;

//Code:
$code=code($filename);
//die($data);
header('Location: index.php?code='.$code.'&url='.urlencode($url));

