<?php

include 'datas.php';

// On va recuperer les infos du formulaires pour calculer le quantite en litre
if(!empty($_POST)){
    if($_POST['quantite'] != 0 && $_POST['quantite'] > 0){
        $quantiteEnLitre = $_POST['quantite'];
        foreach($conversion as $key => $value){
            if()
        }
         $quantiteRetournee = $_POST['quantite'] / 100;
    } else {
        $message = "VEUILLEZ SAISIR UNE QUANTITE VALIDE.";
    }
}
