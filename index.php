<?php

include 'database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['first_name']) && isset($_POST['last_name'])) {
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];

    if (empty($first_name) || empty($last_name)) {
        echo "Error: Empty inputs";
        exit();
    }

    $sql = "INSERT INTO students(first_name, last_name) VALUES ('$first_name', '$last_name')";

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