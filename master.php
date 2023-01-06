<!DOCTYPE html>
<html>
<head>
    <title>Vol-Evade Hunger</title>
    
<style>
body{
    width: 100%;
    height: 100vh;
    margin:0;
    background-color: #18181d;
    color: #f5f6f7;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    font-size: 20px;
}
table {
    border: 1px solid #1e1e60;
    width: 100%;
    color: #f5f6f7;
    font-family: monospace;
    font-size: 25px;
    text-align: left;
}
td{
    border: 1px solid #1e1e60;
}
th {
color: white;
}
#btn{  
      text-decoration: none;  
      color: #FFF;  
      background-color: #e74c3c;  
      padding: 0.25px 30px;  
      border-radius: 3px;  
 }  
 #btn:hover{  
      background-color: #c0392b;  
 }  
 .topnav a {
        
        float: right;
        color: #f2f2f2;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        font-size: 17px;
        
      }
    
      .topnav a:hover {
        background-color: #ddd;
        color: black;
        border-radius: 15px;
      }
</style>
</head>
<body>
        <div class="topnav" style="padding-right: 20px;">
                <div class="buttons">
                    <a href="lgn.php">Logout</a>
        </div>
    <center><h1>Evade Hunger Volunteer Portal</h1></center>
    
    <br><br><br>

<table>
<tr>
<th>Sl no</th>
<th>First Name</th>
<th>Last Name</th>
<th>Mail ID</th>
<th>Phone Number</th>
<th>Food Supplies</th>
<th>Address</th>
<th>Pincode</th>
<th>Operation</th>
</tr>
<?php
    $conn = mysqli_connect("localhost", "root", "", "evadehunger");
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT * FROM food ORDER BY donno DESC LIMIT 10;";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "  
        <tr>
            <td>".$row['ID']."</td> 
            <td>".$row['fname']."</td>  
            <td>".$row['lname']."</td>  
            <td>".$row['mail']."</td>  
            <td>".$row['pno']."</td>  
            <td>".$row['donno']."</td>  
            <td>".$row['addr']."</td> 
            <td>".$row['pcode']."</td> 
            <td><a href='delete.php? ID=".$row['ID']."' id='btn'>Delete</a></td>  
        </tr>  
    ";  
    }
    echo "</table>";
    } else { echo "0 results"; }
    $conn->close();
?>
</table>
</body>
</html>