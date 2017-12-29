<?php
/* @var $this yii\web\View */
$this->title = 'WYP forum Application';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>KOU Forum</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>

	<script src="https://ajax.googleapis.com/ajax/libs/jQuery/3.2.1/jquery.min.js"></script>

	<script type="text/javascript">
	$(document).ready(function(){
	    $("#konu-ekle-buton").click(function(){
	        $("#konu-ekle-panel").slideToggle("slow");
	    });

	    /*$("#kategoriler").click(function{
	    	$.post("kategorilerigetir.php",{men: "geldi"}, function(veri){
	    		alert(veri);
	    	});
	    });*/

	    /*$("#kategoriler").hover(function{
	    	$.post("kategorilerigetir.php",{}, function(veri){
	    		alert(veri);
	    	});
	    });*/
	});
	</script>

</head>
<body>
	<button id="konu-ekle-buton" class="buton" style="width: 100%;">Konu Ekle</button>
	<div id="konu-ekle-panel" class="konu-ekle" style="display: none;">
		<div class="row satir1" style="width: 100%;">
			<div class="col sutun1"  style="width: 30%;">
				<input type="text" name="yeni-konu-basligi">
			</div>
			<div class="col sutun2" style="width: 30%;">
				<div id="#kategoriler" class="dropdown">
				  <button class="dropbtn">Kategori Seç</button>
				  <div class="dropdown-content">
				    <p>Link 1</p>
				  </div>
				</div>
			</div>
		</div>
		<div class="row satir1">
			<div class="col sutun1">
				<textarea class="konu-icerigi" name="konuicerigi" rows="10" cols="50"></textarea>
			</div>
		</div>
		<div class="row satir1">
			<div class="col sutun1">
				<button class="buton" style="width: 20%; float: right;">Gönder</button>
			</div>
		</div>
	</div>












	<style type="text/css">

		.buton{
			display: block;
			margin: 10px;
			height: 40px;
			background-color: #0099cc;
			border-radius: 10px;
			font-size: 20px;
			color: white;
		}

		.buton:hover{
			color: black;
			background-color: #339966;
		}

		.konu-ekle .satir1 .sutun1 input{
			display: block;
			margin: 10px;
			float: left;
			padding: 8px;
			width: 100%;
			height: 40px;
			font-size: 15px;
			border-radius: 10px;
			background-color: lightgray;
		}

		textarea{
			display: block;
			margin: 10px;
			float: left;
			padding: 8px;
			width: 100%;
			height: auto;
			font-size: 15px;
			border-radius: 10px;
			background-color: lightgray;
		}
























		/*****DROPDOWN****/

		.dropbtn {
			display: block;
		    background-color: #339966;
		    color: white;
		    padding: auto;
		    font-size: 16px;
		    cursor: pointer;
		    width: 100%;
		    height: 40px;
		    border-radius: 10px;
		}

		.dropdown {
		    position: relative;
		    display: inline-block;
		    width: 100%;
		    margin: 10px;
		}

		.dropdown-content {
		    display: none;
		    position: absolute;
		    background-color: #f9f9f9;
		    width: 100%;
		    min-width: 160px;
		    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
		    z-index: 1;
		}

		.dropdown-content p {
		    color: black;
		    padding: 12px 16px;
		    text-decoration: none;
		    display: block;
		}

		.dropdown-content p:hover {background-color: #f1f1f1}

		.dropdown:hover .dropbtn {
		    background-color: #3e8e41;
		}
	</style>
</body>
</html>
