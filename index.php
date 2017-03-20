<?php

require_once 'vendor/autoload.php';

// ---------------------------------------------------------------------
// --[ Main code ]------------------------------------------------------
// ---------------------------------------------------------------------

//$html = file_get_contents("http://pogoda.yandex.ru");

//phpQuery::newDocument($html);

//$title = pq("title")->html();
//xd($title);

//phpQuery::unloadDocuments();

$ch = curl_init('http://httpbin.org');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HEADER, true); // загружать заголовки
curl_setopt($ch, CURLOPT_NOBODY, true); // загружать заголовки

curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true); // следовать за редиректом
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$html = curl_exec($ch);
curl_close($ch);
xprint($html);