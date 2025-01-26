<?php

include 'database.php';

if (
    $_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST["contact_number"]) && isset($_POST["address"]) && isset($_POST['phone_number_1']) && isset($_POST['phone_number_2']) && isset($_POST["category"]) && isset($_POST["warranty_guarantee_start"]) && isset($_POST['warranty_guarantee_end']) && isset($_POST['product_quantity']) && isset($_POST["product_price"]) && isset($_POST["note"])
) {
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $contact_number = $_POST["contact_number"];
    $address = $_POST["address"];
    $phone_number_1 = $_POST["phone_number_1"];
    $phone_number_2 = $_POST["phone_number_2"];
    $category = $_POST["category"];
    $warranty_guarantee_start = $_POST["warranty_guarantee_start"];
    $warranty_guarantee_end = $_POST["warranty_guarantee_end"];
    $product_quantity = $_POST["product_quantity"];
    $product_price = $_POST["product_price"];
    $note = $_POST["note"];

    if (empty($first_name) || empty($last_name) || empty($contact_number) || empty($address) || empty($phone_number_1) || empty($phone_number_2) || empty($category) || empty($warranty_guarantee_start) || empty($warranty_guarantee_end) || empty($product_quantity) || empty($product_price)) {
        echo "Error: Empty inputs";
        exit();
    }

    $sql = "INSERT INTO students(first_name, last_name, contact_number, address, phone_number_1, phone_number_2, category, warranty_guarantee_start, warranty_guarantee_end, product_quantity, product_price, note) VALUES ('$first_name', '$last_name', '$contact_number', '$address', '$phone_number_1', '$phone_number_2', '$category', '$warranty_guarantee_start', '$warranty_guarantee_end', '$product_quantity', '$product_price', '$note')";

    if (mysqli_query($conn, $sql)) {
        echo 1;
    } else {
        echo "Error: " . $conn->error;
    }
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    include 'view/index.view.php';
}

mysqli_close($conn);

?>