<?php
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
header('Content-Type: application/json');
header("Access-Control-Allow-Origin: *");


include_once('phpwhois/whois.main.php');
include_once('phpwhois/whois.utils.php');

$whois = new Whois();
$query = $_GET['domain'];
$result = $whois->lookup($query);
echo "[\n";
echo json_encode($result['rawdata'], JSON_PRETTY_PRINT);
echo "\n]";
?>