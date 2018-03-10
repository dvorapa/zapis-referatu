<?php
require_once '../Aplikace/Mobile_Detect.php';
$detect=new Mobile_Detect;
$ChS=preg_match("/(?i)applewebkit\/[0-532]\./",$_SERVER['HTTP_USER_AGENT']);
$F=preg_match("/(?i)firefox\/[0-2]\./",$_SERVER['HTTP_USER_AGENT'])||preg_match("/(?i)firefox\/3\.[0-5]/",$_SERVER['HTTP_USER_AGENT']);
$I=preg_match("/(?i)msie [0-8]\./",$_SERVER['HTTP_USER_AGENT']);
$O=preg_match("/(?i)opera\/[0-8]\./",$_SERVER['HTTP_USER_AGENT'])||preg_match("/(?i)opera\/9\.[0-79] /",$_SERVER['HTTP_USER_AGENT'])||preg_match("/(?i)presto\/2\.[0-2]\./",$_SERVER['HTTP_USER_AGENT']);
if($detect->isMobile() && !$detect->isTablet()){
header('Location: /Chyba.html');
}elseif($ChS||$F||$I||$O){
header('Location: /Chyba.html');
}
?>
<!Doctype Html>
<Html Lang="cs">
<Head>
<Meta Charset="Utf-8">
<Meta Name="Application-name" Content="Zápis referátů">
<Meta Name="Author" Content="Pavel Dvořák">
<Meta Name="Description" Content="Stránky třídy 8.O Gymnázia Dr. Josefa Pekaře určené pro volbu a rezervaci referátů">
<Meta Name="Keywords" Content="Gymnázium Dr. Josefa Pekaře,8.O,204">
<Meta Name="Robots" Content="Follow,index">
<Link Type="Image/x-icon" Rel="Shortcut icon" Href="/favicon.ico">
<Link Type="Text/css" Rel="Stylesheet" Href="http://fonts.googleapis.com/css?family=Marcellus+SC|Cinzel&subset=latin,latin-ext">
<Link Type="Text/css" Rel="Stylesheet" Href="/Styly.css">
<Style Type="Text/css">
Body{Background-image:url(/Kresby/Les.jpg)}
Header{Font-size:1.8em;Left:35%;Top:2%;Width:30%}
Article{Margin:0 auto;Max-height:75%;Overflow:auto;Padding:1em;Width:80%;Top:10%;Left:0;Right:0}
</Style>
<?php
$ChS=preg_match("/(?i)applewebkit\/533\.[0-7] /",$_SERVER['HTTP_USER_AGENT']);
$F=preg_match("/(?i)firefox\/3\./",$_SERVER['HTTP_USER_AGENT']);
$O=preg_match("/(?i)presto\/2\.[0-7]\./",$_SERVER['HTTP_USER_AGENT']);
if($ChS||$F||$O){
echo "<Script Src=\"/Aplikace/html5shiv.js\"></Script>";
}
?>
<Title>Zápis referátů | Archiv</Title>
</Head>
<Body>
<Header>Archiv</Header>
<Article>
<A Href="ZapisyCj2013.html">Český jazyk | Zápisy | 8.O</A><Br>
<A Href="ZapisyCj2012.html">Český jazyk | Zápisy | 7.O</A><Br>
<A Href="ZapisyDe2012.html">Dějepis | Zápisy | 7.O</A><Br>
</Article>
<Aside Onclick="location.href='/';" Title="Úvodní stránka">
<Img Alt="" Src="/Kresby/Roh.png">
<Img Alt="" Src="/Kresby/Roh.png">
<Img Alt="" Src="/Kresby/Roh.png">
<Img Alt="" Src="/Kresby/Roh.png">
</Aside>
</Body>
</Html>