<?php

function dd($var)
{
  return die(var_dump($var));
}


function getAll()
{
  global $db;
  $sql = "SELECT * FROM oglasi";
  $query = mysqli_query($db,$sql);
  $result = mysqli_fetch_all($query,MYSQLI_ASSOC);
  return $result;
}
function findOne($id)
{
  global $db;
  $sql = "SELECT * FROM oglasi WHERE id='$id'";
  $query = mysqli_query($db, $sql);
  if (mysqli_num_rows($query)) {
    return mysqli_fetch_assoc($query);
  }else{
    return false;
  }
}
