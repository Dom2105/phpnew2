<?php 
require("./dbconn.php");

$kn = $_POST["kundenname"];
$email = $_POST["kundenemail"];
$pw = password_hash($_POST["kundenpasswort"], PASSWORD_BCRYPT);

$conn->query("INSERT INTO kunde (kundenname, email, passwort) VALUES( '$kn', '$email', '$pw')");

header("Location: http://localhost/php");