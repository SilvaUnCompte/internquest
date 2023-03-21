<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="../assets/images/book.png" />

  <link href="../assets/vendors/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendors/fontawesome/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../public/styles/generics/header/header.css">
  <link rel="stylesheet" href="../public/styles/generics/footer/footer.css">
  <title>{$title}</title>
</head>

<body>

  <header id="native-header">
    <nav aria-label="first_header" class="navbar navbar-dark bg-dark">
      <a href="index.php"><img id="company_name" src="../assets/images/logo.png" alt="InternQuest logo"
          width="300px"></a>
      <div id="button_div_header">
        <!--<button id="register_button" type="button" class="btn btn-primary" href="javascript:void(0)"><span>S'inscrire</span></button>-->
        <a id="login_button" class="btn btn-primary" href="login.php">Se connecter</a>

        <img id="account_avatar" src="../assets/images/avatar.svg" alt="Avatar image" width="50px">
      </div>
    </nav>

    <nav id="second_header">
      <ul class="navbar-nav me-auto mb-2 mb-xl-0">
        <li class="nav-item">
          <a id="nav-accueil" class="nav-link active" aria-current="page" href="#">Accueil</a>
        </li>
        <li id="nav-recherche" class="nav-item">
          <a class="nav-link" href="research.php">Rechercher</a>
        </li>
      </ul>
      <ul class="navbar-nav mb-2 mb-xl-0">
        <li class="nav-item">
          <a id="nav-tech" class="nav-link" href="#">Support technique ➔</a>
        </li>
      </ul>
    </nav>
</header>