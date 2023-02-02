
        <!--<form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
          <input type="search" class="form-control form-control-dark text-bg-dark" placeholder="Search..." aria-label="Search">
        </form>-->

     
     
     

    
        <?php
        include "headers/header.html"
        ?>
    

     
     
    <div class="text-end">
           <!---->
          <button onclick="document.location.href = 'config/login.php'" type="button" class="btn btn-outline-light me-2" id="Connexion">Se connecter</button>
          <button onclick="document.location.href = 'config/signin.php'" type="button" class="btn btn-warning" id="Inscription">S'inscrire</button>
     
    <!---?php
      $btncon='button id="Connexion"';
      $btninsc="Inscription";
      if ((isset($btncon))) {
        header ('location:config/login.php', true);
      }
    else {
      header ('location:Buchat/config/signin.php=?', true);
      }
    ?-->

    </div>
 
 

  <?php
          include "headers/footer1.php"
     ?>


