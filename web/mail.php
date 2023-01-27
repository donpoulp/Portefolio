<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Envoi d'un message par formulaire</title>
</head>

<body>
<?php
    if (isset($_POST['message']) || isset($_POST['sujet']) || isset($_POST['mail']) || isset($_POST['nom'])) {
        echo $_POST['nom'] , $_POST['sujet'] , $_POST['mail'] , $_POST['message'];
        
        $retour = mail('raphael.petrozzi@le-campus-numerique.fr', $_POST['sujet'], $_POST['message'], '');
        if($retour){
            echo '<p>Votre message a bien été envoyé.</p>';
        }

    }
    ?>
</body>
</html>