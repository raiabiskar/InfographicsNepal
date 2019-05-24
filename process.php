<?php
    if(isset($_POST['submit'])){
        $adminemail=$_POST['email'];
        $adminpassword=$_POST['password'];
        echo $adminemail;
        echo $adminpassword;
        $db=mysqli_connect('localhost','root','','sertj') or die (mysqli_error($db));
    }
    
?>