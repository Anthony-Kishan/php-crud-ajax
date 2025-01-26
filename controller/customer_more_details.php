<?php
include '../database.php';

if ($_GET["id"]) {
    $id = $_GET["id"];

    $sql = "SELECT * FROM students WHERE id= '$id'";
    $result = mysqli_query($conn, $sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

    } else {
        echo "Student not found.";
        exit;
    }
} else {
    echo "No student selected for editing.";
    exit;
}

include '../view/customer_more_details.view.php';

mysqli_close($conn);
?>