<html>
  <head>
    <script type="text/javascript" src="coord.js"></script>
  </head>
  <body>
    <div id="pointer_div" onclick="point_it(event)" style="background-image:url('map.jpg');width:1024px;height:635px;">
      <img src="point.gif" id="cross" style="position:relative;visibility:hidden;z-index:2;"></div>
    </div>
    <form id="marqueur" name="marqueur" method="post" action="coord.php">
      <input type="hidden" name="dejarempli" value="1" />
      <label for="nom">Nom du marqueur :</label>
      <input type="text" name="nom" id="nom" value="<?php $nom=(isset($_POST['nom']) ? $_POST['nom'] : ''); echo $nom; ?>"/>
      <label for="x">X :</label>
      <input type="text" name="x" id="x" value="<?php $x=(isset($_POST['x']) ? $_POST['x'] : ''); echo $x; ?>" readonly />
      <label for="y">Y :</label>
      <input type="text" name="y" id="y" value="<?php $x=(isset($_POST['x']) ? $_POST['y'] : ''); echo $x; ?>" readonly />
      <input type="submit" value="Envoyer" onclick="setValue();" />
    </form>
  </body>
</html>
