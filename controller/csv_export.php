<?php
include '../database.php';

header(header: 'Content-Type: application/text/csv');
header('Content-Disposition: attachment; filename="data.csv"');
header("Pragma: no-cache");
header("Expires: 0");

$sql = "SELECT * FROM students";
$result = mysqli_query($conn, query: $sql);


if (mysqli_num_rows($result) > 0) {
    if ($result) {
        $output = fopen('php://output', 'w');

        $fieldNames = [];
        $columns = mysqli_fetch_fields($result);

        foreach ($columns as $column) {
            $fieldNames[] = $column->name;
        }

        fputcsv($output, $fieldNames);

        foreach ($result as $row) {
            fputcsv($output, $row);
        }

        fclose($output);
        exit;
    }

} else {
    echo "No data found";
}
?>