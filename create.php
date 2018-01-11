<?php
  session_start();
  if($_SESSION['loggedin'] == "true") {
    $pdo = new PDO('mysql:host=localhost;dbname=usermgmt', 'root', 'gibbiX12345');
    $pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];

    $statement = $pdo->prepare("INSERT INTO `users` (Surname,Lastname,Emailaddress)VALUES(:fn,:lna,:email);");
    $statement->execute(array(':fn' => $firstName,':lna' => $lastName,':email' => $email));
    $lastId = $pdo->lastInsertId();
    echo $lastId;
  } else {
    echo "Session not activated";
  }
?>
