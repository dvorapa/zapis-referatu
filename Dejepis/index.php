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
error_reporting(0);
if(!empty($_POST)){
$Priezvisko=$_POST["Priezvisko"];
$Meno=$_POST["Meno"];
$Objekt=$_POST["Objekt"];
$Sklad="<Tr><Td>$Priezvisko</Td><Td>$Meno</Td><Td>$Objekt</Td></Tr>"."\r\n";
$Funkce=fopen("Zapisy.html","a+");
fwrite($Funkce,$Sklad);
fclose($Funkce);
header('Location: /Dejepis/index.php');
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
<Meta Name="Robots" Content="Nofollow,index">
<Link Type="Image/x-icon" Rel="Shortcut icon" Href="/favicon.ico">
<Link Type="Text/css" Rel="Stylesheet" Href="http://fonts.googleapis.com/css?family=Marcellus+SC|Cinzel&subset=latin,latin-ext">
<Link Type="Text/css" Rel="Stylesheet" Href="/Aplikace/introjs.css">
<Link Type="Text/css" Rel="Stylesheet" Href="/Styly.css">
<Style Type="Text/css">
Body{Background-color:#d2d2ff}
Header{Font-size:1.8em;Left:35%;Top:2%;Width:30%}
Footer{Bottom:10%;Left:82.5%;Width:15%}
</Style>
<?php
$ChS=preg_match("/(?i)applewebkit\/533\.[0-7] /",$_SERVER['HTTP_USER_AGENT']);
$F=preg_match("/(?i)firefox\/3\./",$_SERVER['HTTP_USER_AGENT']);
$O=preg_match("/(?i)presto\/2\.[0-7]\./",$_SERVER['HTTP_USER_AGENT']);
if($ChS||$F||$O){
echo "<Script Src=\"/Aplikace/html5shiv.js\"></Script>";
}
?>
<Script Type="Application/javascript" Src="/Skripty.js"></Script>
<Script Type="Application/javascript" Src="/Aplikace/intro.js"></Script>
<Title>Zápis referátů | Dějepis</Title>
</Head>
<Body Onload="Tikat('2013-02-18T20:00','Dos');">
<Header data-intro="Zdravím :) Tady si můžeš zapsat referáty" data-position="bottom" data-step="1">Dějepis</Header>
<Iframe Id="Text" Name="Text" Seamless Src="Zapisy.html" data-intro="pokud už tady tedy nejsou zapsané" data-position="right" data-step="2"></Iframe>
<Nav>
<A Href="./" Id="Vchod" Title="Zápis referátů" data-intro="tak se tady konečně můžeš zapsat!" data-step="7">Zapsat se</A>
<A Id="Zapisy" Onclick="Text.location.href='Zapisy.html';" Title="Zapsané referáty" data-intro="no a jestli zde tvůj výběr stále není obsazen" data-step="6">Zápisy</A>
<A Id="Pokyny" Onclick="Text.location.href='Pokyny.html';" Title="Pokyny" data-intro="a odtud znát pravidla hry ;)" data-step="5">Pokyny</A>
<A Id="Podklady" Onclick="Text.location.href='Navrhy.pdf';" Title="Doporučená témata od Šindelkové" data-intro="ale před zápisem si tady musíš ještě vybrat" data-step="4">Návrhy</A>
<A Id="Odchod" Onclick="Vybalit('Odchod');" Title="Získání protokolu">Vyjet</A>
<A Id="Pomoc" Onclick="introJs().start();" Title="Pomoc">?</A>
</Nav>
<Footer Class="Prvky" Id="Dos" Title="18. února 2013 20:00" data-intro="a pokud na to máš vůbec ještě čas :D" data-step="3"></Footer>
<Aside Onclick="location.href='/';" Title="Úvodní stránka">
<Img Alt="" Src="/Kresby/Roh.png">
<Img Alt="" Src="/Kresby/Roh.png">
<Img Alt="" Src="/Kresby/Roh.png">
<Img Alt="" Src="/Kresby/Roh.png">
</Aside>
</Body>
</Html>