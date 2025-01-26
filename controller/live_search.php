<?php

include '../database.php';

$search_value = $_POST["search"];

$sql = "SELECT * FROM students WHERE first_name LIKE '%{$search_value}%' OR last_name LIKE '%{$search_value}%' OR contact_number LIKE '%{$search_value}%' ";

$result = mysqli_query($conn, $sql);

$output = "";

if (mysqli_num_rows($result) > 0) {
    ?>
    <table class='table table-dark table-striped table-hover'>
        <tr>
            <th class='align-content-center' style='width:  5.33%'>ID</th>
            <th class='align-content-center'>Name</th>
            <th class='align-content-center'>Contact Number</th>
            <th class='align-content-center'>Address</th>

            <th class='text-center'>
                <div class='btn-group '>
                    <button type='button' class='btn btn-warning csv-btn' name='csv'>CSV</button>

                    <button type='button' class='btn btn-warning dropdown-toggle dropdown-toggle-split'
                        data-bs-toggle='dropdown' aria-expanded='false'>
                        <span class='visually-hidden'>Toggle Dropdown</span>
                    </button>
                    <ul class='dropdown-menu'>
                        <li><a class='dropdown-item xlsx-btn' name='xlsx' href='javascript:void(0)'>XLSX</a></li>
                        <li><a class='dropdown-item pdf-btn' name='pdf' href='javascript:void(0)'>PDF</a></li>
                    </ul>
                </div>
            </th>
        </tr>
        <?php

        while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <tr>
                <td class='align-content-center' style='width:  5.33%'>
                    <?= $row["id"] ?>
                </td>
                <td class='align-content-center'>
                    <?= $row["first_name"] . ' ' . $row["last_name"] ?>
                </td>
                <td class='align-content-center'>
                    <?= $row["contact_number"] ?>
                </td>
                <td class='align-content-center'>
                    <?= $row["address"] ?>
                </td>
                <td class='text-center align-content-center' style='width:  8.33%'>
                    <div class='dropdown'>
                        <a class='btn btn-secondary dropdown-toggle' href='javascript:void(0)' role='button'
                            id='dropdownMenuLink' data-bs-toggle='dropdown' aria-expanded='false'>
                            Action
                        </a>

                        <ul class='dropdown-menu bg-dark text-center' aria-labelledby='dropdownMenuLink'>
                            <li><button class='btn btn-success view-btn mb-1' data-id='<?= $row["id"] ?>'>View</button></li>
                            <li><button class='btn btn-primary update-btn mb-1' data-id='<?= $row["id"] ?>'>Update</button></li>
                            <li><button class='btn btn-danger delete-btn mb-1' data-id='<?= $row["id"] ?>'>Delete</button></li>
                        </ul>
                    </div>
                </td>
            </tr>
            <?php
        }

        mysqli_close($conn);

        echo $output;

} else {
    echo "No record found.";
}









?>