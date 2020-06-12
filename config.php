<?php

define('DB_SERVER', 'ec2-52-7-39-178.compute-1.amazonaws.com');
define('DB_USERNAME', 'fqeyhzbqidlfyn');
define('DB_PASSWORD', '5f4f096c464388de4fcc59c735e6605235b65804db900cc0f2c5b4b62e0039ec');
define('DB_NAME', 'd8q21k88j6jf88');
 
/* Attempt to connect to PostgreSQL database */
$link = pg_connect("host=".DB_SERVER." dbname=". DB_NAME ." user=" . DB_USERNAME . " password=" .DB_PASSWORD. "")
		or die('Could not connect1: ' . pg_last_error());
?>
