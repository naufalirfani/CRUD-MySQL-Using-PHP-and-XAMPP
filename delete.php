<?php

require_once('connection.php');

$nim = $_GET['nim'];

if(!$nim){
  echo json_encode(array('message'=>'required field is empty'));
}else{

  $query = mysqli_query($CON, "DELETE FROM tb_student WHERE nim='$nim'");

  if($query){
    echo json_encode(array('message'=>'student data successfully deleted.'));
  }else{
    echo json_encode(array('message'=>'student data failed to delete.'));
  }

}


?>
