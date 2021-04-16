<!DOCTYPE html>
<html>
<head>
	<title> Movie </title>
	<?php require 'css.php'?>
</head>
<body>
<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="Image/camera-reels.svg" class="d-inline-block align-text-top" style="width: 50px;height: 45px;">
     <div class="title1"> Movie</div>
    </a>
  </div>
</nav>


<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="Image/p2638199066.webp.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="Image/p2580430938.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="Image/p2638199066.webp.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>



	<div class= "head">
<?php

$curl = curl_init();
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);



$query = array(
   
	"apikey"=>"k_lnrd0r36",
	
	 );



$url = "https://imdb-api.com/zh_CN/API/MostPopularMovies/k_lnrd0r36"."?".http_build_query($query);

curl_setopt($curl, CURLOPT_URL, $url);

$result = json_decode(curl_exec($curl));

foreach ($result->items as $sightings ) {
	
	print "<img src='" .$sightings->image."' height=200px;margin-left:300px;'><br>";

	print"<h1 style=' text-align: center;color:#FF6347;font-size:50px;font-family:Microsoft YaHei;'>".$sightings->title."</h1>";

	print"<h3 style=' text-align: center;font-size:20px;color:#E9967A;'>Year:".$sightings->year."</h3>";
	print "</br>";
	print"<h3 style=' text-align: center;font-size:20px;color:#E9967A;'>DB Rating:".$sightings->imDbRating."</h3>";

	print "</br>";
};



?>
</div>
</body>

<style>
.head{
   text-align:center;
   background-color: #E6E6FA;
 
}
<style>
</html>