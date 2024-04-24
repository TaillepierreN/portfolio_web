<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="/static/styles/login.css">
    <link rel="icon" href="/static/ressources/pepe.png">
    <title>Login</title>
</head>

<body>
    <div class="container">
        <div class="login__content">
            <img src="/static/ressources/ps4controller.jpg" alt="login image" class="login__img">
            <form action="" class="login__form">
                <div>
                    <h1 class="login__title"><span>Coucou</span> mon p'tit loup</h1>
                    <p class="login__description">C'est ici que tu rentres tes identifiants</p>
                </div>
                <div>
                    <div class="login__inputs">
                        <div>
                            <label for="input-email" class="login__label">Nom de compte</label>
                            <input type="email" placeholder="Tu peux le faire"
                            required class="login__input" id="input-email">
                        </div>
                        <div>
                            <label for="input-pass" class="login__label">Mot de passe</label>
                            <div class="login__box">
                                <input type="password" placeholder="Met chaussure par exemple"
                                required class="login__input" id="input-pass">
                                <i class="ri-eye-off-line login__eye" id="input-icon"></i>
                            </div>
                        </div>
                    </div>
                    <div class="login__check">
                        <input type="checkbox" class="login__check-input" id="input-check">
                        <label for="input-check" class="login__check-label">Ne m'oublie pas</label>
                    </div>
                </div>
                <div>
                    <div class="login__buttons">
                        <button class="login__button" onclick="window.location.href='/static/index.html';">Connexion</button>
                        <button class="login__button login__button-ghost" onclick="window.location.href='./register.php';">Inscription</button>
                    </div>
                    <a href="#" class="login__forgot">T'as encore oublié ton mdp ? Démerdes-toi</a>
                </div>
            </form>
        </div>
    </div>
    <script src="/scripts/login.js"></script>
</body>

</html>