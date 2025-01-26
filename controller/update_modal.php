<?php
include '../database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST["id"])) {
    $id = $_POST["id"];

    $show_datasql = "SELECT * FROM `students` WHERE id = '$id'";

    $result = mysqli_query($conn, $show_datasql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <form>
                First Name: <input type='text' id='update_f_name' name='update_f_name' class='form-control'
                    value='<?= $row["first_name"] ?>'>
                <input type='text' id='save_changes_id' name='update_f_name' hidden class='form-control' value='<?= $row["id"] ?>'>
                Last Name: <input type='text' id='update_l_name' name='update_l_name' class='form-control'
                    value='<?= $row["last_name"] ?>'>

                Contact Number: <input type='text' id='update_contact_number' name='update_contact_number' class='form-control'
                    value='<?= $row["contact_number"] ?>'>

                Address: <input type='text' id='update_address' name='update_address' class='form-control'
                    value='<?= $row["address"] ?>'>
            </form>
            <?php
        }
    }
}




?>