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
            <div class="row g-3">
                <div class="col-md-6">
                    <div class="border rounded p-3 h-100">
                        <h6 class="text-muted mb-2">Customer Name</h6>
                        <p class="h5 mb-0"><?php echo $row["first_name"] . " " . $row["last_name"]; ?></p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="border rounded p-3 h-100">
                        <h6 class="text-muted mb-2">Contact Number</h6>
                        <p class="h5 mb-0"><?php echo $row["contact_number"]; ?></p>
                    </div>
                </div>
                <div class="col-12">
                    <div class="border rounded p-3">
                        <h6 class="text-muted mb-2">Address</h6>
                        <p class="h5 mb-0"><?php echo $row["address"]; ?></p>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-light btn-lg px-4 close-btn" data-bs-dismiss="modal">Close</button>
                <a href="./controller/customer_more_details.php?id=<?= $row['id']; ?>" type="button"
                    class="btn btn-info btn-lg px-4 more-details-btn" target="_blank">More Details</a>
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