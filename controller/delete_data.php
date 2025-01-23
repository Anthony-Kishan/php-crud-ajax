<?php

include '../database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST["id"])) {
    $id = $_POST["id"];

    $deletesql = "DELETE FROM `students` WHERE id = '$id'";

    if (mysqli_query($conn, $deletesql) === TRUE) {
        echo 1;
    } else {
        echo 0;
    }
}


?>