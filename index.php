<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>馃憤Short comment bot馃憤</title>
<link rel="stylesheet" type="text/css" href="B.css" media="all,handheld"/>
<link href="http://fonts.googleapis.com/css?family=Iceland" rel="stylesheet" type="text/css">
<link href="../fonts.googleapis.com/cssf8d0.css?family=Aladin" rel="stylesheet" type="text/css">
<link rel="shortcut icon" type="image/png" href="https://cdn3.iconfinder.com/data/icons/inside/PNG/256x256/icontexto-inside-facebook.png"/>
</head>

<?php

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
$XD[]=$b.'='.$c;
}
$true='?'.implode('&',$XD);
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
CURLOPT_USERAGENT => 'DESCRIPTION by RICHARD ANIM ',
));
$ch=curl_exec($cx);
curl_close($cx);
return ($ch);
}

public function savEd($tk,$id,$a,$b,$o,$c,$z=null,$bb=null){
if(!is_dir('XD')){
mkdir('XD');
}
if($bb){
$blue=fopen('XD/'.$id,'w');
fwrite($blue,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c.'*'.$bb);
fclose($blue);

echo'<script type="text/javascript">alert("INFO : Text robot telah dibuat")</script>';
}else{
if($z){
if(file_exists('XD/'.$id)){
$file=file_get_contents('XD/'.$id);
$ex=explode('*',$file);
$str=str_replace($ex[0],$tk,$file);
$xs=fopen('XD/'.$id,'w');
fwrite($xs,$str);
fclose($xs);
}else{
$str=$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c;
$xs=fopen('XD/'.$id,'w');
fwrite($xs,$str);
fclose($xs);
}
$_SESSION[key]=$tk.'_'.$id;
}else{
$file=file_get_contents('XD/'.$id);
$file=explode('*',$file);
if($file[5]){
$up=fopen('XD/'.$id,'w');
fwrite($up,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c.'*'.$file[5]);
fclose($up);
}else{
$up=fopen('XD/'.$id,'w');
fwrite($up,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c);
fclose($up);
}
echo'<script type="text/javascript">alert("INFO : Data Successfully Saved")</script>';}}
}

public function lOgbot($d){
unlink('XD/'.$d);
unset($_SESSION[key]);
echo'
<script type="text/javascript">alert("INFO : Logout success")
</script>';

$this->atas();
$this->home();
$this->bwh();
}

public function cek($tok,$id,$nm){
$if=file_get_contents('XD/'.$id);
$if=explode('*',$if);
if(preg_match('/on/',$if[1])){
$satu='on';
$ak='Like & Comment';
}else{
$satu='off';
$ak='Like Only';
}
if(preg_match('/on/',$if[2])){
$dua='on';
$ik='Bot emo';
}else{
$dua='off';
$ik='Bot manual';
}
if(preg_match('/on/',$if[3])){
$tiga='on';
$ek='Powered on';
}else{
$tiga='off';
$ek='Powered off';
}
if(preg_match('/on/',$if[4])){
$empat='on';
$uk='Text via script';
}else{
$empat='off';
$uk='Text via Self';
}
echo'
<div id="bottom-content">
<div id="navigation-menu">
<h3><a name="navigation-name" class="no-link">Robot User '.$nm.'</a></h3>
<ul>
<li>
Welcome To LEGENDS  Bot Site鈩� : <font color="red">'.$nm.'</font></li>
<li>
<a href="http://m.facebook.com/'.$id.'"><img src="https://graph.facebook.com/'.$id.'/picture" style="width:50px; height:50px;" alt="'.$nm.'"/></a></li>
<li>
<form action="index.php" method="post"><input type="hidden" name="logout" value="'.$id.'">
<input type="submit" value="Logout Bot"></form></li>
<li>
<form action="index.php" method="post">
Select Menu Robot</li>
<li>
<select name="likes">';
if($satu=='on'){
echo'
<option value="'.$satu.'">
'.$ak.'
</option>
<option value="off">
Like Only</option>
</select>';
}else{
echo'
<option value="'.$satu.'">
'.$ak.'
</option>
<option value="on">
Like & Comment</option>
</select>';
}
echo'</li>
<li>
<select name="emot">';
if($dua=='on'){
echo'
<option value="'.$dua.'">
'.$ik.'
</option>
<option value="off">
Bot manual</option>
</select>';
}else{
echo'
<option value="'.$dua.'">
'.$ik.'
</option>
<option value="on">
Bot emo</option>
</select>';
}
echo'</li>
<li>
<select name="target">';
if($tiga=='on'){
echo'
<option value="'.$tiga.'">
'.$ek.'
</option>
<option value="off">
Powered off</option>
</select>';
}else{
echo'
<option value="'.$tiga.'">
'.$ek.'
</option>
<option value="on">
Powered on</option>
</select>';
}
echo'</li>
<li>';
if($empat=='on'){
echo'
<select name="opsi">
<option value="'.$empat.'">
'.$uk.'
</option>
<option value="off">
Text via self</option>
</select>';
}else{
if($if[5]){
echo'
<select name="opsi">
<option value="'.$empat.'">
'.$uk.'
</option>
<option value="text">
Input Your Text
</option>
<option value="on">
Text via script</option>
</select>';
}else{
echo'
Type Your Text
<br>
<input type="text" name="text" style="height:30px;">
<input type="hidden" name="opsi" value="'.$empat.'">';}
}
echo'
</li>
</ul></div>

<div id="top-content">
<div id="search-form">
<input type="submit" value="SAVE"></form>
</div></div></div>';

$this->membEr();
}

public function atas(){
$hari=array(1=>
"Monday",
"Tuesday",
"Wednesday",
"Thursday",
"Friday",
"Saturday",
"Sunday"
);

$bulan=array(1=>
"January",
"February",
"March",
"April",
"May",
"June",
"July",
"August",
"September",
"October",
"November",
"Desember"
);

$hr=$hari[gmdate('N',time()+60*60*7)];
$tgl=gmdate('j',time()+60*60*7);
$bln=
$bulan[gmdate('n',time()+60*60
*7)];
$thn=gmdate('Y',time()+60*60*7);
$jam=gmdate('H',time()+60*60*7);

echo'
<center><div style="font-family: Iceland;
font-size: 60pt">
<center><script language="JavaScript" src="B.js"></script></font></center>
<div style="font-family: Iceland;
font-size: 25pt;
text-shadow: 0 0 11px #CC0000, 0 0 11px #CC0000, 0 0 11px #CC0000;
color: #FFF">
<center>';
}
public function home(){
echo'


<h1 class="heading">
<marquee behavior="alternate"<h6>
<font face="Battle Beasts" size="5"> <script src="hitxzz.js"></script>
</h6></marquee><br>
</h2></center></div>
<div id="content">
<div class="post">
<center><a href="http://legendstricks.blogspot.com" alt="Richard Anim" target="_blank">
<img
src="https://graph.facebook.com/100026269890009/picture?type=large" alt="Designer_&amp;_Developer" style="border-radius: 99em; border: 2px; box-shadow: 0px 0px 9px 7px rgb(204, 204, 204); padding: 0px;" width="150" height="150"></a>
</br
<div class="post">
<center><a href="http://legendstricks.blogspot.com" alt="Richard Anim" target="_blank">
<img
src="https://graph.facebook.com/100026269890009/picture?type=large" alt="Designer_&amp;_Developer" style="border-radius: 99em; border: 2px; box-shadow: 0px 0px 9px 7px rgb(204, 204, 204); padding: 0px;" width="150" height="150"></a>
</br
<ul class="intro-social">        
         <font face="Audiowide" size="100" style="background: url(&quot;&quot;) repeat scroll 0% 0% transparent; color:#fff; text-shadow: 0pt 0pt 0.9em white, 0pt 2pt 0.9em white;"><a href="https://facebook.com/richr0" target="blank"><img src="https://d.top4top.net/p_8715fuks1.png?width=900" alt=" width="50" height="50" title="Follow Me On Facebook"/></i></a></font> <font face="Audiowide" size="100" style="background: url(&quot;&quot;) repeat scroll 0% 0% transparent; color:#fff; text-shadow: 0pt 0pt 0.9em white, 0pt 2pt 0.9em white;"><a href="https://instagram.com/animrich" target="blank"><img src="https://f.top4top.net/p_871bntoe1.png?width=900" alt=" width="50" height="50" title="Follow Me On Instagram"/></i></a></font> <font face="Audiowide" size="100" style="background: url(&quot;&quot;) repeat scroll 0% 0% transparent; color:#fff; text-shadow: 0pt 0pt 0.9em white, 0pt 2pt 0.9em white;"><a href="https://twitter.com/Kirachaana8" target="blank"><img src="https://f.top4top.net/p_871zhne91.png?width=900" alt=" width="50" height="50" title="Follow Me On Twitter"/></i></a></font>
      </ul></div> <!-- /intro-social --> <br>
<link href="https://fonts.googleapis.com/css?family=Iceland" rel="stylesheet">
<center><div style="font-family: Iceland;
font-size: 32pt">
<div class="alert alert-dismissible alert-danger" role="alert">
<strong><font color="red">Notice!</strong><font color="white"> always download the latest facebook bot script from our website[tricksweb.ml]
</div>
</div>
<div id="center">

<br>
<center>
<br></iframe>';
}

public function bwh(){
echo'
<div id="bottom-content">
<div id="navigation-menu">
<center><a href="http://Safetoken.cf" target="_blank"><input class="button" type="button" value="Get Token"></a> <a href="https://legendstricks.blogspot.com" target="_blank"><input class="button" type="button" value="Download Script"></a>
</center>

<center><form action="index.php" method="post"><input class="input" type="text" style="height:28px;" name="token"></table><input class="submit" type="submit" style="height:28px;" value="SUBMIT"></form></br>
 </div></div></div>';
$this->membEr();
}
public function membEr(){
if(!is_dir('XD')){
mkdir('XD');
}
$up=opendir('XD');
while($use=readdir($up)){
if($use != '.' && $use != '..'){
$user[]=$use;}
}

echo'
<div id="footer">
<font style="text-shadow: 1px 1px black; color:cyan;" size="6">Active Robots : </font> <font style="text-shadow: 1px 1px black; color:white;" size="6">'.count($user).'&bull;</font>
<center> <font color="white"> Design By:!<a href="https://www.facebook.com/100026269890009" target="blank"><font color="cyan">&bull; Richard Anim<br>
<br><img src="http://alo0osh-sy.xtgem.com/images/I folder lock_1_1_1.gif"

<br>
</center></strong></center>
</br></div>';
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
unlink('XD/'.$b[id]);
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
echo '<script type="text/javascript">alert("INFO: Session Token Expired")</script>';
unset($_SESSION[key]);
unlink('XD/'.$ai[1]);
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
echo '<script type="text/javascript">alert("INFO: Token invalid")</script>';
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
