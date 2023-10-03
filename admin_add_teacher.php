
<?php
//prevents one from loging direct using url you must login
session_start();

    if(!isset($_SESSION['username']))
    {
    header("location:login.php");
    }

    //it will send smone to login page it he want to go to student page uing ur
    elseif($_SESSION['usertype']=='student')   
     {
        header("location:login.php");

    }

    $host ="localhost";
    $username ="root";
    $password="";
    $db ="school_project";

    $data = mysqli_connect($host,$username,$password,$db);
    if(isset($_POST['add_teacher']))
    {
        $t_name=$_POST['name'];
        $t_description=$_POST['description'];
        $file=$_FILES['image']['name'];//for adding image
        $dst="./image/".$file;
        $dst_db="image/".$file;
        move_uploaded_file($_FILES['image']['name'], $dst);

       $sql ="INSERT INTO teacher(name,description,image) 
       VALUES ('$t_name','$t_description','$dst_db')";

       $result =mysqli_query($data,$sql);
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <?php
    include 'admin_css.php';

    ?>
    <style type="text/css">
        .div_design {
            background-color: skyblue;
            padding-top: 70px;
            padding-bottom: 70px;
            width:500px;
        }
    </style>
</head>
<body>
<?php
    include 'admin_sidebar.php';
    
    ?>
    <div class="content">
        <center>
        <h1>Add Teacher</h1><br><br>
        <div class="div_design">
        <form action="#" method="POST" enctype="multipart/form-data">
                <div>
                    <label>Teacher Name</label>
                    <input type="text" name="name">
                </div>
                <br><br>
                <div>
                    <label>Description:</label>
                    <textarea name="description"></textarea>
                </div>
                <br><br>
                <div>
                    <label>Image</label>
                    <input type="file" name="image">
                </div>
                <br><br>
                <div>
                    <input type="submit" class="btn btn-primary"name="add_teacher" value="Add Teacher">
                </div>
            </form>
        </div>
       </center>
       
        
    </div>
</body>
</html>