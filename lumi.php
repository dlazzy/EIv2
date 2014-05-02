<?php

$url = 'http://monadresse';

?>

<head>
<title>
Luminosité
</title>

<style>
#page-table {
    height: 100%;
    width: 100%;
    border-collapse: collapse;
    text-align: center;
}
#page-td {
    height: 100%;
    padding: 0;
    vertical-align: middle;
}
div#ct-global {
    width: 300px;
    margin: 20px auto;
text-align: center;
border: 1px solid #777;
border-bottom: 3px solid #777;
background: #EEE;
border-radius: 3px;
}

</style>
</head>

<body style="font-family: verdana;">

<table id="page-table"><tbody><tr><td id="page-td">
    <div id="ct-global">



    <div class="center_content" id="center">

<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>

<p>
Actualisation auto: <br>
<button type="button" style="" disabled onclick="auto = 1;document.getElementById('off').disabled=false;document.getElementById('on').disabled=true;" id="on">ON</button> 
<button type="button" style="" onclick="auto = 0;document.getElementById('off').disabled=true;document.getElementById('on').disabled=false;" id="off">OFF</button>
</p>

<p><strong>Luminosit&eacute;: <span id="l">chargement</span></strong></p>

<p>
Led: <br>
<button type="button" id="lightOn" onclick="var iframe = document.getElementById('iframe');iframe.src = 'http://monadresse';document.getElementById('lightOff').disabled=false;document.getElementById('lightOn').disabled=true;">ON</button>
<button type="button" id="lightOff" onclick="var iframe = document.getElementById('iframe');iframe.src = 'http://monadresse';document.getElementById('lightOff').disabled=true;document.getElementById('lightOn').disabled=false;">OFF</button>
</p>
 
<script>

function lumi() {

resultat = $.get('lumi-data.php');

setTimeout(actualise, 3000);

}

function actualise() {

luminosite = resultat.responseText;

if (luminosite == 'undefined')
{
setTimeout(actualise,300);
}
else
{
document.getElementById('l').innerHTML=luminosite;
}


}
</script>
<script>

auto = 1;

function everyXSeconds() {

setTimeout(everyXSeconds, 4000);



if (auto == '1')
{
resultat = $.get('lumi-data.php');
setTimeout(actualise,3000);
}

}

everyXSeconds();

</script>


	</div>
	
	

    </div>
	</td></tr></tbody></table>


<iframe id="iframe" src="<?php echo $url; ?>" style="visible: hidden; width: 10px; height: 10px; border: 0;" seamless></iframe>

</body>
