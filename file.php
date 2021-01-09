<?php
require_once 'functions.php';

$url_list = $_FILES['fname']['tmp_name'];
$urls = file($url_list, FILE_IGNORE_NEW_LINES);

foreach ($urls as $target_url) {
    \ogp\print_og_image($target_url);
}