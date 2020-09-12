<!DOCTYPE html>
<html>
  <head>
    <title>Téléchargement terminé !</title>

    <!-- An open source project by Elieroc -->
    <!-- Github of the project : -->
    <!-- https://github.com/Elieroc/youtube-dl -->

    <!-- Special version for STI2D -->

    <link rel="stylesheet" type="text/css" href="ressources/style.css">
    <meta charset="UTF-8">
  </head>
  <body>
    <?php

      // Déclaration des variables
      $command_name = "youtube-dl -e " . escapeshellarg($_POST['link']);

      $command_id = "youtube-dl --get-id " . escapeshellarg($_POST['link']);

      $command_dl_mp3 = "youtube-dl -x --audio-format mp3 " . escapeshellarg($_POST['link']);

      // Si aucun lien n'est passé en post, rediriger vers la page d'acceuil
      if (!isset($_POST['link'])) {

        header('Location: youtube-dl.php');

      }

      // Sinon on continue
      else {

        // Récupération de l'id de la musique
        $id = shell_exec($command_id);

        // Récupération du nom de la musique
        $name = shell_exec($command_name) . "-" . $id . ".mp3";

        // Téléchargement
        shell_exec($command_dl_mp3);

        // Déplacement dans le répertoire musiques
        shell_exec('mv *.mp3 musiques/');

      ?>

      <h2>Votre musique a bien été téléchargé !</h2>

      <!-- Possibilité de lire la musique directement dans le navigateur -->
      <audio controls>
        <source src="./musiques/<?php echo $name ?>" type="audio/mpeg">
      </audio>
      <br>

          <!-- Génération du lien pour télécharger la musique -->
          <a href="./musiques/<?php echo $name ?>" download="<?php echo $name ?>">Télécharger la musique<a><br><br>

          <!-- Bouton pour retourner à la page d'acceuil -->
          <a href="./youtube-dl.html">Retour à l'acceuil<a>


      <?php
        }
      ?>
</body>
</hmtl>
