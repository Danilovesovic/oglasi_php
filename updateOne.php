<?php
require_once 'connection.php';
if (isset($_POST['sub'])) {
  if (!empty($_POST['name']) && !empty($_POST['kratak_opis']) && !empty($_POST['opis']) && !empty($_POST['phone']) && !empty($_POST['email']) && !empty($_POST['price'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $kratak_opis = $_POST['kratak_opis'];
    $opis = $_POST['opis'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $price = $_POST['price'];

    $sql = "UPDATE oglasi SET name='$name',kratak_opis='$kratak_opis',opis='$opis',phone='$phone',email='$email',price='$price' WHERE id='$id'";
    $query  = mysqli_query($db, $sql);
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
