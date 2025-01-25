<?php
include '../database.php';

header(header: 'Content-Type: application/text/csv');
header('Content-Disposition: attachment; filename="data.csv"');
header("Pragma: no-cache");
header("Expires: 0");

$sql = "SELECT * FROM students";
$result = mysqli_query($conn, query: $sql);

echo "First Name, Last Name,\n";

if (mysqli_num_rows($result) > 0) {
    if ($result) {
        while ($rows = $result->fetch_assoc()) {
            echo "{$rows['first_name']},{$rows['last_name']},\n";
        }
    }

} else {
    echo "No data found";
}
?>