<?php
require_once 'Aplikace/Mobile_Detect.php';
$detect=new Mobile_Detect;
$ChS=preg_match("/(?i)applewebkit\/[0-532]\./",$_SERVER['HTTP_USER_AGENT']);
$F=preg_match("/(?i)firefox\/[0-2]\./",$_SERVER['HTTP_USER_AGENT'])||preg_match("/(?i)firefox\/3\.[0-5]/",$_SERVER['HTTP_USER_AGENT']);
$I=preg_match("/(?i)msie [0-8]\./",$_SERVER['HTTP_USER_AGENT']);
$O=preg_match("/(?i)opera\/[0-8]\./",$_SERVER['HTTP_USER_AGENT'])||preg_match("/(?i)opera\/9\.[0-79] /",$_SERVER['HTTP_USER_AGENT'])||preg_match("/(?i)presto\/2\.[0-2]\./",$_SERVER['HTTP_USER_AGENT']);
if($detect->isMobile() && !$detect->isTablet()){
header('Location: Chyba.html');
}elseif($ChS||$F||$I||$O){
header('Location: Chyba.html');
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
<Link Type="Image/x-icon" Rel="Shortcut icon" Href="favicon.ico">
<Link Type="Text/css" Rel="Stylesheet" Href="http://fonts.googleapis.com/css?family=Marcellus+SC|Cinzel&subset=latin,latin-ext">
<Link Type="Text/css" Rel="Stylesheet" Href="Styly.css">
<Style Type="Text/css">
Body{Background-image:url(Kresby/Les.jpg)}
Header{Font-size:2.8em;Right:5%;Top:5%;Width:40%}
Nav>Div{Cursor:pointer;-moz-transition:background 1s;-o-transition:background 1s;-webkit-transition:background 1s;Transition:background 1s;Width:20%}
Nav>Div:nth-of-type(1){Bottom:8%;Left:65%}
Nav>Div:nth-of-type(1):hover,Nav>Div:nth-of-type(1):active{Background-color:#d2ff52}
Nav>Div:nth-of-type(2){Left:5%;Top:55%}
Nav>Div:nth-of-type(2):hover,Nav>Div:nth-of-type(2):active{Background-color:#d2d2ff}
Nav>Div:nth-of-type(3){Left:45%;Top:35%}
Nav>Div:nth-of-type(3):hover,Nav>Div:nth-of-type(3):active{Background-color:#ffd252}
A[Title^="HTML5"]{Color:rgba(255,255,255,0)}
A>Img{Position:absolute}
A>Img:nth-of-type(1){Height:8.7%;Left:12.8%;Top:0;Width:4.25%}
A>Img:nth-of-type(2){Height:5.8%;Left:13.6%;Top:8.2%;Width:2.83%}
A>Img:nth-of-type(3){Height:5.8%;Left:13.7%;Top:12%;Width:2.83%}
Footer{Bottom:0;Position:absolute;Left:0;Text-align:center;Width:100%}
Footer>A{Color:white;Font-weight:bold}
Footer>A:first-of-type{Float:left}
Footer>A:last-of-type{Float:right}
</Style>
<?php
$ChS=preg_match("/(?i)applewebkit\/533\.[0-7] /",$_SERVER['HTTP_USER_AGENT']);
$F=preg_match("/(?i)firefox\/3\./",$_SERVER['HTTP_USER_AGENT']);
$O=preg_match("/(?i)presto\/2\.[0-7]\./",$_SERVER['HTTP_USER_AGENT']);
if($ChS||$F||$O){
echo "<Script Src=\"Aplikace/html5shiv.js\"></Script>";
}
?>
<Script Type="Application/javascript" Src="Skripty.js"></Script>
<Title>Zápis referátů</Title>
</Head>
<Body Onload="Tikat('2013-11-07T20:00','Uno');">
<Header>Zápis referátů</Header>
<Nav>
<Div Onclick="location.href='CeskyJazyk/';" Title="Český jazyk">
<H1>Český jazyk</H1>
<Span Id="Uno" Title="31. října 2013 20:00"></Span>
</Div>
<Div Onclick="location.href='Dejepis/';" Title="Dějepis">
<H1>Dějepis</H1>
<Span Id="Dos" Title="18. února 2013 20:00"></Span>
</Div>
<!--&-<-<
<Div Onlick="location.href='&/';" Title="&">
<H1>&</H1>
<Span Id="Tre" Title="***"></Span>
</Div>
>->-&-->
</Nav>
<A Href="http://www.w3.org/html/logo/" Target="_blank" Title="HTML5 Powered with CSS3 Styling and Semantics">
<Img Alt="HTML5" Src="Kresby/HTML5_1Color_White.png">
<Img Alt="CSS3" Src="Kresby/CSS3.png">
<Img Alt="Semantics" Src="Kresby/Semantics.png">
</A>
<Footer>
<A Href="Diskuse/" Title="Diskuse">Diskuse</A>
<A Href="Archiv/" Title="Archiv">Archiv</A>
<A Href="http://www.dvorapa.cz/" Target="_blank" Title="Autor">&copy; 2014 Pavel Dvořák</A>
</Footer>
</Body>
</Html>