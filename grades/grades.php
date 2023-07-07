<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION["user"])) {
    // Redirect to the login page if not logged in
    header("Location: ../admin.php");
    exit();
}

require 'SimpleXLSX.php';

use Shuchkin\SimpleXLSX;

// Check if a file was uploaded
if (isset($_FILES['file']) && $_FILES['file']['error'] === UPLOAD_ERR_OK) {
    $inputFileName = $_FILES['file']['tmp_name'];
} else {
    $inputFileName = 'it.xlsx'; // Replace "path/to/file.xlsx" with the actual path to your Excel file
}

if ($xlsx = SimpleXLSX::parse($inputFileName)) {
    $rows = $xlsx->rows();
    
    // Convert to CSV and save as a file
    $csvFile = 'it.csv';
    $csvHandle = fopen($csvFile, 'w');
    foreach ($rows as $row) {
        fputcsv($csvHandle, $row);
    }
    fclose($csvHandle);
} 
// else {
//     echo SimpleXLSX::parseError();
// }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>IT</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../master.css">
    <style>
        table {
            border-collapse: collapse;
        }

        table td,
        table th {
            border: 1px solid black;
            padding: 5px;
        }

        .button-container {
            margin-top: 10px;
        }
    </style>
</head>
<body>
<fieldset>
    <header class="head" style="felx">
        <img src="../logo.png" alt="logo">
        <h3>Borg Al-Arab Technological University</h3>
    </header>
</fieldset>
<form action="logout.php" method="POST">
  <button type="submit">Logout</button>
</form>
<div class="department">
    <h4><b>IT Department:</b></h4>
</div>

<form method="POST" enctype="multipart/form-data" action="grades.php">
    <label for="file">Select a file:</label>
    <input type="file" name="file" id="file">
    <button type="submit">Upload</button>
</form>

<hr>
<?php
$file = fopen("it.csv","r");


?>
<table>
    <?php while (!feof($file)) : ?>
        <tr>
            <?php $row = fgetcsv($file); ?>
            <?php if (is_array($row)) : ?>
                <?php foreach ($row as $value) : ?>
                    <td>
                        <?= htmlspecialchars($value) ?>
                    </td>
                <?php endforeach; ?>
            <?php endif; ?>
        </tr>
    <?php endwhile; ?>
</table>


</body>
</html>
