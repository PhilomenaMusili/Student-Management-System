
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
if(isset($_POST['add_course']))
{
    $course_name =$_POST['name'];
    $course_code =$_POST['code'];
    $course_teacher =$_POST['teacher'];
    $description =$_POST['description'];

    $check ="SELECT * FROM courses WHERE code = '$course_code'";
    $check_course = mysqli_query($data, $check);
    $row_count = mysqli_num_rows($check_course);

    if ($row_count > 0) {
        echo "Course with the same code already exists. Please use a different code.";
    }
    else 
    {
    
        $sql = "INSERT INTO courses (name, code, teacher, description) VALUES ('$course_name', '$course_code', '$course_teacher', '$description')";

    $result =mysqli_query($data,$sql);
    

    if($result){
        
        echo "<script type='text/javascript'>
                    alert('Course added successfully');
                  </script>";
    }
    else{
       echo "Insertion Failed";
    } 
 }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <style type="text/css">
        label {
            display: inline-block;
            text-align: right;
            width: 100px;
            padding-top: 10px;
            padding-bottom: 10px;
        }
        .div_design {
            background-color: skyblue;
            width:400px;
            padding-top: 70px;
            padding-bottom: 70px;
        }
        
    </style>
    <?php
    include 'admin_css.php'

    ?>
</head>
<body>
<?php
    include 'admin_sidebar.php';
    
    ?>
    <div class="content">
    <center>
        <h1>Add Courses</h1>
        <div class="div_design">
            <form action="#" method="POST">
                <div>
                    <label>Course Name</label>
                    <input type="text" name="name">
                </div>
                <div>
                    <label>Course Code</label>
                    <input type="text" name="code">
                </div>
                <div>
                    <label>Teacher</label>
                    <input type="text" name="teacher">
                </div>
                <div>
                    <label>Description</label>
                    <input type="text" name="description">
                </div>
                <div>
                    <input type="submit" class="btn btn-primary"name="add_course" value="Add Courses">
                </div>
            </form>
        </div>
    </center>
    </div>
</body>
</html>