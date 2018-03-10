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
<Meta Name="Robots" Content="Nofollow,index">
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
<Title>Zápis referátů | Diskuse</Title>
</Head>
<Body>
<Header>Diskuse</Header>
<Article>
<!--Disqus-->
<div id="disqus_thread"></div>
<script type="text/javascript">
/* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
var disqus_shortname = 'zapisreferatu'; // required: replace example with your forum shortname

/* * * DON'T EDIT BELOW THIS LINE * * */
(function() {
var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
<a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>
<!--Disqus-->
</Article>
<Aside Onclick="location.href='/';" Title="Úvodní stránka">
<Img Alt="" Src="/Kresby/Roh.png">
<Img Alt="" Src="/Kresby/Roh.png">
<Img Alt="" Src="/Kresby/Roh.png">
<Img Alt="" Src="/Kresby/Roh.png">
</Aside>
</Body>
</Html>