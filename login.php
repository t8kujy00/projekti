<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sisäänkirjautuminen</title>
    <link rel="stylesheet" href="css/login.css">
  </head>
  <body>
    <div align="center">
  <form action="login.php" method="post">
    <div class="imgcontainer">
      <img src="logo.png" alt="Avatar" class="avatar">
    </div>
    <br>
    <div class="container">
      <label for="nimi"><b>Käyttänimi</b></label><br>
      <input type="text" placeholder="Anna käyttäjänimi" name="nimi" required>
      <br><br>



      <label for="salasana"><b>Salasana</b></label><br>
      <input type="password" placeholder="Anna salasana" name="salasana" required>
      <br><br>
      <a href="paasivu.php" class="button">Kirjaudu sisään</a>

    </div>
    </form>
  </body>
</html>
