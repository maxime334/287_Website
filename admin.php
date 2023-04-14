<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin</title>
    <link rel="stylesheet" href="./header.css" />
    <link rel="icon" href="./icons/admin.png" />
    <style>
      section {
        display: grid;
        grid-template-rows: 160px 400px 160px;
        padding: 40px;
        grid-template-areas: 'a b c';
      }
      #login {
        border: 1px solid black;
        grid-area: b;
        padding: 10px;
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
      <div id="login" style="text-align: center">
        <input id="username" type="text" placeholder="Username" />
        <input id="password" type="text" placeholder="Password" />
        <input type="submit" value="Login" onclick="processLogin()" />
        Username = foo Password = foo
      </div>
      <script src="./processLogin.js"></script>
    </section>
  </body>
</html>
