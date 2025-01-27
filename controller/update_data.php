<?php

include '../database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST["contact_number"]) && isset($_POST["address"]) && isset($_POST['phone_number_1']) && isset($_POST['phone_number_2']) && isset($_POST["category"]) && isset($_POST["warranty_guarantee_start"]) && isset($_POST['warranty_guarantee_end']) && isset($_POST['product_quantity']) && isset($_POST["product_price"]) && isset($_POST["note"])) {
    $id = $_POST["id"];
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

    $updatesql = "UPDATE `students` SET first_name= '{$first_name}', last_name= '{$last_name}', contact_number= '{$contact_number}', address= '{$address}', phone_number_1= '{$phone_number_1}', phone_number_2= '{$phone_number_2}', category= '{$category}', warranty_guarantee_start= '{$warranty_guarantee_start}', warranty_guarantee_end= '{$warranty_guarantee_end}', product_quantity= '{$product_quantity}', product_price= '{$product_price}', product_price= '{$product_price}', note= '{$note}' WHERE id = '$id'";

    if (mysqli_query($conn, $updatesql) === TRUE) {
        echo 1;
    } else {
        echo 0;
    }
}


?>