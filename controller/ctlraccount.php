<?php
require_once '../model/query.php';

addAcount();

function addAcount()
{
  $data['title'] = $_POST['title'];
  $data['amount'] = $_POST['amount'];
  $data['type'] = $_POST['type'];
  $data['date'] = $_POST['date'];
  if(insertAccount($data) == TRUE){
    //echo '<script>alert(Data Saved.); </script>';
    header('Location: ../view/account.php');
  }else{
    //$_SESSION["error_msg"] = "Error saving data. Please retry.";
    header('Location: ../view/account.php');
  }
}


?>
