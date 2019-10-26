<?php
/*
 *---------------------------------------------------------------
 * Guia de conexión API ARUBA
 * UNAMxHacksVI
 * Autor: Laleichin
 * API: https://aruba.easygetpaid.com/api/
 *---------------------------------------------------------------
 *Demo hecho con caracter educativo 
 *Ing. Eduardo Alfaro Martínez
*/
//inicio curl, para manejo de conexiones
$ch = curl_init();
//consulto el verbo
curl_setopt($ch, CURLOPT_URL, "https://aruba.easygetpaid.com/hackathon/tenants/");
//obtengo transferencia
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//asigno resultado
$res = curl_exec($ch);
//pinto json normal
echo "<h1>Respuesta JSON</h1>";
echo $res;
echo "<h1>JSON como objeto</h1>";
//pinto json bonito
echo str_replace(array("{", "}", '","'), array("{<br />&nbsp;&nbsp;&nbsp;&nbsp;", "<br />}", '",<br />&nbsp;&nbsp;&nbsp;&nbsp;"'), $res);
curl_close($ch);


?>