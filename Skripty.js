/*Sjet*/
function Sjet(){
window.scrollTo(0,document.documentElement.scrollHeight);
}

/*Vybalit*/
function Vybalit(Copak){
if(Copak=='Podklady'){
document.getElementById('Podklady').innerHTML='<A Onclick="Text.location.href=\'/kanon.pdf\'" Title="Kánon titulů">Kánon</A><A Onclick="Text.location.href=\'Navrhy.pdf\'" Title="Doporučená témata od Šindelkové">Návrhy</A>';
}else if(Copak=='Odchod'){
document.getElementById('Odchod').innerHTML='<A Onclick="Text.location.href=\'Zapisy.html#Tisk\'" Title="Vytisknout zápisy">Tisk</A><A Onclick="Text.location.href=\'Zapisy.html#Pdf\'" Title="Stáhnout zápisy">Pdf</A>';
}}

/*Vyjet*/
function Vyjet(Co){
if(Co=='#Tisk'){
window.print();
}else if(Co=='#Pdf'){
location.href='http://pdfcrowd.com/url_to_pdf/?pdf_name=Zapisy.pdf&use_print_media=1';
}else{
setInterval(function(){location.reload();},10000);
}}

/*Napravit*/
var Inputy,i,Datalisty,j;
function Napravit(){
function ZjistitPodporuPlaceholderu(){
return ('placeholder' in document.createElement('input'));
}
function ZjistitPodporuDatalistu(){
return ('list' in document.createElement('input'));
}
function Odsadit(){
return function(){
if(this.value==this.getAttribute('placeholder')){
this.value='';
this.style.color='inherit';
}};}
function Dosadit(){
return function(){
if(this.value.length===0){
this.value=this.getAttribute('placeholder');
this.style.color='darkgray';
}};}
if(!ZjistitPodporuPlaceholderu()){
Inputy=document.getElementsByTagName('input');
for(i=0;i<Inputy.length;i++){
if(Inputy[i].getAttribute('placeholder')){
Inputy[i].style.color='darkgray';
Inputy[i].value=Inputy[i].getAttribute('placeholder');
Inputy[i].onclick=Odsadit();
Inputy[i].onblur=Dosadit();
}}}
if(!ZjistitPodporuDatalistu()){
Inputy=document.getElementsByTagName('input');
for(i=0;i<Inputy.length;i++){
if(Inputy[i].getAttribute('list')){
Datalisty=document.getElementsByTagName('datalist');
for(j=0;j<Datalisty.length;j++){
Datalisty[j].style.display='none';
}}}}}

/*Tikat*/
var Dnes,Konec,Zbytek,Rozpor,Den,Hodina,Minuta,Sekunda,Vstup,Kombinace,Sklad;
function Tikat(Doba,Poloha){
Dnes=new Date();
Konec=new Date(Doba);
Zbytek=Konec.getTime()-Dnes.getTime();
Zbytek/=1000;
Zbytek+=Dnes.getTimezoneOffset()*60;
Rozpor=Zbytek;
Den=Math.floor(Rozpor/24/3600);
Rozpor=Rozpor%(24*3600);
Hodina=Math.floor(Rozpor/3600);
Rozpor=Rozpor%3600;
Minuta=Math.floor(Rozpor/60);
Rozpor=Rozpor%60;
Sekunda=Math.floor(Rozpor);
if(Zbytek<=0){
document.getElementById(Poloha).innerHTML='<H3>Ukončeno</H3>';
document.getElementById(Poloha).style.color='#ff4d4d';
document.getElementById(Poloha).title='Konec: '+document.getElementById(Poloha).title;
document.getElementById('Vchod').onclick=function(){
Vstup=prompt('Zápis byl ukončen!','Heslo');
Kombinace=unescape('%6C%74%65%70%65%74%61%6B%6F%70%6F%70');
if(Vstup==Kombinace){document.getElementById('Vchod').href='Zapis.php';
}else{
alert('Nesprávné heslo!');
}};
}else if(Zbytek>=24*3600*7){
document.getElementById(Poloha).innerHTML='<H3>Nezačato</H3>';
document.getElementById(Poloha).style.color='#4d4dff';
document.getElementById(Poloha).title='Začátek: '+document.getElementById(Poloha).title;
document.getElementById('Vchod').onclick=function(){
Vstup=prompt('Zápis ještě nezačal!','Heslo');
Kombinace=unescape('%6C%74%65%70%65%74%61%6B%6F%70%6F%70');
if(Vstup==Kombinace){
document.getElementById('Vchod').href='Zapis.php';
}else{
alert('Nesprávné heslo!');
}};
}else{
Sklad='Zbývá ';
switch(Den){
case 0: Sklad+='';break;
case 1: Sklad+=Den+' den';break;
case 2: Sklad+=Den+' dny';break;
case 3: Sklad+=Den+' dny';break;
case 4: Sklad+=Den+' dny';break;
default: Sklad+=Den+' dní';break;
}
if(Den>0){Sklad+=', ';}
switch(Hodina){
case 0: Sklad+='';break;
case 1: Sklad+=Hodina+' hodina';break;
case 2: Sklad+=Hodina+' hodiny';break;
case 3: Sklad+=Hodina+' hodiny';break;
case 4: Sklad+=Hodina+' hodiny';break;
default: Sklad+=Hodina+' hodin';break;
}
if(Hodina>0&&(Den>0||Hodina>0)){Sklad+=', ';}
switch(Minuta){
case 0: Sklad+='';break;
case 1: Sklad+=Minuta+' minuta';break;
case 2: Sklad+=Minuta+' minuty';break;
case 3: Sklad+=Minuta+' minuty';break;
case 4: Sklad+=Minuta+' minuty';break;
default: Sklad+=Minuta+' minut';break;
}
if(Sekunda>0&&(Minuta>0||Hodina>0||Den>0)){Sklad+=' a ';}
switch(Sekunda){
case 0: Sklad+='';break;
case 1: Sklad+=Sekunda+' sekunda';break;
case 2: Sklad+=Sekunda+' sekundy';break;
case 3: Sklad+=Sekunda+' sekundy';break;
case 4: Sklad+=Sekunda+' sekundy';break;
default: Sklad+=Sekunda+' sekund';break;
}
document.getElementById(Poloha).innerHTML='<H5>'+Sklad+'</H5>';
document.getElementById(Poloha).title='Konec: '+document.getElementById(Poloha).title;
document.getElementById('Vchod').onclick=function(){
document.getElementById('Vchod').href='Zapis.php';
};
setTimeout(function(){Tikat("'+Doba+'","'+Poloha+'");},100);
}}