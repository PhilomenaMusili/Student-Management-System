
<?php

//prevents one from loging direct using url you must login
error_reporting(0);
session_start();

    if(!isset($_SESSION['username']))
    {
    header("location:login.php");
    }

    
    $host ="localhost";
    $username ="root";
    $password="";
    $db ="school_project";
    
    $data = mysqli_connect($host,$username,$password,$db);
    $sql ="SELECT * FROM courses ";
    $result = mysqli_query($data,$sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View student Page</title>
    <?php
    include 'admin_css.php';

    ?>
   <style type="text/css">
    .table {
        border-collapse: collapse; /* Collapse the borders to prevent double lines */
        width: 100%;
        background-color: skyblue;
    }
    .table, th, td {
        border: 1px solid black;
    }
    .table_th {
        padding: 20px;
        font-size: 20px;
    }
    .table_td {
        padding: 20px;
        font-size: 20px;
        
    }
</style>

</head>
<body>
<?php
    include 'admin_sidebar.php';
    
    ?>
    <div class="content">
        <center>

       
        <h1> View Courses</h1>
        <?php
        if($_SESSION['message'])
        {
            echo $_SESSION['message'];
        }
        unset($_SESSION['message']);
        ?>
        <br><br>
        <table border="1px" class="table">
            <tr>
                <th class="table_th">Course Name</th>
                <th class="table_th">Course Code</th>
                <th class="table_th">Teacher</th>
                <th class="table_th">Description</th>
                <th class="table_th">Delete</th>
                <th class="table_th">Update</th>
            </tr>
            <?php
            while($info =$result->fetch_assoc())
             {
            
            ?>

            <tr>
               <td class="table_td">
                <?php echo "{$info['name']}";?>
               </td> 
               <td class="table_td">  <?php echo "{$info['code']}";?></td>
               <td class="table_td">  <?php echo "{$info['teacher']}";?></td>
               <td class="table_td">  <?php echo "{$info['description']}";?></td>
               <td class="table_td">  
                <?php 
                echo "<a 
                onClick=\"javascript:return confirm('Are you sure to delete this');\"
                class='btn btn-danger' href='delete_course.php?course_id={$info['id']}'>Delete </a>";
                ?>
                
               </td>
               <td class="table_td">  
                <?php 
                  echo "<a class='btn btn-primary' href='update_course.php?student_id={$info['id']}'>
                  Update 
                  </a>";
               ?>
               </td>


            </tr>
            <?php 
               }
            ?>


        </table>
        </center>
        
    </div>
</body>
</html>