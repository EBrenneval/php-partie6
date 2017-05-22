<?php
include '../index.php';
?>
<div class="ex">
    <h2>Exercice 4</h2>
    <p>Enoncé de l'exercice :Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent 
        et les afficher: index.php?langage=PHP&serveur=LAMP
 </p>

    <p class="result">
        <!-- l'adress de l'url a tester dans une balise a-->
        <a href="ex4.php?langage=PHP&serveur=LAMP">Clique-moi !</a>
        <?php
        if (!empty($_GET['langage'])&&(!empty($_GET['serveur']))){    // empty verifie que la var existe est n'est pas vide. 
        ?>
        <!-- le $_GET permet de récuperer  les paramètres dans l'url-->
    <p>Bonjour <?php echo $_GET['langage']. ' '. $_GET['serveur']; ?> !</p>  <!--affiche la phrase-->
    <?php
    }
     
    ?>
    </body>
</html>
