<!DOCTYPE html>
<html>
	<head>
		<title>MaPTis : Login</title>
		<style>
			* {
				font-family: 'Poppins',sans-serif;
			}
			body{
				font-family: 'Poppins',sans-serif;
				margin: 0px;
			}
		</style>
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
		<link rel="stylesheet" href="../css/login_style.css">
		<link rel="stylesheet" href="../css/w3.css">
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
	</head>
	<body>
		<div class="topnav">
			<div class="web_name">
				<a href="../index.html">MaPTis</a>
			</div>
			<a href="../about.html">About</a>
			<a href="../contact.html">Contact</a>
			<a href="../login.html">Logout</a>
		</div>
	<?php
		$database = file_get_contents("../json/data.json");
		$database = json_decode($database, TRUE);
		if(isset($_POST['username']) && isset($_POST['password'])){
		for($i=0; $i < count($database); $i++){
			if($database[$i]['username'] == $_POST['username']){
				if($database[$i]['password'] == $_POST['password']){
					$success = TRUE;
					break;
				}else{
					$success = FALSE;
				}
			}else{
				$success = FALSE;
			}
		}
		}else{
			echo "harap isi semua bagian";
		}
		if($success){
			echo '
			<style>
				.informasi{
					margin:auto;
					height: 200px;
					width: 400px;
					background-color: rgba(255,255,255,0.13);
				
					border-radius: 10px;
					/*backdrop-filter: blur(10px);*/
					border: 2px solid rgba(255,255,255,0.1);
					box-shadow: 0 0 5px rgba(8,7,16,0.6);
					padding: 50px 35px;
				}
				.informasi *{
					font-family: "Poppins",sans-serif;
					color: #000000;
					letter-spacing: 0.5px;
					outline: none;
					border: none;
				}
				.informasi h3{
					color: green;
					font-size: 32px;
					font-weight: 500;
					line-height: 42px;
					text-align: center;
				}
				.informasi p{
					font-size: 16px;
					font-weight: 500;
					line-height: 42px;
					text-align: center;
				}
			</style>
			<div class="informasi" style="margin-top: 50px; margin-bottom: 50px">
				<h3 style="margin-top: -5px"> Sukses !</h3>
				<p>Login web MaPTis telah berhasil</p>
			</div>
			';
		}else{
			echo'
			<style>
				.informasi{
					margin:auto;
					height: 200px;
					width: 400px;
					background-color: rgba(255,255,255,0.13);
					border-radius: 10px;
					/*backdrop-filter: blur(10px);*/
					border: 2px solid rgba(255,255,255,0.1);
					box-shadow: 0 0 5px rgba(8,7,16,0.6);
					padding: 50px 35px;
				}
				.informasi *{
					font-family: "Poppins",sans-serif;
					color: #000000;
					letter-spacing: 0.5px;
					outline: none;
					border: none;
				}
				.informasi h3{
					color: red;
					font-size: 32px;
					font-weight: 500;
					line-height: 30px;
					text-align: center;
				}
				.informasi p{
					font-size: 16px;
					font-weight: 500;
					line-height: 42px;
					text-align: center;
				}
			</style>
			<div class="informasi" style="margin-top: 50px; margin-bottom: 50px">
				<h3 style="margin-top: -15px;"> Gagal !</h3>
				<p>Username dan password tidak ada. Silahkan register dahulu</p>
			</div>
			';
		}
	?>
	<div style="margin-top: 50px"></div>
		<div class="w3-row-padding" style=" background-color: #2d2d2d; height: auto">
			<div style="color:white; margin-left: 35px; float: left">
				<p style="font-size: 32px">MaPTis</p>
				<p style="margin-top: -10px">Materi Pelajaran Gratis</p>
				<p style="margin-top: -10px">Untuk seluruh rakyat Indonesia </p>
				<p style="font-size: 20px">Dukung kami :</p>
				<div class="sosmed">
					<a href="https://www.facebook.com"><img src="../img/icon-fb.png"/></a>
					<a href="https://www.instagram.com/nyek_"><img src="../img/icon-instagram.png"/></a>
					<a href="https://www.twitter.com"><img src="../img/icon-twitter.png"/></a>
					<a href="https://www.youtube.com"><img style="margin-left: 5px"src="../img/icon-youtube.png"/></a>
				</div>
			</div>
			<div class="mapouter">
				<p style="color:white;font-size: 20px">Temukan kami :</p>
				<div class="gmap_canvas">
					<iframe class="gmap_iframe" width="300px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=300&amp;height=200&amp;hl=en&amp;q=tanjungsari, rembang, central java&amp;t=&amp;z=18&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
				</div>
				<style>
					.mapouter{float:right; margin-bottom: 100px; margin-top: 0px; margin-right: 30px;position:relative;text-align:right;width:300px;height:200px;}
					.gmap_canvas {float:right;overflow:hidden;background:none!important;width:300px;height:200px;}
					.gmap_iframe {height:200px!important;}
				</style>
			</div>
		</div>
		<p style="background-color: #191919; margin: 0px; color: white; text-align:center; height: 30px">Copyright Hamma @2021</p>
		<script src="js/slideshow.js"></script>
	</body>
</html>
