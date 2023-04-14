<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./header.css" />
    <link rel="icon" href="./icons/socialIcon.png" />
    <title>Social</title>
    <style>
      #facebook {
        grid-area: a;
      }
      #instagram {
        grid-area: b;
      }
      #whatsapp {
        grid-area: c;
      }
      section {
        display: grid;
        grid-template-columns: 200px 200px 200px;
        grid-gap: 30px;
        padding: 40px;
        grid-template-areas: 'a' 'b' 'c';
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
    <section>
      <?php
        $array = array(0=>'',1=>'',2=>'');
        if(file_exists('social.txt')){
          $array = file('social.txt');
        }
      ?>
      <img id="facebook" class="social" src="/Landry_40224653/icons/facebook.jpg" alt="facebook" usemap="#facebook" />
      <map name="facebook">
        <area shape="rect" coords="0,0,200,200" href="<?php echo htmlspecialchars($array[0])?>" alt="facebook" />
      </map>
      <img id="instagram" class="social" src="/Landry_40224653/icons/instagram.jpg" alt="instagram" usemap="#instagram" />
      <map name="instagram">
        <area shape="rect" coords="0,0,200,200" href="<?php echo htmlspecialchars($array[1])?>" alt="instagram" />
      </map>
      <img id="whatsapp" class="social" src="/Landry_40224653/icons/whatsapp.jpg" alt="whatsapp" usemap="#whatsapp" />
      <map name="whatsapp">
        <area shape="rect" coords="0,0,200,200" href="<?php echo htmlspecialchars($array[2])?>" alt="whatsapp" />
      </map>
    </section>
  </body>
</html>
