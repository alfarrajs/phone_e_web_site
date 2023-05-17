<?php
include 'admin/config.php';

session_start();

$items = [
    'prodId' => $_POST['prodId'],
    'type' => $_POST['type'],

];



$user_session_id = session_id();
$item_id = $items['prodId'];

$sql = "SELECT * FROM tmp_cart WHERE user_lim = ? AND item_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('si', $user_session_id, $item_id);
$stmt->execute();



if ($stmt->fetch()) {

  if($_POST['type'] == "decrement"){

    $conn2 = mysqli_connect("127.0.0.1","root","", "phone_e");
    if (!$conn2) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql2 = "UPDATE tmp_cart SET quantity = quantity - 1 WHERE user_lim = ? AND item_id = ?";
    $stmt2 = $conn2->prepare($sql2);
    $stmt2->bind_param('si', $user_session_id, $item_id);
    $stmt2->execute();


  }elseif($_POST['type'] == "increment"){

    $conn3 = mysqli_connect("127.0.0.1","root","", "phone_e");
    if (!$conn3) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql3 = "UPDATE tmp_cart SET quantity = quantity + 1 WHERE user_lim = ? AND item_id = ?";
    $stmt3 = $conn3->prepare($sql3);
    $stmt3->bind_param('si', $user_session_id, $item_id);
    $stmt3->execute();

    
  }



  $conn5 = mysqli_connect("127.0.0.1", "root", "", "phone_e");
  if (!$conn5) {
    die("Connection failed: " . mysqli_connect_error());
  }
  
  
  $sql5 = "SELECT COUNT(tmp_cart.item_id) AS num_products, 
  SUM(tmp_cart.quantity) AS total_quantity, 
  SUM(products.price * tmp_cart.quantity) AS total_price
  FROM tmp_cart
  JOIN products ON tmp_cart.item_id = products.prod_id 
  WHERE tmp_cart.user_lim = ?";
  
  
  
  $stmt5 = $conn5->prepare($sql5);
  $stmt5->bind_param('s', $user_session_id);
  $stmt5->execute();
  
  $stmt5->bind_result($num_products, $total_quantity, $total_price);
  $stmt5->fetch();


  
  mysqli_close($conn5);

  
  $conn4 = mysqli_connect("127.0.0.1", "root", "", "phone_e");
  if (!$conn4) {
    die("Connection failed: " . mysqli_connect_error());
  }

  $sql4 = "SELECT tmp_cart.quantity * products.price AS prodIdtotal
  FROM tmp_cart 
  JOIN products ON tmp_cart.item_id = products.prod_id
  WHERE tmp_cart.user_lim = ? && tmp_cart.item_id = ?";
  
  
  
  $stmt4 = $conn4->prepare($sql4);
  $stmt4->bind_param('ii', $user_session_id,$item_id);
  $stmt4->execute();
  
  $stmt4->bind_result($prodIdtotal);
  $stmt4->fetch();
  
  
  
  $stmt4->close();
$conn4->close();
  
  
  
  $response = ['success' => true, 'message' => 'تم الاضافة بنجاح', 'count' => $num_products, 'total' => $total_price, 'prodId' => $item_id, 'prodIdtotal' => $prodIdtotal];
  echo json_encode($response);
  
  
  
  
  
  
  mysqli_close($conn);
  




  
  // header('Location:../index.php');
} 

?>