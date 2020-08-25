<?php

require_once('connection.php');

$judul = $_POST['judul'];

if(!$nim || !$name || !$address || !$gender){
  echo json_encode(array('message'=>'required field is empty.'));
}else{

  $query = mysqli_query($CON, "INSERT INTO kdrama VALUES ('$judul')");

  if($query){
    echo json_encode(array('message'=>'kdrama data successfully added.'));
  }else{
    echo json_encode(array('message'=>'kdrama data failed to add.'));
  }

}

?>
