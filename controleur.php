<?php

require_once 'config_bdd.php';

global $pdo;

 $pdo = new PDO("mysql:host=$host;port=$port;dbname=$database", $user, $password);


function enregistrer_marqueur($conn, $uuid, $nom_marqueur, $pos_x, $pos_y) {
  $stmt = $conn->prepare("INSERT INTO marqueurs SET
    uuid = :uuid,
    nom = :nom,
    posX = :posX,
    posY = :posY
  ");

  $stmt->execute(array(
    ':uuid' => $uuid,
    ':nom' => $nom_marqueur,
    ':posX' => $pos_x,
    ':posY' => $pos_y
  ));
}
