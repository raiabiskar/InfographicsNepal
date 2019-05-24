
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
            <div class="main-content1">
                    <div class="fetch-image">
                            <?php
                            $db=mysqli_connect('localhost','root','','infographic') or die(mysqli_error($db));
                            $sql=mysqli_query($db,"SELECT * FROM image ORDER BY id DESC");
                            if($sql){
                                if(mysqli_num_rows($sql)>0){
                                    while($admin=mysqli_fetch_assoc($sql)){
                                    ?>
                                    
                                    <img style="height:200px;width:200px;margin-right:40px;margin-bottom:30px " src="<?php echo "img/admin_img/".$admin['image'];?>"/>
                                    <a href="delete_process.php?id=<?php echo $admin['id'];?>"><input type="submit" name="submit" value="Delete">
                                    <?php
                                    }
                                }
                            }
                            ?>
                    </div>
                    
            </div>
    </div>
  </body>
</html>
