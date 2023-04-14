<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./header.css" />
    <link rel="icon" href="./icons/projectsIcon.png" />
    <title>Projects</title>
    <style>
      section {
        display: grid;
        grid-template-columns: 160px 500px 160px;
        grid-template-rows: 300px;
        padding: 40px;
        grid-template-areas: 'a b c';
      }
      h4 {
        font-size: 30px;
      }
      li {
        font-size: 20px;
      }
      #projects {
        grid-area: b;
        border: 1px solid black;
        background-color: wheat;
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
      $array = array('');
      if(file_exists('project.txt')){
        $array = file('project.txt');
      }
        ?>
      <div id="projects">
        <h4 style="text-decoration: underline">Projects done within the last 10 years</h4>
        <ol reversed="reversed" type="I">
          <p style="font-size: 20px">
          <?php
            echo htmlspecialchars($array[0]);
          ?>
          </p>
        </ol>
      </div>
    </section>
  </body>
</html>
