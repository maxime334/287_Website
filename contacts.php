<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contacts</title>
    <link rel="stylesheet" href="./header.css" />
    <link rel="stylesheet" href="./layout.css" />
    <link rel="icon" href="./icons/contactIcon.png" />
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
      <div style="width: 50px">
        <input id="name" type="text" placeholder="name" style="margin-bottom: 10px" />
        <input id="email" type="text" placeholder="email" style="margin-bottom: 10px" />
        <input id="phone" type="text" placeholder="phone-number" style="margin-bottom: 20px" />
        <textarea id="message" cols="30" rows="5" placeholder="message"></textarea>
        <input type="button" value="Submit" onclick="submitContactMsg()">
      <script type="text/javascript">
        function submitContactMsg(){
          let name = document.getElementById('name').value;
          let email = document.getElementById('email').value;
          let phone =document.getElementById('phone').value;
          let message =document.getElementById('message').value;
          let file = new File(['Name: ', name, '\n','Email: ', email,'\n','Phone-Number: ', phone,'\n','Message: ', message], 'message.txt', {type: 'text/plain'});
          let url = URL.createObjectURL(file);
          let a = document.createElement('a');
          a.href = url;
          a.download = file.name;
          a.click();
        }
        </script>
      </div>
    </section>
  </body>
</html>
