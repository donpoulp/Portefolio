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
        $entete  = 'MIME-Version: 1.0' . "\r\n";
        $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
        $entete .= 'Reply-to: ' . $_POST['mail'];

        $message = '<h1>Message envoyé depuis la page Contact de monsite.fr</h1>
        <p><b>Email : </b>' . $_POST['mail'] . '<br>
        <b>Message : </b>' . htmlspecialchars($_POST['message']) . '</p>';

        $retour = mail('raphael.petrozzi@le-campus-numerique.fr', $_POST['sujet'], $message, $entete);
        if($retour)
            echo '<p>Votre message a bien été envoyé.</p>';
            header('Location: index.html#ContactezMoi');
            exit;

    }
    ?>
</body>
</html>