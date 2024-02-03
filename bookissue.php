<?php
$conn = new mysqli("localhost","root","","lib");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
 }
if(isset($_POST['submit'])){
    $bid=$_POST['bid'];
    $duedate=$_POST['duedate'];
    $issuedate=$_POST['issuedate'];
    $studentid=$_POST['studentid'];
    $sql = "select username from stureg where regno=$studentid";
    $result = $conn->query($sql);
    //membership checking
    if(mysqli_num_rows($result)!=0){
    $rows=$result->fetch_assoc();
    $Username=$rows['username'];
    $sql = "update books set username='$Username',studentid=$studentid,issuedate='$issuedate',duedate='$duedate',availability='notavailable' where bid=$bid";
    $result = $conn->query($sql);
    if($result){
        issuebooksuccess();
    }
    else{
        issuebookfail();
    }
}
//if not a member
else{
    notamember();
}
}

?>


<?php
function issuebooksuccess(){
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Issued Successfully!</title>
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
            <h2>Issued Successfully!</h2>
			<center>
            <p><i><b> <br>Thank you for issuing the book.</b></i></p>
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
function issuebookfail(){
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Issued Failed!</title>
    <link rel="stylesheet" href="boo.css">
</head>
<body>
    <div class="success-box">
        <div class="success-icon">
            <!-- You can replace this with your own SVG or FontAwesome icon -->
            <i class="fas fa-check-circle"></i>
        </div>
        <div class="success-message">
            <h2>Issued Failed!</h2>
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


<?php
function notamember(){
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create A account</title>
    <link rel="stylesheet" href="boo.css">
</head>
<body>
    <div class="success-box">
        <div class="success-icon">
            <!-- You can replace this with your own SVG or FontAwesome icon -->
            <i class="fas fa-check-circle"></i>
        </div>
        <div class="success-message">
            <h2>Not A Member!</h2>
            <p><i><b> <br>Please Create A Account... </b></i></p>
        </div>
    </div>
    <script>
        setTimeout(function(){window.location.href="register.html" },2000);
    </script>
</body>
</html>

<?php
}
?>