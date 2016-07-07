<?php
require_once 'connection.php';

// --------------- Insert part -----------------

function insertAccount($data){
  global $conn;

  extract($data);
  $sql = "INSERT INTO account VALUES ('', '$amount', '$title ', '$type', '$date')";
  if($conn->query($sql)){
    $_SESSION['success_msg'] = "Data saved!.";
    return TRUE;
  }else{
    return FALSE;
  }
}

function insertOrder($data){
  global $conn;

  extract($data);
  $sql = "INSERT INTO orders VALUES ('', '$ordername', '$orderamount', '$orderquantity',
  '$typepayment', '$orderstatus', NOW(), '$product')";

  if($conn->query($sql)){
    $_SESSION['success_msg'] = "Data saved!.";
    return TRUE;
  }else{
    return FALSE;
  }
}

// --------------------- view part ------------------------

function viewAccountDebit(){
  global $conn;
  $sql = "SELECT * FROM account WHERE type='debit' ORDER BY accountid DESC";
  $result = $conn->query($sql);

  if ($result->num_rows >= 0) {
    return $result;
  } else {
    return false;
  }
}

function viewAccountKredit(){
  global $conn;
  $sql = "SELECT * FROM account WHERE type='kredit' ORDER BY accountid DESC";
  $result = $conn->query($sql);

  if ($result->num_rows >= 0) {
    return $result;
  } else {
    return false;
  }
}

function showPayment(){
  global $conn;
  $sql = "SELECT paymenttype FROM typepayment ORDER BY paymentid DESC";
  $result = $conn->query($sql);

  if ($result->num_rows >= 0) {
    return $result;
  } else {
    return false;
  }
}

function showProduct(){
  global $conn;
  $sql = "SELECT * FROM product ORDER BY productid DESC";
  $result = $conn->query($sql);

  if ($result->num_rows >= 0) {
    return $result;
  } else {
    return false;
  }
}

function viewOrderList(){
  global $conn;
  $sql = "SELECT * FROM orders ORDER BY orderid DESC";
  $result = $conn->query($sql);

  if ($result->num_rows >= 0) {
    return $result;
  } else {
    return false;
  }
}
?>
