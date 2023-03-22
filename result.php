<?php
var_dump($_POST);
$errors = [];
if(isset($_POST['companyName']) && $_POST['companyName']== "") {
    $errors['companyName'] = "Company Name is required";
}

if(isset($_POST['name']) && $_POST['name']== "") {
    $errors['name'] = "Name is required";
}

if(isset($_POST['commercial']) && $_POST['commercial']== "") {
    $errors['commercial'] = "Contact commercial is required";
}

if(isset($_POST['mail']) && $_POST['mail']== "" && filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)==false) {
    $errors['mail'] = "Mail is required";
}

if(isset($_POST['contactMessage']) && $_POST['contactMessage']== "" || strlen($_POST['contactMessage'])<30 ) {
    $errors['contactMessage'] = "Message is required";
}

var_dump($errors);

// TODO 3 - Get the data from the form and check for errors


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
                <li>Votre entreprise : <span><?php echo htmlentities($_POST['companyName']); ?></span></li>
                <li>Votre nom : <span><?php echo htmlentities($_POST['name']); ?></span></li>
                <li>Votre email : <span><?php echo htmlentities($_POST['mail']); ?></span></li>
                <li>Votre message :
                    <p><?php echo htmlentities($_POST['contactMessage']); ?>
                    </p>
                </li>
            </ul>
        </div>
    </main>
</body>

</html>