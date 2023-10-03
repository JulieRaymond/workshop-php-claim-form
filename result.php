<?php
$errors = [];

// TODO 3 - Get the data from the form and check for errors

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!isset($_POST['companyName']) || empty(trim($_POST['companyName']))) {
        $errors[] = "Le nom de la compagnie est obligatoire";
    }
    if (!isset($_POST['userName']) || empty(trim($_POST['userName']))) {
        $errors[] = "Le nom est obligatoire";
    }
    if (!isset($_POST['userEmail']) || empty(trim($_POST['userEmail']))) {
        $errors[] = "L'email est obligatoire";
    } elseif (!filter_var($_POST['userEmail'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = "L'email n'est pas valide";
    }
    if (!isset($_POST['contactMessage']) || empty(trim($_POST['contactMessage']))) {
        $errors[] = "Le message de réclamation est obligatoire";
    } elseif (strlen($_POST['contactMessage']) < 30) {
        $errors[] = "Le message de réclamation doit faire plus de 30 charactères";
    }
}

if (!empty($errors)) {
    require 'error.php';
    die();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Récapitulatif - Réclamation</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <header>
        <h1>Nous traitons votre retour.</h1>
        <img src="images/logo_dunder.png" alt="Logo Dunder Mifflin">
    </header>

    <main>
        <div class="summary">
            <!-- BONUS -->
            <p>
                <img src="images/placeholder.png" alt="">
                <span>Votre vendeur</span>
            </p>


            <!-- TODO 2 - Replace those placeholders by the values sent from the form -->
            <ul>
                <li>Votre entreprise : <span><?php echo htmlentities($_POST['companyName'], ENT_QUOTES, 'UTF-8'); ?></span></li>
                <li>Votre nom : <span><?php echo htmlentities($_POST['userName'], ENT_QUOTES, 'UTF-8'); ?></span></li>
                <li>Votre email : <span><?php echo htmlentities($_POST['userEmail'], ENT_QUOTES, 'UTF-8'); ?></span></li>
                <li>Votre message :
                    <p><?php echo htmlentities($_POST['contactMessage'], ENT_QUOTES, 'UTF-8'); ?></p>
                </li>
            </ul>
        </div>
    </main>
</body>

</html>