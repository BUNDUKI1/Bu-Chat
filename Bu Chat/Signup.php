<body>
  <?php
    include('includes/Head.php')
  ?>
<form class="container" method="POST" action="actions/Database.php">
  <?php
    if(isset($errorMsg)){
    echo '<p>' . $errorMsg . '</p>'; 
    }
  
  ?>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Prenom</label>
    <input type="text" class="form-control" name="Prenom" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nom</label>
    <input type="text" class="form-control" name="Nom" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Adresse-mail</label>
    <input type="email" class="form-control" name="Mail" aria-describedby="emailHelp" required>
    <div id="emailHelp" class="form-text">Votre adresse-mail nous permettra de vous contacter en cas de besoin ou de recupérer les infos de votre compte en cas de perte ou oubli</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" name="Password" required>
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">J'accepte les CGU</label>
  </div>
  <button type="submit" class="btn btn-primary" name="Validate">Envoyer</button>
</form>

</body>