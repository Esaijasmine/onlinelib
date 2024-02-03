<!DOCTYPE html>
<html>
<head>
 <title>Table with database</title>
<style type="text/css">
 table
 {
	font-family: sans-serif;
	width: 80%;
	font-size: 20px;
	margin-left: 3%;
	margin-bottom: 30%;
 }
 th
 {
     width: 30%;
	 background-color:  #20a0c7;#olive#b3c720
	 color: olive;
 }
 td
 {
   text-align: flex;
   color: #fff;
   }
 body
{
 height: 150vh;
 width:100%;
 display: flex;
 justify-content: center;
 align-items: center;
 background-image: url("dbs2.jpg");
  background-size: cover;
}
.neon-button {
    background-color: #333;
    color: gold;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    font-size: 14px;
    cursor: pointer;
    text-transform: uppercase;
    box-shadow: 0 0 10px rgba(51, 170, 255, 0.5);
    transition: box-shadow 0.10s ease;
}

.neon-button:hover {
    box-shadow: 0 0 20px rgba(51, 170,255, 1);#51, 170,255, 1
}

 </style>
</head>
<body>
<table>
<tr>
 <th>regno</th>
 <th>Username</th>
 <th>Emailid</th>
 <th>Course</th>
 <th>Gender</th>
</tr>
<?php
$conn=mysqli_connect("localhost","root","","lib");
if($conn->connect_error)
{
 die("connection failed:".$conn->connect_error);
}
$sql="SELECT regno,Username,Emailid,Course,Gender from stureg";
$result=$conn->query($sql);
if($result->num_rows>0)
{
while($row=$result->fetch_assoc())
{
 echo "<tr><td>". $row["regno"]. "</td><td>". $row["Username"]. "</td><td>". $row["Emailid"]. "</td><td>".  $row["Course"]. "</td><td>". $row["Gender"]. "</td></tr>" ;
}
echo "</table>";
}
else
{
 echo "0 result";
}
 $conn->close();
?> 
<a href="duu.html" class="neon-button">Go Back </a>
</body>
</html>

