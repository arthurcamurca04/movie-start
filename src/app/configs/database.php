<?php

$host="127.0.0.1";
$dbname = "demo";
$port=9999;
$user="postgres";
$password=12345;

$conn = new PDO("pgsql:host=$host;dbname=$dbname;port=$port", $user, $password);

$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);