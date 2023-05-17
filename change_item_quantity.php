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

    echo "تم الاضافة لسلة بنجاح";

  }elseif($_POST['type'] == "increment"){

    $conn3 = mysqli_connect("127.0.0.1","root","", "phone_e");
    if (!$conn3) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql3 = "UPDATE tmp_cart SET quantity = quantity + 1 WHERE user_lim = ? AND item_id = ?";
    $stmt3 = $conn3->prepare($sql3);
    $stmt3->bind_param('si', $user_session_id, $item_id);
    $stmt3->execute();

    echo "تم الاضافة لسلة بنجاح";
    
  }
  // header('Location:../index.php');
} 

?>