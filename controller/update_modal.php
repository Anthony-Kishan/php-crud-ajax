<?php
include '../database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST["id"])) {
    $id = $_POST["id"];

    $show_datasql = "SELECT * FROM `students` WHERE id = '$id'";

    $result = mysqli_query($conn, $show_datasql);
    $output = "";

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $output .= "
                <form>
                    First Name: <input type='text' id='update_f_name' name='update_f_name' class='form-control'
                        value='{$row["first_name"]}'>
                    <input type='text' id='save_changes_id' name='update_f_name' hidden class='form-control' value='{$row["id"]}'>

                    Last Name: <input type='text' id='update_l_name' name='update_l_name' class='form-control'
                        value='{$row["last_name"]}'>
                </form>";
        }
    }
    echo $output;
}




?>