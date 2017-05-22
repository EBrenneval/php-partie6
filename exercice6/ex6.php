<?php
include '../index.php';
?>
<div class="ex">
    <h2>Exercice 6</h2>
    <p>Enoncé de l'exercice : Faire une page index.php. 
        Tester sur cette page que tous les paramètres de cette URL existent et 
        les afficher: index.php?batiment=12&salle=101
 </p>

    <p class="result">
        <!-- l'adress de l'url a tester dans une balise a-->
        <a href="ex6.php?batiment=12&salle=101">Clique-moi !</a>
        <?php
        if (!empty($_GET['batiment'])&&(!empty($_GET['salle']))){    // empty verifie que la var existe est n'est pas vide. 
        ?>
        <!-- le $_GET permet de récuperer  les paramètres dans l'url-->
    <p>Bonjour <?php echo $_GET['batiment'].' '.$GET['salle']; ?> !</p>  <!--affiche la phrase-->
    <?php
    }
    ?>
    </body>
</html>
