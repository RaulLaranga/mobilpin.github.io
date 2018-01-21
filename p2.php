
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
<script src="js/main.js"></script>
<link rel="stylesheet" href="css/main.css">
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
	<!--[if gte IE 9]>
	  <style type="text/css">
	    .gradient {
	       filter: none;
	    }
	  </style>
	<![endif]-->
	<?php
  $db = new mysqli("localhost","root","root","mobilni");
	$rez = $db->query("SELECT naziv FROM model");

while ($row = $rez->fetch_object()) {
	echo "<div style ='border:1px solid black;padding:5px;margin:14px;'>
	<h3>HELLO</h3>
	</div>";
	echo "<div class='product-container'>
  <div class='product effect2'>
    <img src='' width='200' height='200' />
    <span class='price'>$1,200</span>
  </div>";

	
}




?>
