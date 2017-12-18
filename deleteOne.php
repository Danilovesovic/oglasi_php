<?php
require_once 'connection.php';
$id = $_GET['id'];
$sql = "DELETE FROM oglasi WHERE id='$id'";
$query = mysqli_query($db, $sql);

if ($query) {
  header("Location: index.php");
}else{
  echo "<h1>Something is wrong. Try again later !!!</h1>";
}
 
