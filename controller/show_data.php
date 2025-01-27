<?php
include '../database.php';

$sql = 'SELECT * FROM students';

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    ?>
    <table class='table table-hover mb-0'>
        <thead class="table-light">
            <tr>
                <h5 class="mb-0">Customer List</h5>

                <th scope="col" class="fw-semibold" style='width:  5.33%'>ID</th>
                <th scope="col" class="fw-semibold">Name</th>
                <th scope="col" class="fw-semibold">Contact Number</th>
                <th scope="col" class="fw-semibold">Address</th>

                <th class='text-center'>
                    <div class='btn-group' style="width: 7rem">
                        <button type='button' class='btn btn-warning csv-btn' name='csv'><i
                                class="fas fa-file-csv me-2"></i>CSV</button>

                        <button type='button' class='btn btn-warning dropdown-toggle dropdown-toggle-split'
                            data-bs-toggle='dropdown' aria-expanded='false'>
                            <span class='visually-hidden'>Toggle Dropdown</span>
                        </button>
                        <ul class='dropdown-menu'>
                            <li><a class='dropdown-item xlsx-btn' name='xlsx' href='javascript:void(0)'><i
                                        class="fa-solid fa-file-lines me-2"></i>XLSX</a></li>
                            <li><a class='dropdown-item pdf-btn' name='pdf' href='javascript:void(0)'><i
                                        class="fa-solid fa-file-pdf me-2"></i>PDF</a></li>
                        </ul>
                    </div>
                </th>
            </tr>
        </thead>


        <?php
        $sl = 0;
        while ($row = mysqli_fetch_assoc($result)) {
            $sl++;
            ?>
            <tr>
                <td class='align-content-center' style='width:  5.33%'>
                    <?= $sl ?>
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
                <td class='text-center align-content-center' style='width:  5.33%'>
                    <div class="d-flex gap-2 justify-content-end">
                        <button class='btn btn-sm btn-info view-btn' data-id='<?= $row["id"] ?>' data-bs-toggle="modal"
                            data-bs-target="#view-modal"><i class="fas fa-eye"></i></button>
                        <button class='btn btn-sm btn-primary update-btn' data-id='<?= $row["id"] ?>' data-bs-toggle="modal"
                            data-bs-target="#update-modal"><i class="fas fa-edit"></i></button>
                        <button class='btn btn-sm btn-danger delete-btn' data-id='<?= $row["id"] ?>'><i
                                class="fas fa-trash"></i></button>
                    </div>
                </td>
            </tr>

            <?php
        }
        mysqli_close($conn);
} else { ?>
        <h2>No record found.</h2>
        <?php
}

?>