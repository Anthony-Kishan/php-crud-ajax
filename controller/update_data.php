<?php

include '../database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST["id"]) && isset($_POST["first_name"]) && isset($_POST["last_name"]) && isset($_POST["contact_number"]) && isset($_POST["address"])) {
    $id = $_POST["id"];
    $stuFName = $_POST["first_name"];
    $stuLName = $_POST["last_name"];
    $contact_number = $_POST["contact_number"];
    $address = $_POST["address"];

    $updatesql = "UPDATE `students` SET id= '{$id}', first_name= '{$stuFName}', last_name= '{$stuLName}', contact_number= '{$contact_number}', address= '{$address}' WHERE id = '$id'";

    if (mysqli_query($conn, $updatesql) === TRUE) {
        echo 1;
    } else {
        echo 0;
    }
}


?>