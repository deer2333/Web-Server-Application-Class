<!DOCTYPE html>
<html>
<head>
	<title> Movie </title>
</head>
<body>
<?php
$curl = curl_init();
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

if (isset($_GET['species'])) {
	$species = $_GET['species'];

}
else{
	$species ="orca";
}
$query = array(

	"apikey"=>"k_lnrd0r36",
	"limit"=>'200'
	 );



$url = "https://imdb-api.com/zh_CN/API/Title/k_12345678/tt1375666"."?".http_build_query($query);

curl_setopt($curl, CURLOPT_URL, $url);

$result = json_


decode(curl_exec($curl));


foreach ($result as $sightings ) {
	print($sightings->location);
		print"</br> ";

};


?>
</body>
</html>>