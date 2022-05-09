<?php

$mdp=$_POST['mdp'];
$email=$_POST['id'];
$fichier = "comptes.txt";
$comptes=fopen($fichier, "r");
$trouver =false;

while (!feof($comptes) && $trouver == false)
{
    $ligne=fgets($comptes);
    $compte=explode(";", $ligne);

    if ($email == $compte[0])
    {
        if ($mdp == $compte[1])
        {
            echo "compte existant";
            header("Location:disques.php");
            $trouver = true;
        }
        
    }
}
echo "ce compte n'existe pas";
fclose($fichier);

?>