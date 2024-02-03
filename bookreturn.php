<?php
$conn = new mysqli("localhost","root","","lib");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
 }
if(isset($_POST['submit'])){
    $bid=$_POST['bid'];
    $sql = "update books set username=null,studentid=null,issuedate=null,duedate=null,availability='available' where bid=$bid";
    $result = $conn->query($sql);
    if($result){
        returnbooksuccess();
    }
    else{
        returnbookfail();
    }
}



?>


<?php
function returnbooksuccess(){
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Return Successfully!</title>
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
		<div class="profile">
            <img src="book52.jpeg" alt="Profile Picture">
            <div>
        <div class="success-message">
            <h2>Return Successfully! !</h2>
			<center>
            <p><i><b> <br>Thank you for Returning the book.</b></i></p>
			</center>
        </div>
    </div>
    <script>
        setTimeout(function(){window.location.href="duu.html" },2000);
    </script>
</body>
</html>

<?php
}
?>



<?php
function returnbookfail(){
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Return Failed!</title>
    <link rel="stylesheet" href="boo.css">
</head>
<body>
    <div class="success-box">
        <div class="success-icon">
            <!-- You can replace this with your own SVG or FontAwesome icon -->
            <i class="fas fa-check-circle"></i>
        </div>
        <div class="success-message">
            <h2>Return Failed!</h2>
            <p><i><b> <br>Something Went Wrong Please Try Again Later</b></i></p>
        </div>
    </div>
    <script>
        setTimeout(function(){window.location.href="duu.html" },2000);
    </script>
</body>
</html>

<?php
}
?>
