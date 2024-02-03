
<!DOCTYPE html>
<html lang="en">
<head>  
<title> Issue Books</title>
<style>
    *{
    box-sizing: border-box
}
body{
    font-family: 'Nunito', sans-serif;
    max-height: 100vh;
    overflow: auto;
     background: linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6));
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
}
h2{
    text-align: center;
    line-height: 20px;
    color: #fff;
}
.data-list{
    display: flex;
    justify-content: space-around;
    padding: 20px;
    color: #fff;
}
.data-list label{
    font-size: 18px;
    font-weight: 900;
}
.data-list input,select{
    padding: 7px;
    font-size: 16px;
    border-radius: 4px;
    border: 1px #ccc solid;
    outline:none;
    width: 50%;
}
.data-list select option{
    margin: 10px;
}
.filter-action,.filter-container{
    display: flex;
    justify-content: space-around;
    /* border: 2px solid blue; */
    flex: 1;
}
.filter-container{
    display: flex;
}
.filter-container button, .filter-action button{
    height: 40px;
    width: 100px;
    border: none;
    text-align: center;
    cursor: pointer;
    font-size: 18px;
    color: var(--white);
    background: #2bff00;
    padding: 10px;
    border-radius: 4px;
}
.print_data{
    height: 40px;
    width: 150px;
    border: none;
    text-align: center;
    cursor: pointer;
    font-size: 18px;
    color: #fff;
    background: #1e90ff;
    padding: 10px;
    border-radius: 4px;
}
table {
    border-collapse: collapse;
    border-spacing: 0;
    width: 100%;
    border: 1px solid #ddd;
  }
  
  th, td {
    text-align: left;
    padding: 8px;
  }
  
  tr:nth-child(even){background-color: #f2f2f2}
  tr:nth-child(odd){
      background-color: #000;
      color: #fff;
}
.issuebtn{
    outline: none;
    border:1px solid #a3f179;
    background-color: #a3f179;
    color: white;
    border-radius: 5px;
    cursor: pointer;
}

.spanningbox{
    position: absolute;
    min-width: 50%;
    left: 25%;
    top: 20%;
    background-color: cornsilk;
    box-shadow: 10px 10px 10px #bababa;
    display: none;
}
.input-group{
    padding:10px;
    margin: 10px;

}
.input-group input[type="text"]{
    display: block;
    margin-top: 10px;
    padding: 5px;
    border-radius: 3px;
    width: 50%;
}
.input-group button{
    width: 90%;
    margin-left: 5%;
    padding: 6px;
    outline: none;
    border:1px solid #a3f179;
    background-color: #a3f179;
    color: white;
    border-radius: 5px;
    cursor: pointer;
}

.spanningbox img{
    position: relative;
    top: 5px;
    right:10px;
    cursor: pointer;
    float: right;
}

</style>
    </head>
<body>

    <?php 
   $conn = new mysqli("localhost","root","","lib");
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
         }
        if (isset($_POST['search'])){
            $search_str = $_POST['search_str'];
            $sql = "SELECT * FROM books where bookname like '%$search_str%' and availability='notavailable'";
            $result = $conn->query($sql) or die($conn->error);
        }
        else{
            $sql = " SELECT * FROM books where availability='notavailable'";
            $result = $conn->query($sql);

        }
        $conn->close();

    ?>

<h2>Book Return</h2>
    <form action="" class="data-list" method="post">
        
        <div class="filter-container" id="filter-container">
            <label for="filter-input"> Enter Book Name:</label>
            <input type="text" name="search_str" id="filter-input" required>
            <button type="submit"name="search"> Search</button>
        </div>
    </form>


<div style="overflow-x:auto;">
  <table>
    <tr>
    <th>id</th>
      <th>Book Name</th>
      <th>Edition</th>
      <th>Author</th>
      <th>Availabity</th>
      <th>Issue</th>
    </tr>


    <!-- PHP CODE TO FETCH DATA FROM ROWS -->
                <!-- // LOOP TILL END OF DATA -->
    <?php
        while($rows=$result->fetch_assoc()){
                
    ?>
        <tr>
    
            <td><?php echo $rows['bid'] ?></td>
            <td><?php echo $rows['bookname'] ?></td>
            <td><?php echo $rows['edition'] ?></td>

    
            <td><?php echo $rows['author'] ?></td>                 
            <td><?php echo $rows['availability']; ?></td>
            <td><button class="issuebtn" name="submit" onclick="eventhandler(this)" value="<?php  echo $rows['bid']?>" bname="<?php echo $rows['bookname'] ?>" >Return</button></td>
        </tr>
<?php
        }//end while
    
?>
</table>

</div>
<!-- aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa-->
<div class="spanningbox">
    <img src="./icons8-close-16.png" onclick="hidebox()">
    <form action="bookreturn.php"  method="post">
    <input type="hidden" name="bid" value="" id="bid">
    <div class="input-group">
    <label for="bookname">Book Name</label>
    <input type="text" name="bookname" id="bookname" readonly >
    </div>
    <div class="input-group">
    <button class="issuebtn1" name="submit"> Issue</button>
    </div>
    
        </form>
    </div>
<script>
    const spanningbox = document.querySelector(".spanningbox");
    const formelement = document.querySelector(".spanningbox form");
    const bidelement = document.querySelector("#bid");
    const booknameelement = document.querySelector("#bookname");
    
    function eventhandler(obj){
        //show box
        spanningbox.style.display = "block";
        var bid = obj.value;
        console.log(obj.attributes[4]['nodeValue']);
        bidelement.setAttribute("value",bid);
        booknameelement.setAttribute("value",obj.attributes[4]['nodeValue']);

    }
    function hidebox(){
        spanningbox.style.display = "none";
    }


</script>

</body>
</html>
