<html>
  <head>
  </head>
  <body>
  <?php
    session_start();
    $_SESSION["loggedin"] = "true";
  ?>
      <form action='create.php' method='POST'>
        Vorname<input type="text" name='firstName'><br>
        Nachname<input type="text" name='lastName'><br>
        Email<input type="text" name='email'><br>
        <input type="submit" value='Erstellen'>
      </form>
  </body>
</html>
