<?php

include 'database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST["contact_number"]) && isset($_POST["address"])) {
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $contact_number = $_POST["contact_number"];
    $address = $_POST["address"];

    if (empty($first_name) || empty($last_name) || empty($contact_number) || empty($address)) {
        echo "Error: Empty inputs";
        exit();
    }

    $sql = "INSERT INTO students(first_name, last_name, contact_number, address) VALUES ('$first_name', '$last_name', '$contact_number', '$address')";

    if (mysqli_query($conn, $sql) === TRUE) {
        echo 1;
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    include 'view/index.view.php';
}

mysqli_close($conn);

?>