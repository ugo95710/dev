<?php

$fichier = "comptes.txt";
$comptes=fopen($fichier, "r");

while (!feof($comptes))
{
    $ligne=fgets($comptes);
    $compte=explode(";", $ligne);
    echo $compte[1];
}