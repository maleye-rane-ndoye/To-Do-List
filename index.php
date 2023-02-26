<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="script.js" defer></script>
    <title>My To-Do-List</title>
</head>
<body>
    <nav class="nav">
        <div class="logo-todolist">
            <img src="images/TODO.png" alt="">
            <p>TO-DO-LIST</p>
        </div>
        <div class="flex"></div>
        <div class="profil">
            <div class="avatar"><img src="" alt=""></div>
            <div class="username"> Bonjour, Maleye Rane Ndoye</div>
        </div>
    </nav>
    <section class="re-todo">
        <div class="re-content">
            <article class="re-box-todo">
                <h1>INSCRIPTION </h1>
                <form method="POST">
                      <input type="text" name="nom" placeholder="Entrer votre nom">
                      <input type="text" name="prenom" placeholder="Entrer votre prénom">
                      <input type="email" name="email" placeholder="Entrer votre adresse mail">
                      <input type="password" name="password" placeholder="Entrer votre mot de passe">
                      <input type="password" name="cpassword" placeholder="Confirmer votre mot de passe">
                      <input type="submit" name="submit" value="Envoyer">


                </form>
            </article>
        </div>
        <div class="re-content">
            <article class="re-box-todo">
                <h1>CONNEXION </h1>
                <form method="POST">
                      <input type="email" name="email" placeholder="Entrer votre adresse mail">
                      <input type="password" name="password" placeholder="Entrer votre mot de passe">
                      <input type="submit" name="submit" value="Envoyer">
                </form>
            </article>
        </div>
    </section>