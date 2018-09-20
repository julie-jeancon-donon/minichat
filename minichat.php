<?php

// config.php : files which contains link to DB
require 'config.php';

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="css/main.css">
        <title>Mini-chat</title>
    </head>

    <body>

      <form method="post" action="minichat_post.php">

        <label>Pseudo </label> : <input type="text" name="pseudo"/></br>
        <label>Message </label> : <input type="text" name="message"/></br>
        <input type="submit" value="Valider" /></br>

      </form>



<?php

// query which displays user pseudo in upper case and messages ordered by decreasing
$req = $bdd->query('SELECT UPPER(pseudo) as pseudo_MAJ ,message FROM minichat ORDER BY id DESC LIMIT 0, 10');


      while ($donnees = $req->fetch())
      {
      ?>

      <p><span class="pseudo"><?php echo $donnees['pseudo_MAJ']; ?></span> : <span class="mess"><?php echo $donnees['message'];?></span></p>

      <?php
      }



$req->closeCursor();

?>

  </body>
</html>
