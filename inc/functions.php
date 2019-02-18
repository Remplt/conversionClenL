<?php

include 'datas.php';
$message = "Veuillez saisir une quantité valide";
$quantityConvert;
// On va recuperer les infos du formulaires pour calculer le quantite en litre
if(empty($_POST)){
        $message = "VEUILLEZ SAISIR UNE QUANTITE VALIDE.";
}

if(!empty($_POST)){
    $quantityInput = $_POST['quantityInput'];
    $quantityOutput = $_POST['quantityOutput'];
    var_dump($quantityOutput);
    $inputUser = $_POST['quantite'];

    foreach($conversion as $key => $tableValue){
        if($quantityInput == $key){
            foreach($tableValue as $output => $value){
                if($quantityOutput = $output){
                    $quantityConvert = $inputUser * $value;
                }
            }
        }
    }
    var_dump($quantityOutput);
}


