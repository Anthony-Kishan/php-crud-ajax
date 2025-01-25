<?php
include '../database.php';

// Ensure database connection exists
if (!$conn) {
    die("Database connection failed!");
}

// Set headers for Excel file
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment; filename="data.xls"');
header('Pragma: no-cache');
header('Expires: 0');

// Start XML file for Excel
echo '<?xml version="1.0"?>';
echo '<?mso-application progid="Excel.Sheet"?>';
echo '<Workbook xmlns="urn:schemas-microsoft-com:office:spreadsheet" 
                xmlns:o="urn:schemas-microsoft-com:office:office" 
                xmlns:x="urn:schemas-microsoft-com:office:excel" 
                xmlns:ss="urn:schemas-microsoft-com:office:spreadsheet">';

echo '<Worksheet ss:Name="Sheet1">';
echo '<Table>';

// Add column headers
echo '<Row>';
echo '<Cell><Data ss:Type="String">First Name</Data></Cell>';
echo '<Cell><Data ss:Type="String">Last Name</Data></Cell>';
echo '</Row>';

// Fetch data from the database
$sql = "SELECT first_name, last_name FROM students";
$result = mysqli_query($conn, $sql);

if ($result && mysqli_num_rows($result) > 0) {
    // Add rows for each student
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<Row>';
        echo '<Cell><Data ss:Type="String">' . htmlspecialchars($row['first_name']) . '</Data></Cell>';
        echo '<Cell><Data ss:Type="String">' . htmlspecialchars($row['last_name']) . '</Data></Cell>';
        echo '</Row>';
    }
} else {
    // If no data, add a row indicating no results
    echo '<Row>';
    echo '<Cell><Data ss:Type="String">No data found</Data></Cell>';
    echo '</Row>';
}

// Close XML tags
echo '</Table>';
echo '</Worksheet>';
echo '</Workbook>';
?>