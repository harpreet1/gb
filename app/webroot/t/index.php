<?php

$ip = $_SERVER['REMOTE_ADDR'];

//	include('geoip.inc');

include('geoipcity.inc');
include('geoipregionvars.php');
$geodb = geoip_open('./GeoLiteCity.dat', GEOIP_STANDARD);
$geo = geoip_record_by_addr($geodb, $ip);

print_r($geo);

die;

