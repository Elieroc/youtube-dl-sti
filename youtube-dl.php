<!DOCTYPE html>
<html>
  <head>
    <title>Youtube MP3 Downloader</title>

    <!-- An open source project by Elieroc -->
    <!-- Github of the project : -->
    <!-- https://github.com/Elieroc/youtube-dl -->

    <!-- Special version for STI2D -->

    <link rel="stylesheet" type="text/css" href="ressources/mystyle.css">
  </head>
  <body>
    <?php

      // Si il n'y a pas de lien indiqué, afficher la page d'acceuil
      if (!isset($_POST['link'])) {

    ?>
    <?php
      include '/menu/index.html';
    ?>

    <!-- Logo STI2D du Menu -->
    <div class="menu">
      <img src="ressources/sti2d-logo.jpg" style="width:200px;height:100px;">
    </div>

    <!-- Menu -->
    <nav class="barre-menu">
			<ul>
				<li><a href="youtube-dl.php">MP3</a></li>
				<li><a href="youtube-dl-mp4.php">MP4</a></li>
        <li><a href="#">Plus</a></li>
			</ul>
		</nav>

    <div class="bloc">
      <img src="ressources/yt-logo.png" style="width:100px;height:100px;">

      <h1>Youtube MP3 Downloader</h1>

        <form method="post" action="mp3.php">

          <!-- Input lien -->
          <input class="input" type="text" placeholder="Coller le lien" name="link"/>


          <!-- Bouton "GO" -->
          <div class="container">
            <button class="btn button" type="submit">GO</button>
          </div>

        </form>
    </div>
    <?php
      }
    ?>
  </body>
</html>
