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
                <i class="fas fa-user-plus fa-3x mt-4 mb-2	"></i>
                <h3 class="mt-2 mb-2">Créez un compte</h3>
            </div>

            <!-- Login Form -->
            <form method="get">
                <input type="text" id="login" class="fadeIn second" name="email" placeholder="Adresse mail" required>
                <input type="password" id="password" class="fadeIn second" name="password" placeholder="Mot de passe" required>
                <input type="text" id="cin" class="fadeIn second" name="cin" placeholder="CIN" required>
                <input type="text" id="numero" class="fadeIn second" name="numero" placeholder="Numéro tel" required>
                <input type="text" id="specialite" class="fadeIn second" name="specialite" placeholder="Spécialité" required>
                <div class="row">
                    <div class="col fadeIn second">
                        <input type="text" class="form-control" placeholder="Adresse">
                    </div>
                    <div class="col fadeIn second">
                        <input type="text" class="form-control" placeholder="Salaire">
                    </div>
                </div>
                <button onclick="window.location.href='index.php'" type="submit" class="fadeIn fourth" value="Log In"> Connectez-vous </button>

            </form>

            <!-- Remind Passowrd -->
            <div id="formFooter">
                <a class="underlineHover" href="forgetpassword.php">Forgot Password?</a>
                <p>Vous avez déja un compte ! <a class="underlineHover" href="login.php">Connectez-vous</a></p>
            </div>

        </div>
    </div>
    <title>Document</title>
</head>

<body>

</body>

</html>