<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./header.css" />
    <link rel="icon" href="./icons/homeIcon.png" />
    <title>Home Page</title>
    <style>
      section {
        display: grid;
        grid-template-columns: 40px 720px 40px;
        grid-template-rows: 475px;
        grid-template-areas: 'x a y' 'x b y' 'x c y';
        grid-gap: 20px;
        padding: 40px 40px;
      }
      img {
        border: 1px solid black;
      }
      p {
        border: 1px solid black;
        background-color: wheat;
        font-size: 20px;
      }
    </style>
  </head>
  <body>
    <header>
      <div id="admin">
        <a href="./home.php" class="layouttext">Home</a>
      </div>
      <div id="resume">
        <a href="./resume.php" class="layouttext">Resume</a>
      </div>
      <div id="projects">
        <a href="./projects.php" class="layouttext">Projects</a>
      </div>
      <div id="contact">
        <a href="./contacts.php" class="layouttext">Contact</a>
      </div>
      <div id="social">
        <a href="./social.php" class="layouttext">Social</a>
      </div>
      <div id="logout">
        <a href="./admin.php" class="layouttext">Admin</a>
      </div>
    </header>
    <section">
      <?php
        $array = array(0=>'',1=>'');
        if(file_exists('index.txt')){
          $array = file('index.txt');
        }
      ?>
      <img src="./icons/myself.jpg" alt="Image could not be loaded" width="500" style="grid-area: a" />
      <p style="grid-area: b">
        <?php
        echo htmlspecialchars($array[0]);
        ?>
      </p>
      <p style="grid-area: c">
        <?php
          echo htmlspecialchars($array[1]);
        ?>
      </p>
    </section>
  </body>
</html>
