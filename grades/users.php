<?php
$jsonFile = 'users.json';
$jsonData = file_get_contents($jsonFile);
$data = json_decode($jsonData, true);

$users = $data['users'] ?? [];

// Registration form processing
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    // Validate the inputs
    // ...

    // Check if the username or email already exists in the database
    // ...

    // Insert the user's details into the database
    // ...

    // Append the new user to the $users array
    $newUser = [
        'username' => $username,
        'password' => $password,
        'email' => $email,
        'role' => 'user'
    ];
    $users[] = $newUser;

    // Update the 'users' field in the data array
    $data['users'] = $users;

    // Convert the updated data back to JSON format
    $jsonData = json_encode($data, JSON_PRETTY_PRINT);

    // Save the updated JSON data to the file
    file_put_contents($jsonFile, $jsonData);

    // Redirect to a success page or display a success message
    // ...
    echo "You have registered successfully: ", $newUser['username'];
}
?>