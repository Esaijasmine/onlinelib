<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lib";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['submit'])) {
    $bookname = $_POST['search'];
    // Perform the search query
    $query = "SELECT * FROM books WHERE bookname LIKE '%$bookname%'";
    $result = mysqli_query($conn, $query);

    // Check if any results were found
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_array($result);
        // Output data for each book found
        if ($row['availability'] == 'available') {
            bookavailable();
        } else {
            booknotavailable();
        }
    } else {
        nobookfound();
    }
}


function nobookfound()
{
echo'<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book NOt Found!</title>
    <link rel="stylesheet" href="boo.css">
	<style>
	.profile img {
            width: 250px;
            height: 250px;
            border-radius: 50%;
            object-fit: cover;
            margin-right: 20px;
        }
        </style>
</head>
<body>
    <div class="success-box">
        <div class="success-message">
             <div class="success-icon">
            <!-- You can replace this with your own SVG or FontAwesome icon -->
            <i class="fas fa-check-circle"></i>
        </div>
		 <!--<div class="profile">
            <img src="book52.jpeg" alt="Profile Picture">
            <div>-->
        <div class="success-message">
		<center>
            <h2>Book NOT Found !</h2>
			</center>
			<div class="profile">
            <img src="book52.jpeg" alt="Profile Picture">
            <div>
			<center>
            <p><i><b><br>Searched book is NOT Found ! !</b></i></p>
			</center>
        </div>
    </div>
    <script>
        setTimeout(function(){window.location.href="homelib.html" },4000);
    </script>
</body>
</html>';
}
function bookavailable()
{
    echo'<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Book Available!</title>
        <link rel="stylesheet" href="boo.css">
		<style>
	.profile img {
            width: 250px;
            height: 250px;
            border-radius: 50%;
            object-fit: cover;
            margin-right: 20px;
        }
        </style>
    </head>
    <body>
        <div class="success-box">
            <div class="success-icon">
                <!-- You can replace this with your own SVG or FontAwesome icon -->
                <i class="fas fa-check-circle"></i>
            </div>
            <div class="success-message">
                <h2><b>Book Available -- ></b></h2>
				</div>
				<div class="profile">
            <img src="book52.jpeg" alt="Profile Picture">
           <div>
            </div>
        </div>
        <script>
            setTimeout(function(){window.location.href="homelib.html" },4000);
        </script>
    </body>
    </html>';
}
function booknotavailable()
{
    echo'<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Book Not Available!</title>
        <link rel="stylesheet" href="boo.css">
		<style>
	.profile img {
            width: 250px;
            height: 250px;
            border-radius: 50%;
            object-fit: cover;
            margin-right: 20px;
        }
        </style>
    </head>
    <body>
        <div class="success-box">
            <div class="success-icon">
                <!-- You can replace this with your own SVG or FontAwesome icon -->
                <i class="fas fa-check-circle"></i>
            </div>
            <div class="success-message">
                <center><h2>Book Not Available . .!</h2></center>
				<div class="profile">
				</div>
            <img src="book52.jpeg" alt="Profile Picture">
          <!-- <div>
				<center>
                <p><i><b>Book Not Available..!</b></i></p>
				</center>
            </div>-->
        </div>
        <script>
            setTimeout(function(){window.location.href="homelib.html" },4000);
        </script>
    </body>
    </html>';
}
?>