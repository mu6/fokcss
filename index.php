<?php if(isset($_GET['source'])){ die(highlight_file(__FILE__)); } ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <link rel="stylesheet" media="screen" type="text/css" href="css/layout.css" />
    <script type="text/javascript" src="jscolor/jscolor.js"></script>
    <title>FOK!CSS tool 2.0</title>
    
</head>

<body >
<?php

include('newrules.php');

//Gen code:
include('secret.php');

/* Editeren */
$url=(isset($_GET['url'])) ? $_GET['url'] : false;

if($url AND preg_match('/^http\:\/\/kexx\.net/',$url) ){
	if(preg_match('/[0-9]*\.css/',$url,$matches))
	{
		$file=file('files/'.$matches[0]);
		$origfilename=str_replace('.css','',$matches[0]);
		foreach($file as $line){
			if($fffffffffound){
				$json=$line;
				break;
			}
			if(substr($line,0,10)==substr("Json representatie settings:",0,10)){
			$fffffffffound=true;				
			}
		}
	}
	
	//Uitleg:
	if(isset($_GET['code']) && $_GET['code']==code($origfilename)){
		$code=$_GET['code'];
		$codepart="Omdat je deze sheet zelf hebt gebouwd kun je hem aanpassen als je deze code intypt: <span style=\"font-weight:bold\">$code</span>. Je kunt ook deze pagina bookmarken.";
	}else{
		$codepart='Omdat je geen (goede) code hebt gegeven kun je dit bestand niet overschrijven.';
	}
		
	$class=(isset($_GET['code'])) ? false : 'class="red"';
	echo "<fieldset>
	<legend>Uitleg URL:</legend>
 	<p $class>De <a href=\"$url\" target=\"_blank\">link</a> naar het CSS-bestand is: 
	<input style=\"width:400px;\" value=\"$url\"></p>
	<p>Deze URL kun je bij FOK! <a href=\"http://forum.fok.nl/user/edit_prefs#css\" target=\"_blank\">ingeven</a>.	$codepart
	</p>
	 </fieldset><br/>
	";
	
}

//Editgedeelte
echo '
<div class="help" style="display:block" id="edit">

<fieldset>
	<legend>Aanpassen bestaande sheet</legend>
	
Een huidige sheet aanpassen?<br/>
<form action="index.php" method="GET">
Link:<input id="urlbar" type="text" name="url" value="url" style="width:400px;"/>, Code: <input id="code" type="text" name="code" value="0000" style="width:56px;" />
<input type="submit"> 
</form>
De code hoef je alleen in te vullen als je die hebt. Als de code goed is wordt het bestand overschreven. Anders wordt een nieuwe aangemaakt.
</fieldset>
</div>
';

if(isset($_GET['edit']))
	die();

$set = json_decode($json,true);
$PRESETkeys=$set[0];
$PRESETcolors=$set[1];
$PRESETextra=(isset($set[2])) ? $set[2] : false;

//var_dump($set,$PRESETkeys,$PRESETcolors,$PRESETextra);
//die();


unset($url,$file,$line,$fffffffffound,$json,$set);
echo '
<fieldset>
	<legend>Pas instellingen aan:</legend>

<a href="index.php">Begin opnieuw</a>  - <a href="#" onclick="document.getElementById(\'edit\').style=\'display:block\';">Verander een bestaande sheet</a>
<form action="handleform.php" method="POST">';
if(isset($_GET['code'])){
	if($code==code($origfilename))
		echo "Bezig met aanpassen van <input type=\"text\" name=\"filename\" value=\"$origfilename\" /> met code  <input type=\"text\"  name=\"code\" value=\"$code\"/><br/><br/>";
}

echo '

<input type="submit">
<table>
<tr>
	<td>ID</td>
	<td>Aan?</td>
	<td>Omschrijving</td>
	<td>&nbsp;</td>
</tr>
';

foreach($rules as $key=>$rule){
	unset($editveld,$desc,$css,$colors,$color);
	$desc=$rule[0];
	$css=$rule[1];
	
	if($rule[2]!='')
		$colors=explode('/',$rule[2]);
	else
		$colors=false;
	
	//In geval van edit:
	if(isset($_GET['url'])){
		//var_dump($key,$
		if(in_array($key,$PRESETkeys))
		{
			$checked=' checked="checked" ';
			$display=false;
		}else{
			$checked=false;
			$display='style="display:none;"';
		}
		
	}else{
		$checked=false;
		$display='style="display:none;"';
	}
	
	
	
	//Editveld maken:
	if($colors){
		$o=0;
		//Teksten zoeken:
		preg_match_all('/\/\*(.*)\*\//',$css,$matches);
		unset($matches[0]);
		//var_dump($matches);
				
		//Inputs maken:
		foreach($colors as $color){
			$label='key_'.$key.'_id_'.$o;
			$defaultColor=$color;
			if(isset($PRESETcolors[$key][$o]))
				$color=$PRESETcolors[$key][$o];

			
			$editveld.=
			"<span onclick=\"document.getElementById('coloreditbox_$key-$o').value='$defaultColor';\">#</span>".
			'<input type="'.$color.'" name="'.$label.'" value="'.$color.'" class="color" id="coloreditbox_'.$key.'-'.$o.'">'.$matches[1][$o].
			'<br/>';
			$o++;
		}
	}
	

	echo "<tr id=\"$key\">
	<td><a href=\"#$key\">#$key</a></td>
	<td>
		<input id=\"idrule_$key\" type=\"checkbox\" value=\"1\" name=\"rule_$key\" onchange=\"document.getElementById('coloredit_$key').style='display:inherit'\" $checked>
	</td>
	<td style=\"width:400px\">
		<label for=\"idrule_$key\">$desc	</label>
	</td>
	<td $display id=\"coloredit_$key\">
	$editveld
	</td>
	";
	#if(file_exists('previews/'.$key.'n.png')){
	#    echo '<td><a href="previews/'.$key.'v.png" target="_blank">Voor</a> -';
	#    echo '<a href="previews/'.$key.'n.png" target="_blank">Na</a></td>';
	#}else{
	#    echo '<td>&nbsp;</td>';
	#}
	echo "
	</tr>";
}

$display=($PRESETextra) ? false : 'style="display:none"';
$PRESETextra=str_replace('/*Extra CSS*/','',$PRESETextra);
echo '</table>
<input type="submit">
<input type="button" onclick="document.getElementById(\'extracss\').style=\'display:block\'; return false;" value="Extra eigen CSS toevoegen." />
<a href="index.php">Begin opnieuw</a> - <a href="index.php?edit=1">Verander een bestaande sheet</a>
<div '.$display.' id="extracss">
Voer hier je extra CSS in. Dit moet niet te veel zijn (<span id="aftel">5000</span> tekens). Het kan handig zijn een <a href="http://www.cssnewbie.com/css-import-rule/" target="_blank">@import</a> te gebruiken.
<textarea cols="90" rows="12" name="extracss" onkeyup="document.getElementById(\'aftel\').innerHTML=(5000-this.value.length)">/*Extra CSS*/'.$PRESETextra.'</textarea>
<br/><input type="submit">
</div>

</form>
</fieldset>
<br/><br/><br/>
';

?>
</body>
</html>
