<?php
//error_reporting(0);

define("URL_BASE", "/");
define("PATH_PAGES", __DIR__ . DIRECTORY_SEPARATOR . "endpoint" . DIRECTORY_SEPARATOR);
 

$path = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
if (substr($path, 0, strlen(URL_BASE)) == URL_BASE) {
  $path = substr($path, strlen(URL_BASE));
}
$path = explode("/", rtrim($path, "/\\"));


if (count($path)==1) { 
  $file = $path[0]=="" ? "index.php" : $path[0] . ".php"; 
} else {
  $file = implode("-", $path) . ".php"; 
}

if (file_exists(PATH_PAGES . $file)) { require PATH_PAGES . $file; }
else {
  http_response_code(404);
  require PATH_PAGES . "404.php";
}
