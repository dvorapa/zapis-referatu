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
<Meta Name="Robots" Content="Nofollow,noindex">
<Link Type="Image/x-icon" Rel="Shortcut icon" Href="/favicon.ico">
<Style Type="Text/css">
Body{Background-color:#d2ff52;Color:#7c6c7c;Font-family:candara,serif;Text-align:center}
Form{Background-color:white;-moz-box-shadow:2px 2px 1px 1px #7c6c7c;-webkit-box-shadow:2px 2px 1px 1px #7c6c7c;Box-shadow:2px 2px 1px 1px #7c6c7c;Display:table;Height:auto;Margin:auto;Position:absolute;Width:35%;Top:0;Left:0;Bottom:0;Right:0}
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
<Title>Zapsat se</Title>
</Head>
<Body Onload="Napravit();">
<Form Action="index.php" Method="Post">
<Fieldset>
<Legend>Student</Legend>
<Input List="Jmena" Name="Meno" Placeholder="Jméno" Required Title="Jméno" Type="Text">
<Datalist Id="Jmena">
<Option>Anna</Option>
<Option>Anton</Option>
<Option>Dominika</Option>
<Option>Eliška</Option>
<Option>Eva</Option>
<Option>Jan</Option>
<Option>Jana</Option>
<Option>Jiří</Option>
<Option>Karolína</Option>
<Option>Kristýna</Option>
<Option>Libor</Option>
<Option>Líza</Option>
<Option>Lucie</Option>
<Option>Magdalena</Option>
<Option>Michaela</Option>
<Option>Michal</Option>
<Option>Miroslav</Option>
<Option>Monika</Option>
<Option>Pavel</Option>
<Option>Peter</Option>
<Option>Petra</Option>
<Option>Stanislav</Option>
<Option>Šimon</Option>
<Option>Tereza</Option>
<Option>Veronika</Option>
</Datalist>
<Input List="Prijmeni" Name="Priezvisko" Placeholder="Příjmení" Required Title="Příjmení" Type="Text">
<Datalist Id="Prijmeni">
<Option>Bičík</Option>
<Option>Dumková</Option>
<Option>Dvořák</Option>
<Option>Dvořáková</Option>
<Option>Frolík</Option>
<Option>Gemeri</Option>
<Option>Getta</Option>
<Option>Honzejková</Option>
<Option>Jirounková</Option>
<Option>Kamlach</Option>
<Option>Kolářová</Option>
<Option>Kozmér</Option>
<Option>Křečková</Option>
<Option>Kudrnáčová</Option>
<Option>Melčáková</Option>
<Option>Muschaliková</Option>
<Option>Nevstával</Option>
<Option>Novotná</Option>
<Option>Pelantová</Option>
<Option>Richterová</Option>
<Option>Spišák</Option>
<Option>Staňková</Option>
<Option>Stuchlíková</Option>
<Option>Šilhavá</Option>
<Option>Tereškun</Option>
<Option>Teubnerová</Option>
<Option>Vacková</Option>
<Option>Zajíček</Option>
</Datalist>
</Fieldset>
<Fieldset>
<Legend>Zvolené dílo</Legend>
<Input Name="Aautor" Placeholder="Autor" Title="Autor" Type="Text">
<Input Name="Akniha" Placeholder="Dílo" Title="Dílo" Type="Text">
</Fieldset>
<Fieldset>
<Legend>Případná další</Legend>
<Input Name="Bautor" Placeholder="Autor" Title="Autor" Type="Text">
<Input Name="Bkniha" Placeholder="Dílo" Title="Dílo" Type="Text">
<Br>
<Input Name="Cautor" Placeholder="Autor" Title="Autor" Type="Text">
<Input Name="Ckniha" Placeholder="Dílo" Title="Dílo" Type="Text">
</Fieldset>
<Input Type="Submit" Value="Zapsat">
</Form>
</Body>
</Html>