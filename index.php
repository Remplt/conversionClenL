<?php 

// On va recuperer les infos du formulaires pour calculer le quantite en litre
    if(!empty($_POST)){
        if($_POST['quantite'] != 0 && $_POST['quantite'] > 0){
            $quantiteEnCl = $_POST['quantite'];
             $quantiteEnLitre = $_POST['quantite'] / 100;
        } else {
            $message = "VEUILLEZ SAISIR UNE QUANTITE VALIDE.";
        }
    }


    include 'inc/header.tpl.php';
?>

    <main>
        <h2>Le mélangeur exceptionnel</h2>
        <form action="index.php" method="post">
            <?php if(empty($_POST)):?>
                <div class="labelForm">
                    <label for="">Saisir ici votre quantité (en cl)</label>
                </div>
                <div class="inputForm">
                <input type="number" name="quantite" id="quantite">
                </div>
                <div class="buttonForm">
                    <button type="submit" id="button">Soumettre</button>
                </div>
            <?php 
                else :
                    if ($_POST['quantite'] <= 0){
                        echo "<p>$message</p>";
                        echo "<a href='index.php' id='form-link'> Faire une autre conversion</a>";
                    } else {
                // Resultat de la conversion ici
                echo "<p>$quantiteEnCl CL équivaut à $quantiteEnLitre L.</p>";
                echo "<a href='index.php' id='form-link'> Faire une autre conversion</a>";
                    }
            endif;
            ?>
        </form>
        <article>
            <h3>Le litre</h3>
            <p>Le litre (dérivé de litron1, ancienne mesure de capacité) est une unité de mesure de volume égale à un décimètre cube. Cette définition du Bureau international des poids et mesures (BIPM) date de 1964. Bien qu’en dehors du Système international d'unités, l'usage du litre est accepté par le BIPM. Les symboles reconnus par ce dernier sont les caractères l (lettre l minuscule) et L (lettre l majuscule)2.</p>
            <p>Le litre est défini comme étant un nom spécial pour le décimètre cube3. Cette définition est la seule acceptée par le Bureau international des poids et mesures4. En première approximation, un litre peut également être défini comme le volume occupé par une masse d'un kilogramme d'eau pure à la pression atmosphérique normale (760 mmHg)1. Cependant, cette deuxième définition est moins précise de 28 millionièmes5
            Le litre n'appartient pas au Système international d'unités, contrairement au mètre cube qui dérive directement du mètre (à la puissance trois) et ne nécessite donc pas de conversion. Ce n'est pas le cas du litre qui correspond à un millième de mètre cube. Le Bureau international des poids et mesures accepte toutefois l'usage du litre car il est couramment utilisé au niveau mondial2.</p>
        </article>
    </main>

<?php 
    include 'inc/footer.tpl.php';
?>