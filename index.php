<?php 
define('_RECIPES_IMG_PATH_', 'uploads/recipes/');

?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/override-bootstrap.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<body>


<?php

$recipes = [
    ['titre' => 'Mousse au chocolat', 'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corporis eos illum', 'image' => '1-chocolate-au-mousse.jpg'],
    ['titre' => 'Gratin dauphinois', 'description' => 'Gratin ipsum dolor sit, amet consectetur adipisicing elit.', 'image' => '2-gratin-dauphinois.jpg'],
    ['titre' => 'Salade', 'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corporis eos illum', 'image' => '3-salade.jpg']
];

?>

<div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
        <a href="indexp" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
        <img src="assets/images/logo-cuisinea-horizontal.jpg" width="200" alt="logo">
        </a>

      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="#" class="nav-link px-2 link-secondary">Home</a></li>
        <li><a href="#" class="nav-link px-2 link-dark">Features</a></li>
        <li><a href="#" class="nav-link px-2 link-dark">Pricing</a></li>
        <li><a href="#" class="nav-link px-2 link-dark">FAQs</a></li>
        <li><a href="#" class="nav-link px-2 link-dark">About</a></li>
      </ul>

      <div class="col-md-3 text-end">
        <button type="button" class="btn btn-outline-primary me-2">Login</button>
        <button type="button" class="btn btn-primary">Sign-up</button>
      </div>
    </header>
 
    <div class="container col-xxl-8 px-4 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-10 col-sm-8 col-lg-6">
        <img src="assets/images/logo-cuisinea.jpg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="300"  loading="lazy">
      </div>
      <div class="col-lg-6">
        <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Cuisinea-Recettes de cuisine</h1>
        <p class="lead">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corporis eos illum, aliquid cumque atque ducimus tempora est aperiam deleniti eius doloribus vero ipsum perspiciatis expedita cum beatae deserunt adipisci numquam unde. Nostrum ad repudiandae sequi excepturi impedit, expedita, suscipit quas consequatur veniam quia ducimus consectetur maiores iste commodi fuga laborum.</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
          <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Voir nos recettes</button>
         
        </div>
      </div>
    </div>
  </div>

<div class="row">

<?php
foreach($recipes as $key=> $recipe){?>

<div class="col-md-4">
        <div class="card" style="width: 18rem;">
       <img src="<?=_RECIPES_IMG_PATH_ .$recipe['image']?>" class="card-img-top" alt="mousse chocolat">
        <div class="card-body">
        <h5 class="card-title"><?=$recipe['titre']?></h5>
        <p class="card-text"><?= $recipe['description']?></p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
   </div>
    </div>

<?php } ?>
;



    

<div class="container">
  <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 my-5 border-top">
    <div class="col mb-3">
      <a href="/" class="d-flex align-items-center mb-3 link-body-emphasis text-decoration-none">
      <img src="assets/images/logo-cuisinea.jpg" width=200  alt="logo cuisine">
      </a>
      <p class="text-body-secondary">© 2024</p>
    </div>

    <div class="col mb-3">

    </div>

    <div class="col mb-3">
      <h5>Section</h5>
      <ul class="nav flex-column">
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
      </ul>
    </div>

    <div class="col mb-3">
      <h5>Section</h5>
      <ul class="nav flex-column">
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
      </ul>
    </div>

    <div class="col mb-3">
      <h5>Section</h5>
      <ul class="nav flex-column">
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
      </ul>
    </div>
  </footer>
</div>






</body>
</html>