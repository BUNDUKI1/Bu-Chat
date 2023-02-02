
    <title>Connexion à Bu Chat</title>
   
        <!--<form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
          <input type="search" class="form-control form-control-dark text-bg-dark" placeholder="Search..." aria-label="Search">
        </form>-->


        
     <?php

include "headers/header.html"
?>
  
  <div class="text-center">
    <style>
      .body{
        
        line-height: 35;
        color: var(--bs-body-color);
        text-align: center;
        background-color: #05484c;
      }
    </style>
    <main class="form-signin w-100 m-auto">
      <form action= "compte/espace_accueil.php">
          <h2 class="h3 mb-3 fw-normal">Identifiez-vous</h2>

        <div class="form-floating">
          <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
          <label for="floatingInput">Adresse-mail</label>
        </div>
        <div class="form-floating">
          <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
          <label for="floatingPassword">Mot de passe</label>
        </div>

        <div class="checkbox mb-3">
          <label>
          <input type="checkbox" value="remember-me">se souvenir de moi
          </label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Connexion</button>
        
      </form>
    </main>
  </div>


 
<?php
       include "headers/footer1.php"
  ?>

