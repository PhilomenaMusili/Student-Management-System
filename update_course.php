
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
    $id=$_GET['student_id'];
    $sql ="SELECT * FROM user WHERE id='$id'";
    $result = mysqli_query($data,$sql);
    $info= $result->fetch_assoc();
     
    if(isset($_POST['update']))
    {
       $name =$_POST['name'];
       $email =$_POST['code'];
       $phone =$_POST['teacher'];
       $password =$_POST['description'];

       $query = "UPDATE courses SET name ='$name',email='$email',
       phone='$phone',password='$password' WHERE id='$id'";

       $result2 = mysqli_query($data,$query);
       if($result2)
       {
        header("location:view_student.php");
       }
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
        label {
            display: inline-block;
            width: 100px;
            padding-top: 10px;
            padding-bottom:10px;
            text-align:right;
        }
        .div_deg {
            background-color: skyblue;
            width: 400px;
            padding-bottom: 70px;
            padding-top:70px;

        }

    </style>
</head>
<body>
<?php
    include 'admin_sidebar.php';
    
    ?>
    <div class="content">
        <center>
        <h1>Update Courses</h1>
        <div class="div_deg">

            <form action="#" method="POST">
            <div>
                <label class=>Course Name</label>
                <input type="text"name="name"
                 value="<?php echo "{$info['name']}";?>">
            </div>
            <div>
                <label>Course Code</label>
                <input type="text"name="code"
                value="<?php echo "{$info['code']}";?>">
            </div>
            <div>
                <label>Teacher</label>
                <input type="text"name="teacher"
                value="<?php echo "{$info['teacher']}";?>">
            </div>
            <div>
                <label>Description</label>
                <input type="text"name="description"
                value="<?php echo "{$info['description']}";?>">
            </div>
            <div>
                <input class="btn btn-success"type="submit"name="update" value="update">
            </div>
            </form>
        </div>
        </center>
    </div>
</body>
</html>