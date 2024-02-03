<?php
session_start();
$servername="localhost";
$username="root";
$password="";
$dbname="lib";
$db=new mysqli($servername,$username,$password,$dbname);
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST"){
// Retrieve user input
$username = $_POST['username'];
$password = $_POST['password'];

    // Fetch user from the database
    $query = "SELECT * FROM admlogin WHERE username = '$username' AND password = '$password'";
    $result = $db->query($query);

    if ($result->num_rows>0) {
        // User is authenticated
        $_SESSION['username'] = $username;
		$_SESSION['password'] = $password;
        header("Location:duu.html"); // Redirect to a dashboard or welcome page
        exit();
    } else {
        // Authentication failed
		echo "Invalid username or password.";
		header("Location:userinvalid2.html");
		exit();
    }
}
?>
