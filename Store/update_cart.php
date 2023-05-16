<?php

// Check if the request method is POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the prod_id and quantity parameters from the POST request
    $prod_id = $_POST['prod_id'];
    $quantity = $_POST['quantity'];
   
    // Update the cart quantity in the database
    $conn = mysqli_connect('localhost', 'root', '', 'phone_e');
    $sql = "UPDATE tmp_cart SET quantity = $quantity WHERE prod_id = $prod_id";
    $result = mysqli_query($conn, $sql);

    // If the query was successful, calculate the new total price and return it
    if ($result) {
        $sql = "SELECT * FROM tmp_cart, products WHERE products.prod_id = tmp_cart.prod_id AND tmp_cart.prod_id = $prod_id";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        $total_price = $row['price_after'] * $row['quantity'];
        $response = array('success' => true, 'totalPrice' => $total_price);
        echo json_encode($response);

        // Print the total price
        echo 'Total Price: ' . $total_price;
    } else {
        // If the query failed, return an error message
        $response = array('success' => false, 'message' => 'Failed to update cart quantity.');
        echo json_encode($response);
    }

    // Close the database connection
    mysqli_close($conn);
}

?>