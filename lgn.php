<?php
    $host="localhost";
    $user="root";
    $password="";
    $db="evadehunger";

    $con = mysqli_connect($host,$user,$password,$db);
    //mysql_select_db($db);

    if(isset($_POST['username'])){
        
        $uname=$_POST['username'];
        $password=$_POST['password'];
        
        $sql="select * from loginform where user='".$uname."'AND Pass='".$password."' limit 1";
        
        $result=mysqli_query($con,$sql);
        
        if(mysqli_num_rows($result)==1){
            header("Location: master.php");
            exit();
        }
        else{
            echo " You Have Entered Incorrect Password";
            exit();
        }
            
    }
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Admin</title>
    </head>
    <style>

        body{
            width: 100%;
            height: 100vh;
            margin:0;
            background-color: #18181d;
            color: #5d5e5f;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 20px;
        }

    form{
        width: 60vw;
        max-width: 500px;
        min-width: 300px;
        margin: 0 auto;
        padding-bottom: 2em;
    }
    fieldset{
        border: none;
        padding: 2rem 0 ;
    }
    label{
        display: block;
        margin:0.5rem 0 ;
    }
    input, textarea{
        background-color: #1c1c2581;
        color: #ffffff;
        border: 0px solid #1e1e60;
    }
    fieldset:not(:last-of-type) {
        border-bottom: 3px solid #3b3b4f;
    }

    input,
    textarea,
    select {
    margin: 20px 0 0 0;
        width: 120%;
    min-height: 3em;
    }

    .inline{
        width: unset;
        margin: 0 0.5em 0 0;
        vertical-align: middle;
    }
    input[type="submit"] {
        display: block;
        width: 60%;
        margin: 1em auto;
        height: 2em;
        font-size: 1.1rem;
        background-color: #1c1c25;
        border-color: white;
        min-width: 300px;
    }
    .button {
        background-color: #1c1c2581;
        overflow: hidden;
        border-radius: 10px;
    }
    .button:hover {
        background-color: #ddd;
        color: black;
        border-radius: 10px;
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
    <body>
        <div class="topnav" style="padding-right: 20px;">
                <div class="buttons">
                        <a href="index.php">Home</a>
            </div> 
        <h1 style="text-align: center;padding-top:25px">EVADE HUNGER</h1><br>
            <div class="form" id="frm">
                <h3 style="text-align: center;">Login here</h3>
                <form name="frmContact" action="#" method="POST">
                    <input type="text" name="username" required="required" placeholder="Enter the Username" autofocus required></input>  
                    <input type="password" name="password" required="required" placeholder="Enter the Password" required></input>
                    <input type="submit" class="button" title="Log In" name="login" value="Login"></input>
                </form>
            </div>
    </body>