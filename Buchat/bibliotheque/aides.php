<?php
        include "C:\wamp64\www\Buchat\assets\headers\header.html"
        ?>
    

  <body>
    
   
    <div class="text-end">
        <h1>Page d'aide</h1>

        <br>
</br>
<p>Bienvenu sur la page d'aide
    <br>
    Que voudriez-vous savoir?

    Buchat vous propose ici des questions fréquentes :<br>
    <a href="aides.php?bases="this.true>Quelles sont les bases de Buchat </a>
    <br>

     <ul class="basesBuchat">
         <li>Les bases de Buchat</li>
         <li class="sousmenu">
             <ul class="Bases">
                 <li><p> Parlons de la maintenance de Buchat 
                    <br>
                    Pour devoir utiliser convenablement Buchat, référez-vous à la section <a href="#Usage">d'usage de Buchat</a>
                    <br>
                    Vous aurez plus de conseil si vous rejoingnez notre communauté en vous inscrivant à notre nezsletter ou en nous contactant via <a href="https://www.mail-to-ibminnove@gmail.com">nos contacts</mail>
                 </p></li>
                 <li><a href="">Emploi du temps</a></li>
                 <li><a href="">Recherche de stage</a></li>
                 <li><a href="">Documents</a></li>
    </ul>
</p>
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
</body> 
 

  <?php
          include "C:\wamp64\www\Buchat\assets\headers\\footer.php"
     ?>


