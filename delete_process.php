<?php
    $id=$_REQUEST['id'];
    $db=mysqli_connect('localhost','root','','infographic')or die(mysqli_error($db));
    $sql=mysqli_query($db,"DELETE FROM image WHERE id='$id'");
    if(!$sql){
        echo "Error";
    }
    else{
        header('location:delete_img.php');
    }
?>