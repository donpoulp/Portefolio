
<?php
    if (isset($_POST['message']) || isset($_POST['sujet']) || isset($_POST['mail']) || isset($_POST['nom'])) {

        $retour = mail('raphael.petrozzi@le-campus-numerique.fr', $_POST['sujet'], $_POST['message'], '');
        if($retour)
            echo '<p>Votre message a bien été envoyé.</p>';

    }
    ?>
