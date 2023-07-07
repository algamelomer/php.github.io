<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<form action="admin.php" method="POST">
  <input type="text" name="username" placeholder="Username">
  <input type="password" name="password" placeholder="Password">
  <button type="submit">Log In</button>
</form>



<?php
session_start();

$jsonFile = 'grades/users.json';
$jsonData = file_get_contents($jsonFile);
$data = json_decode($jsonData, true);

$users = $data['users'] ?? [];

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  // Retrieve the submitted username and password
  $username = $_POST["username"];
  $password = $_POST["password"];

  // Validate the username and password (you can replace this with your own validation logic)
  foreach($users as $users){
  if (($username === $users['username']||$username === $users['email']) && $password === $users['password'] && $users['role'] === "admin") {
    // Store the logged-in user in the session
    $_SESSION["user"] = $username;

    // Redirect to a logged-in page
    header("Location: grades/grades.php");
    exit();}
  } /*else {
    // Invalid credentials, redirect back to the login form
    header("Location: admin.php");
    exit();
  }*/
}
?>

</body>
</html>
