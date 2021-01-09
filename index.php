<?php
require_once 'functions.php';

$target_url = $_POST['URL'];

\ogp\print_og_image($target_url);
