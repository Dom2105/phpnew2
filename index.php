<?php 
$name = "Jack";
$zahl = 12;
$kommaZahl = 12.5;
$bool = true; //false 

$arr = [
    "Hallo",
    12,
    false
];
$arr2 = array(

    "Hallo",
    12,
    false
);
?>
<!DOCTYPE html>
<html>
   
<head>
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   
  <form action="./login.php" method="POST">
      <label for="">Email: </label>
      <input type="text" name="email">
      <label for="">Passwort: </label>
      <input type="password" name="pw">
      <button>Login</button>
  </form>   
    <?php 

       /*  if ($name == "Peter" && $zahl == 12) {
           echo $name;
        }else if($zahl > 35){
            echo $name;
        }else {
           print("hallo");
        }

        switch ($zahl) {
            case 12:
                echo $zahl;
                break;
            case 16:
                echo $zahl;
                    break;
            default:
               echo "nichts von dem";
                break;
        } */

       /*  $bn = "Dom";
        $pw = "hallo1234";
        $eingabeBn = "Dom";
        $eingabePw = "hallo1234";

        if ($bn == $eingabeBn) {
            if ($pw == $eingabePw) {
                echo "Sie sind eingeloggt!";
            }else {
                echo "Passwort Falsch!";
            }
        }else {
            echo "Eingegebener Benutzername war Falsch!";
        }
         */
    ?>
    </p>
</body>
</html>