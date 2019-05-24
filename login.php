<?php
    if(isset($_POST['submit'])){
        $adminemail=$_POST['email'];
        $adminpassword=$_POST['password'];
        $db=mysqli_connect('localhost','root','','infographic') or die (mysqli_error($db));
        $sql=mysqli_query($db,"SELECT * FROM admin");
        if(!$sql){
            echo "<script language='javascript'>alert('Table does not exist');</script>";
        }
        else{
            if(mysqli_num_rows($sql)>0){
                while($admin=mysqli_fetch_assoc($sql)){
                   // print_r($admin);
                    if(($admin['adminemail']==$adminemail)&&($admin['PASSWORD']==$adminpassword)){
                       header('location:admin_home.php');
                    }
                    else{
                        echo "<script language='javascript'>alert('Sorry You are not admin');</script>";
                    }

                }
            }
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>User-login</title>
        <link rel="stylesheet" href="form-style.css" type="text/css">
    </head>
    <style>
        @import"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css";
body{
    margin: 0px;
    padding: 0px;
    background: rgb(194, 212, 228); 
    width: 100%;
}
.container{
  
    width: 400px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    font-family: sans-serif;
}
h1{
    font-size: 50px;
    color: white;
    margin-bottom: 10px;
    border-bottom: 4px solid black;
    width: 150px;
    /* float: left; */
    /* clear: right; */
}
.text-box{
    /* margin-bottom: 80px; */
    width: 100%;
    /* overflow: hidden; */
    font-size: 20px;
    padding: 8px 0;
    margin: 10px 0;
    border-bottom: 1px solid black;
    width: 300px;
   
  
}
.text-box1{
    width: 100%;
    padding: 8px 0;
    margin: 15px 0;
    border-bottom: 1px solid black; 
    width: 300px;

}
.text-box input{
    width: 200px;
    font-size: 16px;
    margin: 8px;
    border: none;
    outline: none;
    background: none;
}
.text-box1 input{
    width: 200px;
    font-size: 16px;
    margin: 10px;
    border: none;
    outline: none;
    background: none;
}
.bottom-box input{
    width: 150px;
    font-size: 20px;
}
    </style>
    <body>
    <div class="container">
        <form  method="post">
                <h1>Login</h1><br>
                <div class="text-box">
                    <i class="fa fa-user" aria-hidden="true"></i>   
                    <input type="email" placeholder="e-mail" name="email" required ><br>
                </div>    
                <div class="text-box1">
                    <i class="fa fa-lock" aria-hidden="true"></i>
                    <input type="password" placeholder="Password" name="password" mini="5" required><br>
                </div>
                <div class="bottom-box">
                    <!-- <input type="submit" name="" value="Sign in"> -->
                    <input type="submit" name="submit" value="Sign in"/>
                <input type="reset">
                </div>
        </form>
    </div>        
    </body>
</html>