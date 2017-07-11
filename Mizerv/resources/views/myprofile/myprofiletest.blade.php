<?php

//
//$response = array();
//$restaurants = array();
//$result=mysqli_query($sql);
//while($row=mysqli_fetch_array($result))
//{
//    $name=$row['name'];
//    $lat=$row['lat'];
//    $lng=$row['lng'];
//
//    $restaurants[] = array('name'=> $name, 'lat'=> $lat, 'lng'=>$lng);
//
//}
//
//$response['restaurants'] = $restaurants;

$fp = fopen('results.json', 'w');
fwrite($fp, json_encode($restaurants));
fclose($fp);
echo $restaurants[0];
echo $fp;
?>