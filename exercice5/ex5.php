<?php
include '../index.php';
?>
<div class="ex">
    <h2>Exercice 5</h2>
    <p>Enoncé de l'exercice : Faire une page index.php. 
        Tester sur cette page que tous les paramètres de cette URL existent et les afficher: index.php?semaine=12
 </p>

    <p class="result">
        <!-- l'adress de l'url a tester dans une balise a-->
        <a href="ex5.php?semaine=12">Clique-moi !</a>
        <?php
        if (!empty($_GET['semaine'])){    // empty verifie que la var existe est n'est pas vide. 
        ?>
        <!-- le $_GET permet de récuperer  les paramètres dans l'url-->
    <p>Bonjour <?php echo $_GET['semaine']; ?> !</p>  <!--affiche la phrase-->
    <?php
    }
    ?>
    </body>
</html>
