<!DOCTYPE html>
<html>
<head>
	<title> Movie </title>
</head>
<body>
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
   height: 800px;
}
<style>
</html>