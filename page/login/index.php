<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Tous vos cours gratuits sur Ananas">
  <meta name="keywords" content="Ananas, cours, cour, ecole, école, aide, maths, math, francais, français, mathematiques, mathematique, mathématiques, mathématique, anglais, histoir, geo, geographie">
  <meta name="author" content="Jules & Rayan">
  <meta name="subject" content="Cours et aide gratuite">
  <meta name="copyright" content="Ananas">
  <meta name="language" content="FR">
  <meta name="owner" content="Jules & Rayan">
  <meta name="url" content="http://ananas-seven.000webhostapp.com">
  <meta name="category" content="Aide, Cours">

  <meta name="og:title" content="Ananas" />
  <meta name="og:type" content="cours" />
  <meta name="og:url" content="http://ananas-seven.000webhostapp.com" />
  <meta name="og:image" content="../../media/image/ananas.png" />
  <meta name="og:site_name" content="Ananas" />
  <meta name="og:description" content="Tous vos cours gratuits sur Anana" />

  <meta name="og:postal-code" content="71400" />
  <meta name="og:country-name" content="FRANCE" />

  <link rel="icon" href="../../media/image/ananas.png" />

  <link rel="stylesheet" href="./media/style.css">

  <title>Connexion</title>
</head>
<body>
  <?php
  require('../../newFolder/phplog.php');
  if (isset($_POST['submit-login'])) {
    echo 'Login ☺';
  } else if(isset($_POST['submit-register'])) {
    echo 'Register ☻';
  }
  ?>
  <div action="" method="post" id="login" class="content default-link">
    <div class="up center">
      <span>Connexion</span>
    </div>
    <form class="bottom left" name="login">
      <input type="text" name="email" placeholder="E-mail">
      <input type="text" name="password" placeholder="Mot de passe">
      <input type="submit" name="submit-login" value="Se connecter">
    </form>
    <div class="bottom right" onclick="redirectTo('#register')">
      <a href="#register">S'inscrire</a>
    </div>
  </div>
  <div action="" method="post" id="register" class="content">
    <div class="up center">
      <span>Inscription</span>
    </div>
    <form class="bottom left" name="register">
      <input type="text" name="email" placeholder="E-mail">
      <input type="text" name="name" placeholder="Nom">
      <input type="text" name="username" placeholder="Prénom">
      <input type="text" name="password" placeholder="Mot de passe">
      <input type="text" name="confirm-password" placeholder="Mot de passe">
      <input type="submit" name="submit-register" value="S'inscrire">
    </form>
    <div class="bottom right" onclick="redirectTo('#login')">
      <a href="#login">Se connecter</a>
    </div>
  </div>
  <script src="./media/script.js"></script>
</body>
</html>