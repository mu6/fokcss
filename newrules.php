<?php
$rules[0]=array('Helvetica (11) gebruiken als lettertype in plaats van Arial 12.',
	'.postmain_right {
	font-family:"helvetica",
	sans-serif;
	font-size:11;
	}
	','');
	
$rules[1]=array('Posts compacter (minder ruimte er tussen)',
	'.postmain_right {
	min-height:30px;
	}
	.postholder_top {
	height:36px;
	}
	.postholder_bot {
	min-height:67px;
	}
	.postmain_right{
	padding-bottom:2px;
	padding-left:6px;
	padding-right:2px;
	padding-top:3px;
	}
	','');
	
$rules[2]=array('Ruimte om spoilers + quotes heen verkleinen',
	'.spoilerTitle,.spoiler,.quote{
	padding-bottom:4px;
	padding-left:0px;
	padding-right:0px;
	padding-top:0px;
	margin-left:10px;
	}
	blockquote {
	margin-bottom:0px;
	margin-left:20px;
	margin-right:3px;
	margin-top:0px;
	}
	.quoteTitel{
	margin-left:15px;
	font-size:2px;
	}
	','');
	
$rules[3]=array('Signature lichter weergeven',
	'.postmain_sig{
	padding-bottom:1px;
	padding-left:5px;
	padding-right:1px;
	padding-top:3px;
	color:#%s;/*Tekstkleur sig*/
	border-top-color:#%s;/*Lijntje tussen post en sig*/
	}
	.postmain_sig a{
	color:#%s;/*Kleur linkjes signature*/
	}
	.post:hover .postmain_sig{
	color:#%s;/*Kleur linkjes signature bij muis-over*/
	}
	','ddd/cccccc/769fbb/909090');
	
$rules[4]=array('Signatures uitschakelen',
	'.postmain_sig {
	display:none;
	}
	.postholder_bot {
	min-height:62px;
	}
	','');
	
$rules[5]=array('Usericons (plaatjes/avatars) uitschakelen',
	'img.usericon,
	img.myusericon {
	display:none;
	}
	.postholder_bot {
	min-height:42px;
	}
	','');
	
$rules[6]=array('Abonnement-sterren uitschakelen',
	'img.abo {
	display:none;
	}
	','');
	
$rules[7]=array('Seconden weghalen van post',
	'.post_sec {
	display:none;
	}
	','');
	
$rules[8]=array('Grotere icoontjes: (edit/quote etc)',
	'img.icons{
	height:20px;
	width:20px;
	}
	postholder_top{
	height:42px!important;
	}
	','');
	
$rules[9]=array('Randje om usericon/plaatjs verkleinen',
	'img.usericon,
	img.myusericon {
	padding-bottom:0;
	padding-left:0;
	padding-right:0;
	padding-top:0;
	margin-top:1px;
	}
	','');
	
$rules[10]=array('Ondertitel minder opvallend',
	'.post_sub {
	color:#%s;/*Kleur ondertitel*/
	}
	.post:hover .post_sub {
	color:#%s;/*Kleur ondertitel bij muisover*/
	}
	','E5E5E2/808080');
	
$rules[11]=array('Youtube-video-previews in een minder hoog vakje',
	'.youtube_video,
	.flickr_video,
	.vimeo_video {
	background-image:url(http://kexx.net/uploads/fokcss/video.gif);
	margin-bottom:12px;
	margin-left:20px;
	margin-right:0px;
	margin-top:6px;
	padding:0px;
	width:480px;
	background:#%s;/*Achtergrond youtubevids*/
	border:1px solid #ccc;
	}
	.youtube_video a,
	.flickr_video a,
	.vimeo_video a {
	color:#%s;/*Tekstkleur links youtubevids*/
	}
	blockquote .youtube_video,
	blockquote .flickr_video,
	blockquote .vimeo_video {
	background-image:url(http://kexx.net/uploads/fokcss/video.gif);
	}
	','f0f0f0/66f');
	
$rules[12]=array('Quotes minder opvallende achtergrondkleur, met lijntje',
	'.quote {
	border:1px solid #ccc;
	background:#%s;/*Achtergrondkleur quotes*/
	}
	','e8e8e8');
	
$rules[13]=array('Update-melding bij plaatsen quote kleiner maken',
	'.spyupdate {
	padding:0px;
	margin:0px;
	}
	.spypause {
	color:#%s;/*Tekstkleur melding [topic gepauseerd]*/
	}
	','f00');
	
$rules[14]=array('Username dik drukken',
	'a.username {
	font-weight:600;
	}
	','');
	
#$rules[15]=array('Kleur van seconden in post gelijk aan de rest van de regel',
#	'.post_sec {
#	color:#%s;/*Link seconden*/
#	}
#	','808080');
	
$rules[16]=array('Pijltjes [>>] in topiclijsten/myAT vergroten [20px]',
	'.pagesraquo{
	font-size:20px !important;
	}
	','');
	
$rules[17]=array('Header uitschakelen',
	'.forumheader {
	background-image:none!important;
	height:40px;
	}
	img.foklogo,.headerlink {
	display:none!important;
	}
	.topbar_bottom {
	top:20px;
	}
	','');
	
$rules[18]=array('Grotere TT in topiclijsten',
	'.tTitel a {
	font-size:13px;
	}
	','');
	
$rules[19]=array('Verberg views uit overzichten',
	'.tViews {
	display:none;
	}
	.tTitel {
	width:428px;
	}
	','');
	
$rules[20]=array('Verberg google-balk bovenaan',
	'.gsearchpos {
	display:none;
	}
	','');
	
$rules[21]=array('Quotes breder',
	'.quote {
	max-width:550px;
	width:550px;
	}
	','');
	
$rules[22]=array('Iets meer ruimte onder de quote',
	'.quote {
	margin-bottom:3px!important;
	}
	','');
	
$rules[23]=array('Ondertitel en signature altijd donkerder weergeven',
	'.post_sub,
	.postmain_sig {
	color:#%s;/*Tekstkleur signature*/
	}
	','3c3c3c');
	
#$rules[24]=array('Mapje-icoon vóór regel uitzetten EN subforumtekst vet maken',
#	'.topiclist_icon{
#	display:none;
#	}
#	.afk {
#	font-size:11px;
#	font-weight:700;
#	}
#	td.tFolder{
#	margin:0;
#	}
#	','');
	
$rules[25]=array('Haal paginanummers uit AT/topiclijsten, maar laat de pijltjes staan',
	'.pagessmall{
	display:none;
	}
	','');
	
$rules[26]=array('Groter vak om in te typen bij posten',
	'.message{
	height:250px;
	}
	','');
	
$rules[27]=array('Zet de disclaimer uit onder posten bericht',
	'.disclaimer {
	display:none;
	}
	','');
	
$rules[28]=array('Grotere TT in topics',
	'.breadcrumb h1{
	font-size:17px;
	font-weight:700;
	max-width:400px;
	line-height:80%;
	margin-top:4px;
	}
	.bch1 {
	margin-top:-4px;
	font-size:17px;
	font-weight:700;
	max-width:400px;
	line-height:80%;
	}
	.crumbfield {
	left:40px;
	position:absolute;
	top:0px;
	}
	','');
	
$rules[29]=array('Haal forumhop weg (onderin)',
	'.forumhop{
	display:none;
	}
	','');
	
$rules[31]=array('<b>Meer ruimte posts</b>',
	'.postholder_bot {
	min-height: 30px;
	}
	img.posticon {
	left:100px;
	position:absolute;
	top:-25px;
	}
	img.online,
	img.onlineimg {
	margin-left:75px;
	}
	.listmessages img.usericon,
	.listmessages img.myusericon {
	margin-left:2px!important;
	margin-top:-34px!important;
	}
	.post_sub {
	left:125px;
	}
	.postmain_right {
	width:745px;
	margin-left:70px!important;
	min-height:1px;
	}
	.contents{
	width:720px;
	}
	.forum_code,
	.codeDisplayTable {
	width:720px;
	}
	img.usericon,
	img.myusericon {
	margin-top:2px;
	margin-left:0px;
	}
	.postholder_bot postmain_right {
	margin-left:0!important;
	}
	.quote {
	max-width:680px;
	width:680px;
	}
	.postmain_sig{
	margin-left:74px;
	}
	.contents {
	min-height:0px !important;
	}
	','');
	
$rules[32]=array('Groter font [14] gebruiken [Alleen in posts!]',
	'.postmain_right {
	font-size:14!important;
	}
	','');
	
$rules[33]=array('Druk tekst van vriendjes dikker',
	'.isfriend .postmain_right{
	font-weight:bold;
	}
	','');
	
$rules[34]=array('Alleen usericons van friends laten zien',
	'img.usericon,
	img.myusericon {
	display:none;
	}
	.isfriend img.usericon,
	.isfriend img.myusericon {
	display:inherit;
	}
	.postholder_bot {
	min-height:42px;
	}
	','');
	
$rules[35]=array('Hogere regelafstand (120%)',
	'.postmain_right{
	line-height:120%;
	}
	','');
	
$rules[36]=array('Lagere regelafstand (90%)',
	'.postmain_right{
	line-height:90%;
	}
	','');
	
$rules[37]=array('Forum links uitlijnen',
	'.pageWrapper,
	.navbar .table {
	margin-left:0px;
	}
	','');
	
$rules[38]=array('Haal witregels uit quotes',
	'div.post blockquote div.quote br {
	display:none 
	}
	','');
	
$rules[39]=array('Topiclijst overzichtelijker',
	'div.mb2 table.topiclist_bot td {
	height:22px 
	}
	div.mb2 table.tablesorter td.tFolder .afk {
	position:relative;
	top:-6px;
	font-size:10px;
	color:#%s;/*Tekstkleur topics in lijst*/
	}
	div.mb2 table.tablesorter td.tTopicstarter a {
	font-size:10px;
	color:#%s;/*Tekstkleur links in topiclijsten*/
	}
	div.mb2 table.tablesorter td.tPosts,
	div.mb2 table.tablesorter td.tViews {
	font-size:10px;
	color:#%s;/*Tekstkleur [views/posts] kolommen*/
	}
	','444/111/111');
	
$rules[40]=array('Verberg "quote" tekst boven quote',
	'blockquote .quoteTitel {
	display:none 
	}
	','');
	
$rules[41]=array('Verberg niet-ingestelde icons',
	'img[src="http://i.fokzine.net/templates/forum2009/i/noiconn.png"] {
	display:none 
	}
	img[src="http://i.fokzine.net/templates/forum2009/i/noicon.png"] {
	display:none 
	}
	','');
	
$rules[42]=array('Zet topicwaarschuwingen uit',
	'.topicPointerFieldset {
	display:none;
	}
	','');
	
$rules[43]=array('Verberg standaardPI',
	'img[src="http://i.fokzine.net/templates/forum2009/i/p/1.gif"] {
	display:none!important;
	}
	img[src="http://i.fokzine.net/p/1.gif"] {
	display:none 
	}
	','');
	
$rules[44]=array('Restyle profiel',
	'body.showuserprofile td{
	border-bottom-color:#%s;/*Tussenlijntjes profiel*/
	border-bottom-style:dotted;
	border-bottom-width:1px;
	}
	','E0B18F');
	
$rules[45]=array('Verberg Footer (copyrightnotice etc)',
	'.footer {
	display:none;
	}
	','');
	
#$rules[46]=array('Editmelding omhoog (werkt niet echt)',
#	'.postmain_right {
#	padding:5px 10px 10px
#	}
#	.edit {
#	margin-bottom:-9px
#	}
#	','');
	
$rules[47]=array('Quickreply links uitlijnen',
	'#quickreply .postreply, #quickreply .posticons {margin-left:0!important;}
	#quickreply textarea, #quickreply .posticons  {width: 790px!important;}
	#quickreply .posticons br {display:none!important;}
	#quickreply .posticons input {margin-left:3px!important;}
	.spypause {
	float:none;
	margin-right:44px;
	margin-top:12px;
	position:absolute;
	right:0px;
	}
	','');
	
$rules[48]=array('Standaard PI kiezer uit',
	'div.stdpifield, span.stdPI a.pointer {
	visibility:hidden!important; 
	display:none!important;
	}
	','');
	
$rules[49]=array('Usericons doorzichtiger maken tenzij mouseover',
	'img.usericon,
	img.myusericon {
	opacity:0.6;
	filter:alph,
	array(opacity=60)
	}
	img.usericon:hover,
	img.myusericon:hover {
	opacity:1;
	filter:alph,
	array(opacity=100)
	}
	','');
	
$rules[50]=array('Maak waarschuwingen [Voor je reageert] kleiner',
	'div.postreply fieldset {
	border:none;
	padding:0;
	margin:0 
	}
	div.topicWarningContents {
	border:none;
	padding:0;
	margin:0;
	width:598px 
	}
	','');
	
$rules[51]=array('Om en om kleuren in topic lijst',
	'tr.altcolor-post-2 {
	background:#%s;/*Kleur elk 2e item*/
	}
	','eee');
	
$rules[52]=array('Geef priveforums geen aparte achtergrondkleur',
	'tr.privateforumcolor {
	background:#%s;/*Achtergrondkleur priveforums*/
	}
	','f8f8f8');
	
$rules[53]=array('Previews uitschakelen bij muis-over',
	'
	body.listactivetopics #fancybox-wrap,
	body.listmyactivetopics #fancybox-wrap,
	body.listnewtopics #fancybox-wrap,
	body.listposthistory #fancybox-wrap,
	body.listtopics #fancybox-wrap{
	display:none!important 
	}
	','');
	
$rules[54]=array('Post-previews naar links',
	'body.listactivetopics #fancybox-wrap,
	body.listmyactivetopics #fancybox-wrap,
	body.listnewtopics #fancybox-wrap,
	body.listposthistory #fancybox-wrap,
	body.listtopics #fancybox-wrap{
	left:5px !important;
	opacity:0.95 !important 
	}
	','');
	
$rules[55]=array('Scrollbalken uit postpreview weghalen',
	'body.listactivetopics #fancybox-inner,
	body.listmyactivetopics #fancybox-inner,
	body.listnewtopics #fancybox-inner,
	body.listposthistory #fancybox-inner,
	body.listtopics #fancybox-inner{
	overflow:hidden !important 
	}
	','');
	
$rules[56]=array('Geef gelinkte post een andere gekleurde lijn (TIP)',
	'div.post:target .postholder_top {
	border-top:4px dotted #%s;/*Kleur lijn*/;
	}
	','f00');
	
$rules[57]=array('Verberg topic als je zelf lapo bent uit MyAT',
	'.listmyactivetopics tr[data-self="lapo"] {
	display:none!important;
	}
	','');
	
$rules[58]=array('Oude abo-sterren',
	'img.abo {
	margin:-2px 0 -4px 0px!important;
	width:0px!important;
	height:20px!important;
	padding-right:10px!important;
	}
	img[src="http://i.fokzine.net/templates/forum2009/i/abo0.png"] {
	background:url("http://i.fokzine.net/templates/new/i/IMAGEMAP.png") no-repeat -60px -100px ;
	}
	img[src="http://i.fokzine.net/templates/forum2009/i/abo1.png"] {
	background:url("http://i.fokzine.net/templates/new/i/IMAGEMAP.png") no-repeat -50px -100px ;
	}
	img[src="http://i.fokzine.net/templates/forum2009/i/abo2.png"] {
	background:url("http://i.fokzine.net/templates/new/i/IMAGEMAP.png") no-repeat -40px -100px ;
	}
	img[src="http://i.fokzine.net/templates/forum2009/i/abo3.png"] {
	background:url("http://i.fokzine.net/templates/new/i/IMAGEMAP.png") no-repeat -30px -100px ;
	}
	img[src="http://i.fokzine.net/templates/forum2009/i/abo4.png"] {
	background:url("http://i.fokzine.net/templates/new/i/IMAGEMAP.png") no-repeat -20px -100px ;
	}
	','');
	
$rules[59]=array('Emoticons op minder regels',
	'.emoticons br {
	display:none!important;
	}
	','');
	
$rules[60]=array('Grotere datum en tijd',
	'.post_time a {
	font-size:14px;
	
	}
	.post_postcount {
	font-size:14px;
	
	}
	','');
	
$rules[61]=array('PI-kiezer uit',
	'#posticons {
	display:none !important;
	
	}
	','');
	
$rules[62]=array('Balk onder reply weg',
	'.topicadmin +.breadcrumb {
	display:none;
	}
	form .fieldholder.footmenu {
	display:none;
	}
	form .footmenu,
	.mb2 + .footmenu {
	display:none;
	}
	','');
	
$rules[63]=array('Schakel iconen twitter, last.fm, flickr etc. uit',
	'img[src="http://i.fokzine.net/templates/forum2009/i/icons/flickr.png"]{
	display:none!important
	}
	img[src="http://i.fokzine.net/templates/forum2009/i/icons/flickrgrey.png"]{
	display:none!important
	}
	img[src="http://i.fokzine.net/templates/forum2009/i/icons/twitter.png"]{
	display:none!important
	}
	img[src="http://i.fokzine.net/templates/forum2009/i/icons/twittergrey.png"]{
	display:none!important
	}
	img[src="http://i.fokzine.net/templates/forum2009/i/homepage.png"]{
	display:none!important
	}
	img[src="http://i.fokzine.net/templates/forum2009/i/homepagegrey.png"]{
	display:none!important
	}
	img[src="http://i.fokzine.net/templates/forum2009/i/icons/lastfm.png"]{
	display:none!important
	}
	img[src="http://i.fokzine.net/templates/forum2009/i/icons/lastfmgrey.png"]{
	display:none!important
	}
	','');
	
$rules[64]=array('Uitklaptrackers in de balk boven uit',
	'.vTracker,
	.fpTracker {
	display:none!important;
	
	}
	','');
	
$rules[65]=array('Alle kleuren een tintje donkerder',
	'body {
	background:#%s!important;/*Achtergrond totaal pagina*/
	}
	.pageWrapper {
	background:#%s!important;/*Achtergrond binnenpagina*/
	}
	.fieldholder {
	background:#%s!important;/*\'Fieldholder background\'*/
	}
	.topiclist_bot tr td {
	background:#%s!important;/*Achtergrond topiclijsten*/
	
	}
	.postholder_bot {
	background-attachment:scroll;
	background:#%s;/*Achtergrond posts*/
	}
	#quickreply textarea, input, select,div.postreply textarea { background:#%s}/*Achtergrond tekstvelden*/
	','080806/6D6D6D/302f2f/A9A9A9/B7B7B7/C1C1C1');
	
$rules[66]=array('Friend/foe iconen weg',
	'img[src="http://i.fokzine.net/templates/forum2009/i/addfoe.png"]{
	display:none!important
	}
	img[src="http://i.fokzine.net/templates/forum2009/i/addfoegrey.png"]{
	display:none!important
	}
	img[src="http://i.fokzine.net/templates/forum2009/i/icons/addfriend.png"]{
	display:none!important
	}
	img[src="http://i.fokzine.net/templates/forum2009/i/icons/addfriendgrey.png"]{
	display:none!important
	}
	','');
	
#$rules[67]=array('Sneeuw uit',
#	'div.snowfall-flakes{
#	display:none;
#	}
#	','');
	
$rules[68]=array('Notificaties uit',
	'.jGrowl-notification{
	display:none;
	}
	','');
	
$rules[69]=array('Optimaliseren voor breedbeeld',
	'.pageWrapper,
	.fieldholder {
	width:1200px;
	}
	.breadcrumb{
	width:1180px !important;
	}
	.topbar_bottom,
	.topbar_top {
	width:1195px;
	}
	.mb2>.hoofdgroep,
	.mb2>.hoofdgroep_bot,
	.mb2>.topiclist,
	.mb2>.topiclist_bot {
	width:1202px;
	}
	.tTitel {
	width:754px;
	}
	.sliderForumTopH5 {
	left:860px;
	}
	.sliderTopH5 {
	top:26px;
	left:986px;
	}
	.iForum,
	.iHoofdgroep {
	width:902px;
	}
	.postholder_top {
	width:1200px;
	}
	.postholder_bot {
	width:1200px;
	}
	.contents {
	width:1020px;
	}
	.quote {
	width:950px !important;
	max-width:950px !important;
	}
	.forum_code {
	width:1000px;
	}
	.postmain_sig {
	width:1026px;
	}
	.pagesholder {
	left:946px;
	width:252px;
	}
	.sliderTopicTopH5 {
	left:829px !important;
	}
	.spoilerTitle {
	width:894px;
	}
	.spoiler {
	width:890px;
	}
	.quote .spoiler,
	.quote .spoilerTitle {
	max-width:920px;
	width:920px;
	}
	div.postreply textarea {
	width:1157px;
	}
	div.postreply {
	margin-left:0px;
	}
	.posticons {
	width:1155px;
	margin-left:0px;
	}
	.emoticons {
	width:1175px;
	}
	','');
	
$rules[70]=array('Fix [code]-boxes voor Opera',
	'.codeDisplayTableLines {
	width:22px;
	
	}
	','');
	
$rules[71]=array('Achtergrond post veranderen + eventuele plaatjes weg',
	'.postholder_bot{
	background:#%s;/*Achtergrondkleur posts*/
	background-image:none!important;
	}
	','f7f6f3');
	
$rules[73]=array('Website van het jaar-logo uit',
	'img.wvhj{
	display:none
	}
	img[src="http://i.fok.nl/fok/wvhj2010_nav.png"] ,
	img[src="http://i.fokzine.net/fok/wvhj2010_nav.png"] {
	display:none 
	}
	','');
	
$rules[74]=array('True-logo weg',
	'img[src="http://i.fokzine.net/core/i/true_small_topbar.gif"] {
	display:none 
	}
	','');
	
$rules[75]=array('Achtergrond navigatiebalk weg',
	'.navbar div {
	background-image:none!important;
	}
	','');
	
$rules[76]=array('Geblokkeerde-user-posts echt weghalen, niet minimaliseren',
	'.isFoeTop {
	display:none !important;
	
	}
	','');
	
$rules[77]=array('Meldingen rechtsonderin een groter X-kruisje geven',
	'.jGrowl-close span {
	font-size:15px;
	margin-top:-9px;
	}
	.jGrowl-close span:after {
	content:"XxXx"
	}
	','');
	
$rules[78]=array('>> pijltjes lichter kleuren nadat je er op klikte',
	'a.pagesraquo:visited{ opacity:.50;filter:alpha(opacity=50);filter:"alpha(opacity=50)"; }
	a.pagesraquo:link,a.pagesraquo:active{text-decoration:underline}
	td.tLastreply a:visited { opacity:.50;filter:alpha(opacity=50);filter:"alpha(opacity=50)"; }
	td.tLastreply a:link,a:active {text-decoration:underline}
	','');
	
$rules[80]=array('960px breed, 12px helvetica',
	'.mb2>.hoofdgroep,
	.mb2>.hoofdgroep_bot,
	.mb2>.topiclist,
	.mb2>.topiclist_bot {
	width:960px !important;
	.postmain_right {
	font-family:"helvetica",
	sans-serif;
	font-size:12;
	}
	','');
	
$rules[81]=array('Ibood-link weghalen',
	'a[title="Bekijk dagelijkse deal van iBood - internet best online offer daily"] {
	display:none 
	}
	.topbarcolor a[rel="ext"] {
	display:none;
	
	}
	','');
	
$rules[82]=array('Linkjes bovenin (username, uitloggen) dezelfde kleur als de rest',
	'.topbar_top_abs a {
	color:#%s!important;
	}
	','a0a0a0');
	
$rules[83]=array('Kleiner randje om subforumblokje',
	'.afknew{
	border-width:1px!important;
	}
	','');
	
$rules[84]=array('Pijltjes [>>] in topiclijsten/myAT vergroten [30px]',
	'.pagesraquo{
	font-size:30px !important;
	}
	','');
	
$rules[85]=array('Boxjes weg [die voor topictitels]',
	'.topicExplain {
	background:none !important;
	border:none !important;
	font-size:inherit !important;
	color:inherit !important;
	border:none !important;
	text-transform:capitalize;
	}
	.topicExplain:after {
	content:"]"
	}
	.topicExplain:before {
	content:"["
	}
	','');
	
$rules[86]=array('De statusindicators voor actieve topics in een wat minder gay kleurtje',
	'a.newposts {
	background:#%s!important;/*Achtergrond statusindicator*/
	}
	a.newposts:hover{
	background:#%s!important;/*Achtergrond statusindicator bij mouseover*/
	}
	','9DD0E3/39A3CB');
	
$rules[87]=array('Reeksiconen rechts',
	'
	img[alt="reeks"],img[src="http://i.fokzine.net/templates/forum2009/i/chaintopic.png"]{
	float:right!important;
	}
	','');
$rules[88]=array('Reeksiconen weg',
	'
	img[alt="reeks"],img[src="http://i.fokzine.net/templates/forum2009/i/chaintopic.png"]{
	display:none!important;
	}
	','');
$rules[89]=array('Geen enter na youtubefilmpjes',
	' .youtube_video, .flickr_video, .vimeo_video {
	float:left;
	}
	','');
$rules[90]=array('Gepost op... voor de datum',
	' .post_time a:before {
	content:                                    \'Gepost op \'
	}
	','');
$rules[91]=array('Check.fok.nl banner weg',
	' a[href=\'http://check.fok.nl/\'] {
	    display:none!important;
	}
	','');
	
$rules[92]=array('Aboster weg als mensen geen abo hebben',
	' img[src=\'http://i.fokzine.net/templates/forum2009/i/abo0.png\'] {
	    display:none!important;
	}
	','');
$rules[93]=array('Reacties, TS en Views-tekst in zwart',
	' .tPosts, .tTopicstarter , .tViews { 
	    color: #%s!important;/*Tekstkleur*/;
	}	    
	','000000');
$rules[94]=array('Winkelwagentje pricecheck weghalen',
	' 
	img[src="http://i.fokzine.net/templates/forum2009/i/shopinfo.png"] {
	display:none;
	}
	','');
$rules[95]=array('DM\'s smaller',
	' 
	div.jGrowl div.jGrowl-notification, div.jGrowl div.jGrowl-closer{
	width:200px;
	}
	','');
$rules[96]=array('Forceer Arial',
	' 
	* {font-family: arial!important}
	
	','');
$rules[97]=array('Gebruik in quote-blokken deze kleur links (eerst twee links)',
	' 
	.quote a:nth-child(1), .quote a:nth-child(2){
	    color:#%s!important;/*Linkkleur*/;
	}	    
	','404040');
$rules[98]=array('Laat plaats in top-500 zien',
    '
    @import \'http://kexx.net/fokcss2/500.css\';
    '
	,'');
$rules[99]=array('Vis een optie uitzetten', '
	a[href=\'http://frontpage.fok.nl/nieuws/455685/1/1/100/honderd-miljoenste-post-op-fok-forum.html\'] {
	    display:none!important;
	} ','');

$rules[100]=array('Reset-knop vergroten', '
        a[href="index/reset"]{width:5em;text-align:center}
	','');
