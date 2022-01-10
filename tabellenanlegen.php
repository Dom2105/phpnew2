<?php 
require("./dbconn.php");

$conn->query("CREATE TABLE IF NOT EXISTS kunde (kundenId int primary key AUTO_INCREMENT, kundenname varchar(255),
             email varchar(255), passwort varchar(255))");

$conn->query("CREATE TABLE IF NOT EXISTS artikel (artikelId int primary key AUTO_INCREMENT, artikelname varchar(255),
preis double)");