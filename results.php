<?php
session_start();
//Getting session variables
$eyes = $_SESSION['eyes'];
$mleyes = $_SESSION['mleyes'];

$blood = $_SESSION['blood'];
$mlblood = $_SESSION['mlblood'];

$chin = $_SESSION['chin'];
$mlchin = $_SESSION['mlchin'];

$dimples = $_SESSION['dimples'];
$mldimples = $_SESSION['mldimples'];

$hair = $_SESSION['hair'];
$mlhair = $_SESSION['mlhair'];

$marfan = $_SESSION['marfan'];
$mlmarfan = $_SESSION['mlmarfan'];

$sickle = $_SESSION['sickle'];
$mlsickle = $_SESSION['mlsickle'];

$cystic = $_SESSION['cystic'];
$mlcystic = $_SESSION['mlcystic'];

$detail = $_SESSION['detail'];

?>
<!DOCTYPE HTML>
<!--
	Spectral by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>GeneGenie</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	<body class="landing">

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
					<header id="header" class="alt">
						<h1><a href="index.html">GeneGenie</a></h1>
						<!--<nav id="nav">-->
						<!--	<ul>-->
						<!--		<li class="special">-->
						<!--			<a href="#menu" class="menuToggle"><span>Menu</span></a>-->
						<!--			<div id="menu">-->
						<!--				<ul>-->
						<!--					<li><a href="index.html">Home</a></li>-->
						<!--					<li><a href="generic.html">Generic</a></li>-->
						<!--					<li><a href="elements.html">Elements</a></li>-->
						<!--					<li><a href="#">Sign Up</a></li>-->
						<!--					<li><a href="#">Log In</a></li>-->
						<!--				</ul>-->
						<!--			</div>-->
						<!--		</li>-->
						<!--	</ul>-->
						<!--</nav>-->
					</header>
					
				<style>
				    #infobubble {
				        height: 50px;
				        width: 50px;
				        margin-top: 20px;
				        margin-left: 95%;
				        position: fixed;
				        border-radius: 50px;
				        background-color: #0B9FC4;
				        text-align: center;
				        padding-top: 10px;
				    }
				</style>
				<div id="infobubble">
				    <span><strong>?</strong></span>
				</div>

				<style>
				    div a[href*="https://www.000webhost.com/"] {
				        visibility: hidden !important;
				    }
					.qimg {
						height:100px;
						width:auto;
						border-radius:100px;
						border:3px solid white;
						margin-bottom:10px;
						margin-right:5px;
						margin-left:5px;
					}
					.selected {
						border:8px solid white;
					}
					.noshow {
						display: none !important;
					}
					table {
					    background-color: #7EBDC3;
					}
					#page-wrapper {
					    background-color: #7EBDC3;
					}
				</style>

				<!-- Header -->
					<section class="wrapper style2 special">
						<div class="inner">
							<h3 style="font-size:50px;">Results</h3>
							<p>Based on your answers, we have predicted the most likely traits for the child.</p>
							<p><a href="/detailresults.php"><?php if($detail=="false"){echo "More";}else{echo "Less";}?> detail</a></p>
						</div>
					</section>
					
				<!-- Detailed or Simple -->
				<?php
				if ($detail == "true") {
				    require("results_detailed.php");
				} else {
				    require("results_simple.php");
				}
				?>

			</div>


		<!--<form method="GET" action="predict.php">-->
		<!--	<input type="hidden" id="meyes" name="meyes" value="" />-->
		<!--	<input type="hidden" id="feyes" name="feyes" value="" />-->
		<!--	<input type="hidden" id="mblood" name="mblood" value="" />-->
		<!--	<input type="hidden" id="fblood" name="fblood" value="" />-->
		<!--	<input type="hidden" id="mchin" name="mchin" value="" />-->
		<!--	<input type="hidden" id="fchin" name="fchin" value="" />-->
		<!--	<input type="hidden" id="mdimples" name="mdimples" value="" />-->
		<!--	<input type="hidden" id="fdimples" name="fdimples" value="" />-->
		<!--	<input type="hidden" id="mhair" name="mhair" value="" />-->
		<!--	<input type="hidden" id="fhair" name="fhair" value="" />-->
		<!--</form>-->

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>
			<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
		
		<!-- Info files -->
		<script src="info/eyes.js"></script>
		<script src="info/blood.js"></script>
		<script src="info/chin.js"></script>
		<script src="info/dimples.js"></script>
		<script src="info/hair.js"></script>
		<script src="info/marfan.js"></script>
		<script src="info/sickle.js"></script>
		<script src="info/cystic.js"></script>

		<!-- Form inputs -->
		<script src="form.js"></script>

		<!-- Submit form -->
		<script>
			$('a[href^="#submit"]').on('click', function() {
				window.onbeforeunload = null;
				$("form").submit();
			});
		</script>

		<!-- Scrolling and Info boxes -->
		<script>
			$('a[href^="#eyesinfo"]').on('click', function(e) {
				e.preventDefault();
				swal("Eye Colour", eyesinfo, {
					buttons: {
						more: {
							text: "See more",
							value: "more",
						},
						close: {
							text: "Close",
							value: "close",
						},
					},
				}).then((value) => {
					switch (value) {
						case "more":
							swal("Eye Colour", eyesinfoc);
					}
				});
			});
			$('a[href^="#bloodinfo"]').on('click', function(e) {
				e.preventDefault();
				swal("Blood Type", bloodinfo, {
					buttons: {
						more: {
							text: "See more",
							value: "more",
						},
						close: {
							text: "Close",
							value: "close",
						},
					},
				}).then((value) => {
					switch (value) {
						case "more":
							swal("Blood Type", bloodinfoc);
					}
				});
			});
			$('a[href^="#chininfo"]').on('click', function(e) {
				e.preventDefault();
				swal("Cleft Chin", chininfo, {
					buttons: {
						more: {
							text: "See more",
							value: "more",
						},
						close: {
							text: "Close",
							value: "close",
						},
					},
				}).then((value) => {
					switch (value) {
						case "more":
							swal("Cleft Chin", chininfoc);
					}
				});
			});
			$('a[href^="#dimplesinfo"]').on('click', function(e) {
				e.preventDefault();
				swal("Dimples", dimplesinfo, {
					buttons: {
						more: {
							text: "See more",
							value: "more",
						},
						close: {
							text: "Close",
							value: "close",
						},
					},
				}).then((value) => {
					switch (value) {
						case "more":
							swal("Dimples", dimplesinfoc);
					}
				});
			});
			$('a[href^="#hairinfo"]').on('click', function(e) {
				e.preventDefault();
				swal("Hair Type", hairinfo, {
					buttons: {
						close: {
							text: "Close",
							value: "close",
						},
					},
				}).then((value) => {
					switch (value) {
						case "more":
							swal("Dimples", dimplesinfoc);
					}
				});
			});
			$('a[href^="#marfaninfo"]').on('click', function(e) {
				e.preventDefault();
				swal("Marfan Syndrome", marfaninfo, {
					buttons: {
						close: {
							text: "Close",
							value: "close",
						},
					},
				}).then((value) => {
					switch (value) {
						case "more":
							swal("Dimples", dimplesinfoc);
					}
				});
			});
			$('a[href^="#cysticinfo"]').on('click', function(e) {
				e.preventDefault();
				swal("Cystic Fibrosis", cysticinfo, {
					buttons: {
						close: {
							text: "Close",
							value: "close",
						},
					},
				}).then((value) => {
					switch (value) {
						case "more":
							swal("Dimples", dimplesinfoc);
					}
				});
			});
			$('a[href^="#sickleinfo"]').on('click', function(e) {
				e.preventDefault();
				swal("Sickle Cell Anaemia", sickleinfo, {
					buttons: {
						close: {
							text: "Close",
							value: "close",
						},
					},
				}).then((value) => {
					switch (value) {
						case "more":
							swal("Dimples", dimplesinfoc);
					}
				});
			});
			
			$('#infobubble').on('click', function(e) {
			    e.preventDefault();
			    swal("Disclaimer", "This genetic inheritance calculator uses simplified models to calculate traits and is therefore not 100% accurate, as human genetics is far more complex than a simple mendelian dominant/recessive model. To find out more about how genetic inheritance is estimated, click the ‘learn more’ button after each trait.");
			});

			$('a[href^="#q"]').on('click', function(e) {
				e.preventDefault();

				var target = this.hash;
				var $target = $(target);

				$('html, body').animate({
					'scrollTop': $target.offset().top - $(window).height()/3
				}, 1000, 'swing');
			});
		</script>
		
		<!-- Mobile Detector -->
		<script>
            function detectMobile() {
              var check = false;
              (function(a){if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4))) check = true;})(navigator.userAgent||navigator.vendor||window.opera);
              return check;
            };
            if(detectMobile()) {
                window.location("http://genegenie.000webhostapp.com/detailresults.php");
            }
		</script>

	</body>
</html>