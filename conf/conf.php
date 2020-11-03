<?php
$linknow = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$parsedUrl = parse_url($linknow);
$root = $parsedUrl['scheme'] . '://' . $parsedUrl['host'] . '/';
$conf["docroot"] = $root."AMO04"
?>