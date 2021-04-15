<!DOCTYPE html>
<html>
<head>
	<title> Movie </title>
</head>
<body>
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
	
	print $sightings->image;
	print "</br>";
	print $sightings->title;
	print "</br>";
	print $sightings->year;
	print "</br>";
	print $sightings->imDbRating;
	print "</br>";
};



?>
</body>
</html>