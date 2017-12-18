<?php
require_once 'connection.php';
if (isset($_POST['sub'])) {
  if (!empty($_POST['name']) && !empty($_POST['kratak_opis']) && !empty($_POST['opis']) && !empty($_POST['phone']) && !empty($_POST['email']) && !empty($_POST['price'])) {
    $name = $_POST['name'];
    $kratak_opis = $_POST['kratak_opis'];
    $opis = $_POST['opis'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $price = $_POST['price'];

    $sql = "INSERT INTO oglasi VALUES (NULL,'$name','$kratak_opis','$opis','$phone','$email','$price')";
    $query = mysqli_query($db, $sql);

    if ($query) {
      header('Location: index.php');
    }else{
      echo "<h1>Something is wrong! Try again later!</h1>";
    }

  }else{
    echo "<h1>All fields are required !!!</h1>";
  }
}else{
  echo "<h1>404 error</h1>";
}
