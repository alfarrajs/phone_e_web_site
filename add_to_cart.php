<?php
include 'admin/config.php';

session_start();

$items = [
    'id' =>$_POST['prod_id'],
    'name' => $_POST['name'],
    'price' => $_POST['price_after'],
    'quantity'=>1

];

$_SESSION['cart'][] = $items;


// Insert the item into the temporary cart table
// Prepare the SQL query
$item_id = $items['id'];
$item_quantity = $items['quantity'];
 $user_session_id = session_id();

$sql = "SELECT * FROM tmp_cart WHERE user_lim = ? AND item_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('si', $user_session_id, $item_id);
$stmt->execute();
$conn2 = mysqli_connect("127.0.0.1","root","", "phone_e");
if (!$conn2) {
    die("Connection failed: " . mysqli_connect_error());
}

$conn3 = mysqli_connect("127.0.0.1","root","", "phone_e");
if (!$conn3) {
    die("Connection failed: " . mysqli_connect_error());
}
// Check if a row with the same user_lim and item_id exists
if ($stmt->fetch()) {
  // If a row exists, update the quantity column
  $sql2 = "UPDATE tmp_cart SET quantity = quantity + ? WHERE user_lim = ? AND item_id = ?";
  $stmt2 = $conn2->prepare($sql2);
  $stmt2->bind_param('isi', $item_quantity, $user_session_id, $item_id);
  $stmt2->execute();
//   header('Location:../index.php');
} else {
  // If a row does not exist, insert a new row
  $sql3 = "INSERT INTO tmp_cart (user_lim, item_id, quantity, created_at) VALUES (?, ?, ?, NOW())";
  $stmt3 = $conn3->prepare($sql3);
  $stmt3->bind_param('sii', $user_session_id, $item_id, $item_quantity);
  $stmt3->execute();
}

echo "تم الاضافة لسلة بنجاح";

?>