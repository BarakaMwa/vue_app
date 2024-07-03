<?php

//require_once "../header.php";
require_once "../connect.php";
session_start();

$connection = new Database\Connection();

$conn = $connection->dbConnnection();
