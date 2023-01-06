<?php   
 $connection = mysqli_connect('localhost', 'root', '', 'evadehunger');
 if (isset($_GET['ID'])) {  
      $id = $_GET['ID'];  
      $query = "DELETE FROM `food` WHERE ID = '$id'";  
      $run = mysqli_query($connection,$query);  
      if ($run) {  
           header('location:trl.php');  
      }else{  
           echo "Error: ".mysqli_error($connection);  
      }  
 }  
 ?>  