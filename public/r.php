<?php

    // configuration
    require("../includes/config.php");


function getUrl() {
  $url  = @( $_SERVER["HTTPS"] != 'on' ) ? 'http://'.$_SERVER["SERVER_NAME"] :  'https://'.$_SERVER["SERVER_NAME"];
  $url .= ( $_SERVER["SERVER_PORT"] != 80 ) ? ":".$_SERVER["SERVER_PORT"] : "";
  $url .= $_SERVER["REQUEST_URI"];
  return $url;
}    

$link = getUrl();
//echo $link;

//print_r($link);

//достаем из полученного адреса ключ короткой ссылки
$pars_link = parse_url($link, PHP_URL_PATH);
//print("<br>".$pars_link);

//print_r($pars_link);

$redir = CS50::query("SELECT long_link FROM reduction WHERE short_link = '".$pars_link."'");

//print_r($redir);

//делаем редирект на извлеченную ссылку
header('HTTP/1.1 301 Moved Permanently');
header('Location: '.$redir[0]["long_link"]);

?>