<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <div class="wrapper fadeInDown">
        <div id="formContent">
            <!-- Tabs Titles -->

            <!-- Icon -->
            <div class="fadeIn first">
                <i class="fas fa-lock fa-3x mt-4 mb-2	"></i>
                <h3 class="mt-2 mb-2">Récuperation du mot de passe</h3>
            </div>

            <!-- Login Form -->
            <form method="get">
                <input type="text" id="login" class="fadeIn second" name="email" placeholder="Votre adresse mail..." required>
                <button onclick="window.location.href='index.php'" type="submit" class="fadeIn fourth" value="Log In">réinitialiser votre mot de passe</button>
            </form>

            <!-- Remind Passowrd -->
            <div id="formFooter">
                <p>Vous avez déja un compte ! <a class="underlineHover" href="./login.php">Connectez-vous</a></p>
                <p>Pas de compte? <a class="underlineHover" href="./creerCompte.php">Créer un compte</a></p>
            </div>

        </div>
    </div>
    <title>Document</title>
</head>

<body>

</body>

</html>