<?php

$dta["NIM"] = "2201010345";
$dta["NAMA"] = "Kevin";
$dta["JKEL"] = "P";
$dta["PACAR"] = "Buk Gek";
$dta["NOTELP"] = "0869696969";
$dta["HOBBY"] = "Main Palo";
header("Content-type: application/json; charset utf-8");
echo json_encode($dta); 