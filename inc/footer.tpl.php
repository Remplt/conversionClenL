<footer>
        <p>Site de test qui me permet de tester mes connaissances en PHP ainsi qu'en CSS</p>
        <?php 
        $page = $_SERVER['PHP_SELF'];

        if($page == "/EntrainementCSS-PHP/contact.php"){
            echo "<a id='footer-link' href='index.php'>Retour à la page d'accueil</a>";
        } elseif ($page == "/EntrainementCSS-PHP/index.php") {
            echo "<a id='footer-link' href='contact.php'>Soumettre d'autres conversions</a>";
        } else { 
            echo "<a id='footer-link' href='contact.php'>Soumettre d'autres conversions</a>";
            echo "<a id='footer-link' href='index.php'>Retour à la page d'accueil</a>";
        }

        ?>
    </footer>
</body>
</html>


