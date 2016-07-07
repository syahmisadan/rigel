<?php
require_once '../model/query.php';

addOrder();

function addOrder()
{
  $data['ordername'] = $_POST['ordername'];
  $data['product'] = $_POST['product'];
  $data['orderquantity'] = $_POST['orderquantity'];
  $data['orderamount'] = $_POST['orderamount'];
  $data['typepayment'] = $_POST['typepayment'];
  $data['orderstatus'] = 'new';

  if(insertOrder($data) == TRUE){
    //echo '<script>alert(Data Saved.); </script>';
    header('Location: ../view/order.php');
  }else{
    //$_SESSION["error_msg"] = "Error saving data. Please retry.";
    header('Location: ../view/order.php');
  }
}


?>
