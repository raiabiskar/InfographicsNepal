<?php
    if(isset($_POST['submit'])){
        $image=$_POST['image'];
        $db=mysqli_connect('localhost','root','','infographic') or die($mysqli_error($db));
        $sql=mysqli_query($db,"INSERT INTO image (image) VALUES ('$image')");
        $_SESSION['msg']="Image Uploaded"; 
        if($sql){
           header('location:delete_img.php');
        }
        else{
            echo "<script language='javascript'>alert('Something goes wrong');</script>";
        }
    }
?>
<!DOCTYPE html>
<html>
  <head>
    <title>admin pannel</title>
    <link rel="stylesheet" href="css1/style.css" type="text/css" />
  </head>
  <body>
    <div class="conatiner">
      <div class="header-wrapper">
        <center>
          <img src="css1/img/admin.png" width="100px" height="100px" />
        </center>
        <h1>Admin</h1>
      </div>
      <div class="left-navbar">
        <br />

        <!-- <ul id="leftNavbar-ul" > -->
      </div>
      <div class="main-content">
        <form method="post">
            <input type="file" name="image" required/>
            <input type="submit" name="submit" value="Upload"/>
        </form>
      </div>
    </div>
  </body>
</html>
