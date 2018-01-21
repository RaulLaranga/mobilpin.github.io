<html>
  <head>
    <?php
    include 'conn.php';
     ?>
    <meta charset="utf-8">
    <title>pinmobil</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <meta name="description" content="Mobil Phone Store">
    <meta name="keywords" content="Mobil Phone Store">
    <meta name="author" content="Raul" >
    <link rel="shortcut icon" type="image/x-icon" href="img/pin482.png" />
    <link rel="stylesheet" href="css/main.css">
    <style>
    #map{
      border: 4px solid #ff5816;
    	height: 450px;
    	width: 470px;

    }

    </style>
    <script src="js/main.js"></script>
    <script>function initMap(){
      //MMap options
      var options={
        zoom:15,
        center:{lat:44.85489, lng:20.39405}
      }
      {
        //new map
        var map = new google.maps.Map(document.getElementById('map'),options);
        //Marker
        var marker= new google.maps.Marker({
          position:{lat:44.853628, lng:20.3940586},
          map:map

        });

      }
    }</script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA3OOTuKpHRB3wXwzkz3HOxWMgBBofDTuY&callback=initMap">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
  <script src="https://ajax.googleapis.com..."></script>
  </head>
  <body>
    <header>
      <div class="logo">

     <div id="imglogo"><a href="index.php" >
     <img src="img/pin482.png" alt="Logo"></a>
      </div><!-- kraj imglogo -->
      <div id="textlogo"> <p>Pin Mobil</p>
        </div><!-- kraj textlogo-->

   </div><!--kraj logo -->
      </div>

    </header><!-- kraj header -->

    <nav>
      <ul>
        <li id="home"><a href="index.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>

    </nav><!-- kraj nav-->
<div class="brand-img" style="padding-left:18%;margin:auto;float:center;">
  <?php
include_once("conn.php");
$q=$db->query('SELECT brand_img FROM brand');
while ($row=$q->fetch_object()) {
  echo "<div style='display:inline;align-content: center;'>
  <img src='{$row->brand_img}' style= ' border: 2px solid white; padding:1px; height:60px;width: 60px;padding:2px;display:inline;'/>

  </div>";
}
   ?>

</div>

<div class="h" style="padding-right: 4%;">


<div class="google-map" style="float:right;">
  <h3 >Naša lokacija</h3>
  <div id="map"  >

  </div>

</div><!-- kraj google map -->
</div><!-- kraj h -->



</div><!-- kraj mainbar -->
<div class="footer">
  <p>FOOTER</p>
</div>


  </body>
</html>
