<?php if (isset($_COOKIE["id"])) {
    header('location: ./pages/discussions.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>D-Send</title>
</head>

<body>
    <?php require_once("./includes/menubar.php") ?>

    <div class="auth-cover-form">
        <form action="./processing/authentication.php" method="post">

        <h1 class="text-center">Se connecter</h1>

        <p class="texte-center">Renseigner vos paramètre de connexion dans les champs pour vous  connecter à votre comte.</p>

        <?php if (isset($_GET['auth']) && $_GET['auth'] == 'error') { ?>
            <div class="alert-error">
                L'adresse e-mail ou le mot de passe que vous avez saisis ne sont pas valides.
            </div>
        <?php } ?>

        <label for="email">E-mail</label>
        <input type="email" placeholder="Saisir l'e-mail ici ..." name="email" id="email" require minlength="6" maxlength="50">
        <br /><br />

        <input type="hidden" name="source" value="login">

        <label for="password">Password</label>
        <input type="password" placeholder="Saisir l'e-mail ici ..." name="password" id="password" require minlength="6" maxlength="50">
        <br /><br />

        <button class="button w-100">
            Se connecter
        </button>

        <p>
            Pas encore de comte, <a href="pages/register.php">inscrivez-vous.</a>
        </p>
        </form>
    </div>

</body>

</html>