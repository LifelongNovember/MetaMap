<?php

require_once 'controleur.php';

if(!empty($_POST)) {
  enregistrer_marqueur($pdo, uniqid(), $_POST['nom_marqueur'], $_POST['pos_x'], $_POST['pos_y']);
  $message_retour = "Marqueur " . $_POST['nom_marqueur'] . " placé en [" . $_POST['pos_x'] . ", " . $_POST['pos_y'] . "]";
}

$marqueurs = get_marqueurs($pdo);

?>


<html>
<head>
  <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
  <div class="content">
    <div id="pointer_div" onclick="point_it(event)" style="">
      <img src="point.gif" id="cross" class="marqueur" />
    </div>
    <div class="interface">
      <form action="coord.php" method="post">
        <div class="infos_marqueurs row">
          <div class="col-25">
            <label for="nom_marqueur">Nom du marqueur : </label>
          </div>
          <div class="col-75">
            <input type="text" id="nom_marqueur" name="nom_marqueur" />
          </div>
        </div>
        <div class="position_marqueur row">
          <div class="col-25">
            <label for="pos_x">X : </label>
          </div>
          <div class="col-25">
            <input type="text" id="pos_x" name="pos_x" readonly />
          </div>
          <div class="col-25">
            <label for="pos_y">Y : </label>
          </div>
          <div class="col-25">
            <input type="text" id="pos_y" name="pos_y" readonly />
          </div>
        </div>
        <div class="soumission_formulaire row">
          <div class="col-75"></div>
          <div class="col-25">
            <input type="submit" value="Envoyer" />
          </div>
        </div>
        <div class="message_retour row">
          <?php echo isset($message_retour) ? $message_retour : null; ?>
        </div>
      </form>
    </div>
  </div>
  <form id="marqueur" name="marqueur" method="post" action="coord.php">
  </form>
  <script type="text/javascript" src="coord.js"></script>
  <script type="text/javascript">
    <?php
    while($marqueur = $marqueurs->fetch()) {
      echo 'ajout_marqueur(' . $marqueur['posX'] . ',' . $marqueur['posY'] . ');';
    }
    ?>
  </script>
</body>
</html>
