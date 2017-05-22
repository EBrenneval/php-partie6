<?php
include '../index.php';
?>
<div class="ex">
<h2>Exercice 2</h2>
<p>Enoncé de l'exercice :Faire une page index.php. Tester sur cette page que le paramètre age existe 
    et si c'est le cas l'afficher sinon le signaler : index.php?nom=Nemare&prenom=Jean. </p>

<p class="result">
  <!-- l'adress de l'url a tester dans une balise a-->
        <a href="ex2.php?nom=Nemare&prenom=Jean">Clique-moi !</a>
        <?php
        if (!empty($_GET['prenom']) && !empty($_GET['nom'])&& !empty($_GET['age'])) {    // empty verifie que la var existe est n'est pas vide. 
            ?>
            <!-- le $_GET permet de récuperer  les paramètres dans l'url-->
        <p>Bonjour <?php echo $_GET['prenom'] . ' ' . $_GET['nom'] . ' '. $_GET['age']; ?> !</p>  <!--affiche la phrase-->
        <?php
    }else{    // sinon on affiche un message 
        ?>
        
        <p>Vous n'avez pas indiqué votre age</p>
        <?php
    }
    ?>
    </body>
</html>
