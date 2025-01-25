<?php
include '../database.php';

$sql = 'SELECT * FROM students';

$result = mysqli_query($conn, $sql);

$output = "";

if (mysqli_num_rows($result) > 0) {
    $output = "
    <table class='table table-dark table-striped table-hover'>
        <tr>
            <th class='align-content-center'>ID</th>
            <th class='align-content-center'>Name</th>
            
            <th class='text-center'>
                <div class='btn-group '>
                <button type='button' class='btn btn-warning csv-btn' name='csv'>CSV</button>

                <button type='button' class='btn btn-warning dropdown-toggle dropdown-toggle-split' data-bs-toggle='dropdown' aria-expanded='false'>
                    <span class='visually-hidden'>Toggle Dropdown</span>
                </button>
                <ul class='dropdown-menu'>
                    <li><a class='dropdown-item xlsx-btn' name='xlsx' href='javascript:void(0)'>XLSX</a></li>
                    <li><a class='dropdown-item pdf-btn' name='pdf' href='javascript:void(0)'>PDF</a></li>
                </ul>
                </div>
            </th>
        </tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        $output .= "
        <tr>
            <td class='align-content-center'>
                {$row["id"]}
            </td>
            <td class='align-content-center'>
                {$row["first_name"]} {$row["last_name"]}
            </td>
            <td class='text-center align-content-center' style='width:  8.33%'>
                <div class='dropdown'>
                    <a class='btn btn-secondary dropdown-toggle' href='javascript:void(0)' role='button' id='dropdownMenuLink' data-bs-toggle='dropdown' aria-expanded='false'>
                        Action
                    </a>

                    <ul class='dropdown-menu bg-dark text-center' aria-labelledby='dropdownMenuLink'>
                        <li><button class='btn btn-success view-btn mb-1' data-id='{$row["id"]}'>View</button></li>
                        <li><button class='btn btn-primary update-btn mb-1' data-id='{$row["id"]}'>Update</button></li>
                        <li><button class='btn btn-danger delete-btn mb-1' data-id='{$row["id"]}'>Delete</button></li>
                    </ul>
                </div>
            </td>
        </tr>";
    }

    $output .= "</table>";

    mysqli_close($conn);

    echo $output;

} else {
    echo "No record found.";
}

?>