<html>
  <head>
  </head>
  <body>
    <ul>
    <?php
      $pdo = new PDO('mysql:host=localhost;dbname=usermgmt', 'root', 'gibbiX12345');
      $stm = "SELECT * FROM users";
      $stm -> execute();
      for($entry = $stm->fetch()){
        echo '<li>'.$entry[0].' '.$entry[1].' '.$entry[2].'</li>';
      }
    ?>
  </ul>
  </body>
</html
