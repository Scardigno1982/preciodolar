<?php

$url = "https://api-dolar-argentina.herokuapp.com/api/dolarblue";

//  Inicia la sesión curl
$handle = curl_init();
// Devolverá la respuesta, si es falsa imprime la respuesta
curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
// Establecer la URL
curl_setopt($handle, CURLOPT_URL,$url);
// Ejecute la sesión y almacene el contenido en $ result
$result=curl_exec($handle);

//var_dump($result);

// Cerrando la sesión
curl_close($handle);

$result = file_get_contents($url);
$array = json_decode($result, true);
//var_dump($array["venta"]);
//echo $array["venta"];