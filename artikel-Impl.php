<?php 
require("./dbconn.php");

$name = $_POST["artikelname"];
$preis = $_POST["artikelpreis"];

$conn->query("INSERT INTO artikel (artikelname, preis) VALUES ('$name', $preis)");

header("Location: http://localhost/php/artikel.php");