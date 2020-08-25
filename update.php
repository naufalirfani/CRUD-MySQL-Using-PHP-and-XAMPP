<?php

require_once('connection.php');

$judul = $_POST['judul'];

if(!$judul){
  echo json_encode(array('message'=>'required field is empty.'));
}else{

  $query = mysqli_query($CON, "UPDATE kdrama SET judul='$judul'");

  if($query){
    echo json_encode(array('message'=>'kdrama data successfully updated.'));
  }else{
    echo json_encode(array('message'=>'kdrama data failed to update.'));
  }

}

?>
