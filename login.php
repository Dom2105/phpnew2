<?php
require('./dbconn.php');
$eingabeBn = $_POST["email"];
$eingabePw  = $_POST["pw"];

$res = $conn->query("SELECT email, passwort FROM kunde");
var_dump($res);
while ($row = $res->fetch_assoc()) {
     if ( $row["email"] == $eingabeBn) {
        if (password_verify($eingabePw, $row["passwort"])) {
            echo "Sie sind eingeloggt!";
        } else {
            echo "Passwort Falsch!";
        }
    } else {
        
        echo "Eingegebener Benutzername war Falsch!". $value;
    }
}
