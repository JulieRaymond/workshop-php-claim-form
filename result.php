<?php
$errors = [];

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
                <li>Votre entreprise : <span>Dunder Mifflin</span></li>
                <li>Votre nom : <span>Mickael Scott</span></li>
                <li>Votre email : <span>mickael.scott@dundermifflin.com</span></li>
                <li>Votre message :
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Provident facere, tempora possimus aspernatur excepturi
                        incidunt dolores illo dicta similique harum mollitia enim
                        voluptates delectus? Repellendus inventore molestiae a
                        accusamus deleniti?
                    </p>
                </li>
            </ul>
        </div>
    </main>
</body>

</html>