<?php
// define variables and set to empty values
$nom = $prenom = $mail = $telephone = $sujet = $message = "";
$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = test_input($_POST["nom"]);
    $prenom = test_input($_POST["prenom"]);
    $mail = test_input($_POST["mail"]);
    $mail = filter_var($mail, FILTER_SANITIZE_EMAIL);
    $telephone = test_input($_POST["telephone"]);
    $message = test_input($_POST["message"]);
    $sujet = test_input($_POST["sujet"]);

    $nom = '';

    // nettoyage et validation des données soumises via le formulaire 
    if (!isset($nom) || trim($nom) === '')
        $errors[] = "Le prénom est obligatoire";
    if (!isset($prenom) || trim($prenom) === '')
        $errors[] = "Le nom est obligatoire";
    if (!isset($mail) || trim($mail) === '')
        $errors[] = "Le mail est obligatoire";
    if (!isset($telephone) || trim($telephone) === '')
        $errors[] = "Le numéro de téléphone est obligatoire";
    if (!isset($message) || trim($message) === '')
        $errors[] = "Le message est obligatoire";
    if (!isset($sujet) || trim($sujet) === '')
        $errors[] = "Le sujet est obligatoire";
    if (!filter_var($mail, FILTER_VALIDATE_EMAIL))
        $errors[] = "L'adresse mail " . $email . " n'est pas valide";

    // if (empty($errors)) {
    //     // traitement du formulaire
    //     // puis redirection
    //     header('Location: success.php');
    // }
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
// echo var_dump($datasForm);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/thanks.css">
    <title>Success</title>
</head>

<body>

    <?php // Affichage des éventuelles erreurs 
    if (count($errors) > 0) : ?>
        <div class="mess-warning">
            <ul>
                <?php foreach ($errors as $error) : ?>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                            <path d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z" />
                        </svg>
                        <?= $error ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php else : ?>
        <div class="card">
            <h1>Contact</h1>
            <p>
                Merci <span class="dark"><?php echo $prenom . ' ' . $nom; ?></span>
                de nous avoir contacté à propos de : <span class="dark"><?php echo $sujet; ?></span>.
            </p>
            <p>
                Un de nos conseillers vous contactera soit à l’adresse <span class="dark"><?php echo $mail; ?></span> ou
                par téléphone au <span class="dark"><?php echo $telephone; ?></span> dans les plus brefs délais
                pour traiter votre demande :
            </p>
            <p>
                <span class="dark"><?php echo $message; ?></span>
            </p>
        </div>
    <?php endif; ?>
</body>

</html>