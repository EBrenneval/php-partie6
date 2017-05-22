<?php
include '../index.php';
?>
<div class="ex">
    <h2>Exercice 1</h2>
    <p>Enoncé de l'exercice :Faire une page index.php. 
        Tester sur cette page que tous les paramètres de cette URL existent et les afficher: 
        index.php?nom=Nemare&prenom=Jean. </p>

    <p class="result">
        <!-- l'adress de l'url a tester dans une balise a-->
        <a href="ex1.php?nom=Nemare&prenom=Jean">Clique-moi !</a>
        <?php
        if (!empty($_GET['prenom']) && !empty($_GET['nom'])) {    // empty verifie que la var existe est n'est pas vide. 
            ?>
            <!-- le $_GET permet de récuperer  les paramètres dans l'url-->
        <p>Bonjour <?php echo $_GET['prenom'] . ' ' . $_GET['nom']; ?> !</p>  <!--affiche la phrase-->
        <?php
    }
    ?>
</p>
</body>
</html>
