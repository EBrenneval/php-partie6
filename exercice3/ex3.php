<?php
include '../index.php';
?>
<div class="ex">
    <h2>Exercice 3</h2>
    <p>Enoncé de l'exercice :Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher: index.php?dateDebut=2/05/2016&dateFin=27/11/2016 </p>

    <p class="result">
        <!-- l'adress de l'url a tester dans une balise a-->
        <a href="ex3.php?dateDebut=01/01.2016&dateFin=24/02/2017">Clique-moi !</a>
        <?php
        if (!empty($_GET['dateDebut'])&&(!empty($_GET['dateFin']))) {    // empty verifie que la var existe est n'est pas vide. 
        ?>
        <!-- le $_GET permet de récuperer  les paramètres dans l'url-->
    <p>Bonjour <?php echo $_GET['dateDebut']. ' '. $_GET['dateFin']; ?> !</p>  <!--affiche la phrase-->
    <?php
    }else {    // sinon on affiche un message 
        ?>

        <p>Vous n'avez pas indiqué la date</p>
        <?php
    }
    ?>

</body>
</html>
