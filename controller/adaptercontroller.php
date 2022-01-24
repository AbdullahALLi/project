<?php 
include_once "model/WeatherDataDto.php";
include_once "model/OpenweathermapAdaptor.php";


$x=new OpenweathermapAdapter();
$y=$x->currentWeather();
$z=new WeatherDataDto($y);
$f=$z->temperature();
echo "the current weather is" .$f;


?>