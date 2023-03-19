<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/form.css">
    <title>Form Exercice</title>
</head>

<body>
    <form method="post" action="thanks.php">
        <legend>
            <h2>Contact Form</h2>
        </legend>
        <div>
            <label for="sujet">Sujet&nbsp;:</label>
            <select name="sujet" id="sujet" required>
                <option value="" selected>--Merci de choisir un sujet--</option>
                <option value="Colis non reçu">Colis non reçu</option>
                <option value="Colis endommagé">Colis endommagé</option>
                <option value="Commande incomplète">Commande incomplète</option>
                <option value="Demande d'informations">Demande d'informations</option>
            </select>
        </div>
        <div>
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" value="" placeholder="votre nom..." required>
        </div>
        <div>
            <label for="prenom">Prenom :</label>
            <input type="text" id="prenom" name="prenom" value="" placeholder="votre prénom..." required>
        </div>
        <div>
            <label for="mail">E-mail&nbsp;:</label>
            <input type="email" id="mail" name="mail" placeholder="votre e-mail..." required pattern="^([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x22([^\x0d\x22\x5c\x80-\xff]|\x5c[\x00-\x7f])*\x22)(\x2e([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x22([^\x0d\x22\x5c\x80-\xff]|\x5c[\x00-\x7f])*\x22))*\x40([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x5b([^\x0d\x5b-\x5d\x80-\xff]|\x5c[\x00-\x7f])*\x5d)(\x2e([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x5b([^\x0d\x5b-\x5d\x80-\xff]|\x5c[\x00-\x7f])*\x5d))*(\.\w{2,})+$">
        </div>
        <div>
            <label for="telephone">Téléphone&nbsp;:</label>
            <input type="tel" id="telephone" name="telephone" pattern="[0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}" placeholder="votre téléphone portable..." required>
            <small>Format: 06xxxxxxxx</small>
        </div>

        <div>
            <label for="message">Message&nbsp;:</label>
            <textarea type="email" id="message" name="message" placeholder="votre message..." required></textarea>
        </div>

        <div>
            <button type="submit" class="btn submit">Envoyer</button>
        </div>

    </form>
</body>

</html>