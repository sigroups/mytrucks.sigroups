<?php
/**
 * mysql_connect is deprecated
 * using mysqli_connect instead
 */

$databaseHost     = '208.91.198.197:3306';
$databaseName     = 'car_user';
$databaseUsername = 'car_user';
$databasePassword = 'Jolly@1234$';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
