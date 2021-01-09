<?php
namespace ogp;
require_once 'vendor/autoload.php';

function print_og_image($url){
    $content = file_get_contents($url);
    $tmp = Parser::parse($content);
    $og = $tmp['og'];
    echo $url.'のOGP情報は次の通りです。';
    echo '<br>';
    echo 'og:descriptionは「'.$og['og:description'].'」です。'.PHP_EOL;
    echo '<br>';
    echo '<img src='.$og['og:image'].' width="50%">'.PHP_EOL;
    echo '<br>';
}


