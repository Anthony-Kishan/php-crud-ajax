<?php
include '../database.php';

$sql = 'SELECT * FROM students';

$result = mysqli_query($conn, $sql);

$output = "";

if (mysqli_num_rows($result) > 0) {
    $output = "
    <table class='table table-dark table-striped'>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th class='text-center'>Action</th>
        </tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        $output .= "
        <tr>
            <td>
                {$row["id"]}
            </td>
            <td>
                {$row["first_name"]} {$row["last_name"]}
            </td>
            <td class='text-center'>
                <button class='btn btn-success view-btn' data-id='{$row["id"]}'>View</button>
                <button class='btn btn-primary update-btn' data-id='{$row["id"]}'>Update</button>
                <button class='btn btn-danger delete-btn' data-id='{$row["id"]}'>Delete</button>
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