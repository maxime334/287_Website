<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Resume</title>
    <link rel="stylesheet" href="./header.css" />
    <link rel="icon" href="./icons/resumeIcon.png" />
    <style>
      .titles {
        font-size: 30px;
        grid-area: 'a b c';
        text-decoration: underline;
      }
      section {
        padding-left: 30px;
        padding-right: 30px;
      }
      body {
        height: 1300px;
      }
      dd {
        padding-bottom: 10px;
      }
      li,
      dl {
        background-color: wheat;
        border: 1px solid black;
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
        $array = array('','','','','');
        if(file_exists('resume.txt')){
          $array = file('resume.txt');
        }
      ?>
      <p class="titles">Education</p>
      <dl>
      <?php
        echo $array[0];
      ?>
        <dt>High-School Certificate</dt>
        <dd>École Secondaire Félix-Leclerc</dd>
        <dt>Natural Science Diploma</dt>
        <dd>
          Cégep de Lanaudière à l'Assomption <br />
          2019-2021 <br />
          Developped my analytical mind, and taste for research and experimentation.<br />
          Learned to apply a scientific approach and solves concrete problems.
        </dd>
        <dt>BCompSc (Done within 2025)</dt>
        <dd>
          Concordia University <br />
          2021-X <br />
          Developping foundations in programming languages, algorithms, data structures, computer systems and databases.
        </dd>
      </dl>
      <!---->
      <p class="titles">Professional and Technical Skills</p>
      <dl>
        <?php
          echo $array[1];
        ?>
        <dt>Critical Thinking and Problem Solving</dt>
        <dd>
          Computer Science involves finding creative solutions to complex problems. <br />
          During my bachelor, I have vastly improved my ability to analyze and solve problems in any field.
        </dd>
        <dt>Technical Skills</dt>
        <dd>
          During my current studies, I have learned good foundations in OOP. Java is currently <br />
          the language I currently have the most experience, followed by C++.<br />
        </dd>
        <dt>Sales Skills</dt>
        <dd>
          I have gained experience in cold calling, lead generation, and closing sales deals. <br />
          Furthermore, balancing sales roles with my studies has improved my ability to <br />
          manage my time and prioritize tasks effectively.
        </dd>
      </dl>
      <!---->
      <p class="titles">Awards and Recognitions</p>
      <ol type="i">
      <?php
        echo $array[2];
        ?>
        <li>2 Times in the Top 12 for Part-Time Sales Rep at Telus in Quebec</li>
      </ol>
      <!---->
      <p class="titles">Work Experience</p>
      <ol type="i">
      <?php
        echo $array[3];
        ?>
        <li>Assistant in a Car Cylinder Factory (3 months - 2018)</li>
        <li>Cashier at Brunet (2019-2021)</li>
        <li>Sales Representative at Telus (2021 - Now)</li>
      </ol>
      <!---->
      <p class="titles">References</p>
      <ul>
      <?php
        echo $array[4];
        ?>
        <li>Telus Reference (Benoît Gagnon) (450) 657-9043</li>
        <li>Brunet Reference (Sylvie Grégoire) (450) 582-9992</li>
      </ul>
      <input type="button" value="Download CV" />
    </section>
  </body>
</html>
