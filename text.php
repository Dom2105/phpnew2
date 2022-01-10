<?php 

$text = file_get_contents('test.txt');
echo $text;

echo '<br> <hr>';

$file = file('test.txt');
for ($i=0; $i < count($file); $i++) { 
    echo $i . ": ". $file[$i]."<br>";
}