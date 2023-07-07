<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['file'])) {
    $uploadedFile = $_FILES['file'];

    $tempFilePath = $uploadedFile['tmp_name'];
    $originalFileName = $uploadedFile['name'];

    // Specify the new filename and destination path
    $newFileName = 'it.xlsx';
    $newFilePath = '' . $newFileName;

    // Move the uploaded file to the new location with the new name
    if (move_uploaded_file($tempFilePath, $newFilePath)) {
        // File upload success
        echo "File uploaded and renamed successfully.";
    } else {
        // File upload failed
        echo "Error moving the uploaded file.";
    }
}
?>
