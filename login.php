<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sisäänkirjautuminen</title>
  </head>
  <body>
    <div align="center">
  <form action="login.php" method="post">
    <div class="imgcontainer">
      <img src="logo.png" alt="Avatar" class="avatar">
    </div>
    <br>
    <div class="container">
      <label for="nimi"><b>Käyttänimi</b></label>
      <input type="text" placeholder="Anna käyttäjänimi" name="nimi" required>
      <br><br>



      <label for="salasana"><b>Salasana</b></label>
      <input type="password" placeholder="Anna salasana" name="salasana" required>
      <br><br>
      <button class="btn default"><a href="paasivu.php">Kirjaudu sisään</a></button>

    </div>
    </form>
  </body>
</html>
