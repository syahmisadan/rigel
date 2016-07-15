<?php
require_once '../model/query.php';

addOrder();

function addOrder()
{
  $data['productname'] = $_POST['productname'];
  $data['productprice'] = $_POST['productprice'];
  $data['productdetail'] = $_POST['productdetail'];

  if(addproduct($data) == TRUE){
    //echo '<script>alert(Data Saved.); </script>';
    header('Location: ../view/product.php');
  }else{
    //$_SESSION["error_msg"] = "Error saving data. Please retry.";
    header('Location: ../view/product.php');
  }
}


?>
