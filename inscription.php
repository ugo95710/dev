<?php

$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$mail=$_POST['user_mail'];
$password=$_POST['user_account'];

$string = $first_name;

$arr = [$last_name, $mail, $password];
 
foreach($arr as $items)
{
    $string  .=  ';'. $items;
}

/*$texte = "".first_name";".last_name";";*/

$file=fopen("comptes.txt", "a");

//fwrite($file, '<br>');
fwrite($file, "\n");
fwrite($file, $string);

echo "ok";
fclose($file);


?>