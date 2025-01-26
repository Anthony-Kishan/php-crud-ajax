<?php

include '../database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST["id"])) {
    $id = $_POST["id"];

    $viewsql = "SELECT * FROM `students` WHERE id = '$id'";
    $output = "";
    $result = mysqli_query($conn, $viewsql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <p><strong>First Name: </strong><?= $row["first_name"] ?></p>
            <p><strong>Last Name: </strong><?= $row["last_name"] ?></p>
            <p><strong>Contact Number: </strong><?= $row["contact_number"] ?></p>
            <p><strong>Address: </strong><?= $row["address"] ?></p>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary close-btn" data-bs-dismiss="modal">Close</button>
                <a href="./controller/customer_more_details.php?id=<?= $row['id']; ?>" type="button"
                    class="btn btn-primary more-details-btn" target="_blank">More Details</a>
            </div>
            <?php
        }
    }
    echo $output;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    include '../view/index.view.php';
}

mysqli_close($conn);

?>