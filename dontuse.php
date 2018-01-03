<?php

function fetch($url) {
  $ch = curl_init($url);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  $data = curl_exec($ch);
  curl_close($ch);
  return $data;
}


if (!isset($_GET['apikey'])) {
  echo "You need an API key";
}

if ($_GET['apikey'] !== 'this_is_an_api_key') {
  echo "INVALID!";
  exit;
}

$url = isset($_GET['url']) ? $_GET['url'] : "";

$page = fetch($url);
echo $page;
header("X-Frame-Options: SAMEORIGIN");
