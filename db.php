<?php
$host="localhost"; $dbname="logistics_fleet"; $username="root"; $password="";
$conn=new mysqli($host,$username,$password,$dbname);
if($conn->connect_error){die("Database connection failed: ".htmlspecialchars($conn->connect_error));}
$conn->set_charset("utf8mb4");
if(session_status()===PHP_SESSION_NONE) session_start();
