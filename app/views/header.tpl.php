<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= $_SERVER['BASE_URI'] ?>/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js">



    <title>Pokedex</title>
</head>
<header>

<ul class="nav">
  <li class="nav-item">
    <a class="nav-link active" href="<?= $viewData['router']->generate('main-home') ?>">Pokédex</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="<?= $viewData['router']->generate('main-home') ?>">Liste Types/liens faux a changer</a>
  </li>
</ul>
    </header>
    <body>
   

    
