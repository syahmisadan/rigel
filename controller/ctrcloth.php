<?php
require_once '../model/query.php';

addOrder();

function addOrder()
{
  $data['name'] = $_POST['name'];
  $data['address'] = $_POST['address'];
  $data['phone'] = $_POST['phone'];
  $data['cloth'] = $_POST['cloth'];
  $data['size'] = $_POST['size'];
  $data['total'] = $_POST['total'];

  if(clothorder($data) == TRUE){
    //echo '<script>alert(Data Saved.); </script>';
    header('Location: ../view/cloth.php');
  }else{
    //$_SESSION["error_msg"] = "Error saving data. Please retry.";
    header('Location: ../view/cloth.php');
  }
}


?>
