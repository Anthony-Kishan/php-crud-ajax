<?php

include '../database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST["id"])) {
    $id = $_POST["id"];

    $viewsql = "SELECT * FROM `students` WHERE id = '$id'";
    $output = "";
    $result = mysqli_query($conn, $viewsql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $output .= "
                <p>First Name: {$row["first_name"]}</p>
                <p>Last Name: {$row["last_name"]}</p>";
        }
    }
    echo $output;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    include '../view/index.view.php';
}

mysqli_close($conn);

?>