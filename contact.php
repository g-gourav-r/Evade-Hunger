<!DOCTYPE html>
<html>

<head>
	<title>Evade Hunger</title>
    
</head>
<style>
	body{
		width: 100%;
		height: 100vh;
		margin:0;
		background-color: #18181d;
		color: rgb(116, 108, 108);
		font-family: Arial, Helvetica, sans-serif;
		font-size: 20px;
	}
	.button {
		background-color: #1c1c2581;
		overflow: hidden;
		border-radius: 15px;
		padding:10px;
		color: rgb(116, 108, 108);
	}
	.button:hover {
		background-color: #ddd;
		color: black;
	}

</style>
<body>
	<center>
		<?php
		
		$conn = mysqli_connect("localhost", "root", "", "evadehunger");
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		$fn = $_REQUEST['fname'];
		$ln = $_REQUEST['lname'];
		$ma = $_REQUEST['mail'];
		$ph = $_REQUEST['pno'];
		$dc = $_REQUEST['donno'];
		$adr= $_REQUEST['addr'];
		$pn = $_REQUEST['pcode']; 
		
		$sql = "INSERT INTO food (fname,lname,mail,pno,donno,addr,pcode) VALUES ('$fn' ,'$ln', '$ma', '$ph', '$dc', '$adr', '$pn')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>Your request has been placed <br> One of our volunteer will reach out to you soon !</h3>";
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	
	<form action="index.php">
		<input type="submit" class="button" value="Go Back to Evade Hunger" >
	</form>
	</center>
</body>

</html>


