<?php

// koneksi ke database

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'new_skymedical';

mysql_connect($dbhost, $dbuser, $dbpass);
mysql_select_db($dbname);
?>