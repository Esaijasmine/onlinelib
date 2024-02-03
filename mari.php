<!DOCTYPE html>
<html>
<head>
 <title>Table with database</title>
<style type="text/css">
 table
 {
	font-family: monospace;
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
   color: black;
   }
 body
{
 height: 130vh;
 width:100%;
 display: flex;
 justify-content: center;
 align-items: center;
 background-image: url("db1.jpg");
  background-size: cover;
}
.neon-button {
    background-color: #333;
    color: #fff;
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
 <th>bid</th>
 <th>bookname</th>
 <th>edition</th>
 <th>author</th>
 <th>availability</th>
 <th>username</th>
 <th>studentid</th>
 <th>issuedate</th>
 <th>duedate</th>
</tr>
<?php
$conn=mysqli_connect("localhost","root","","lib");
if($conn->connect_error)
{
 die("connection failed:".$conn->connect_error);
}
$sql="SELECT bid,bookname,edition,author,availability,username,studentid,issuedate,duedate from books";
$result=$conn->query($sql);
if($result->num_rows>0)
{
while($row=$result->fetch_assoc())
{
 echo "<tr><td>". $row["bid"]. "</td><td>". $row["bookname"]. "</td><td>". $row["edition"]. "</td><td>".  $row["author"]. "</td><td>". $row["availability"]. "</td><td>". $row["username"]. "</td><td>".  $row["studentid"]. "</td><td>". $row["issuedate"]. "</td><td>". $row["duedate"]. "</td></tr>" ;
}
echo "</table>";
}
else
{
 echo "0 result";
}
 $conn->close();
?>  
<center>
<div class="neon-button">
<a href="duu.html" class="neon-button">Go Back </a>
</div>
</center>
</body>
</html>
