<?php

require_once('connection.php');

$id = $_GET['id'];

if(!$nim){
  echo json_encode(array('message'=>'required field is empty'));
}else{

  $query = mysqli_query($CON, "DELETE FROM kdrama WHERE id='$id'");

  if($query){
    echo json_encode(array('message'=>'kdrama data successfully deleted.'));
  }else{
    echo json_encode(array('message'=>'kdrama data failed to delete.'));
  }

}


?>
