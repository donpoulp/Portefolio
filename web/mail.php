<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Message envoyé</title>
</head>

<body>
<?php
    if (isset($_POST['message']) || isset($_POST['sujet']) || isset($_POST['mail']) || isset($_POST['nom'])) {
        
        $retour = mail('raphael.petrozzi@le-campus-numerique.fr', $_POST['sujet'], $_POST['message'], '');
        header("Location: https://raphael-petrozzi-portefolio.herokuapp.com/#ContactezMoi");
        exit;

        if($retour){
            echo '<p>Votre message a bien été envoyé.</p>';
        }


    }
?>
</body>
</html>