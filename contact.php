<?php 
    include 'inc/header.tpl.php';

   if (!empty($_POST)) {
        $nameValid = strlen($_POST['nom']) >= 2;
        $firstnameValid = strlen($_POST['prenom']) >= 2;
        $messageValid = strlen ($_POST['message']) >= 3;

        $formulaireValid = $nameValid && $firstnameValid && $messageValid;
   };
?>

<main>
    <?php if(empty($_POST)) { ?> 
        <form id='form-contact' action="contact.php" method="post">
           <label for="nom">Nom :</label>
           <input type="text" name="nom">
   
           <label for="prenom">Prenom :</label>
           <input type="text" name="prenom">
   
           <label for="message">Votre proposition :</label>
           <textarea name="message" id="" cols="30" rows="10" placeholder="Votre message..."></textarea>
   
           <button type="submit" id="button">Envoyer votre proposition</button>
        </form> 
    <?php
    } else {
         if($formulaireValid && !empty($_POST)):?>
            <p>Votre proposition a bien été transmise.</p>
        <?php else : ?>
            <p> Veuillez renseigner tous les champs </p>
            <form id='form-contact' action="contact.php" method="post">
                <label for="nom">Nom :</label>
                <input type="text" name="nom">
        
                <label for="prenom">Prenom :</label>
                <input type="text" name="prenom">
        
                <label for="message">Votre proposition :</label>
                <textarea name="message" id="" cols="30" rows="10" placeholder="Votre message..."></textarea>
        
                <button type="submit" id="button">Envoyer votre proposition</button>
            </form> 
        <?php endif;
    }
       ?>
    
     
</main>


<?php 
    include 'inc/footer.tpl.php';
?>