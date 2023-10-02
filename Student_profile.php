
<?php
session_start();
if(!isset($_SESSION['username']))
{
   header("location:login.php") ;
}
//it will send smone to login page it he want to go to admin page uing ur

elseif($_SESSION['usertype']=='admin'){
    header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Page</title>
    <?php
    include 'student_css.php';

?>
<style type="text/css">
    label {
        display: inline-block;
        text-align: right;
        width: 100px;
        padding-top: 10px;
        padding-bottom: 10px;


    }
    .div_design{
        background-color: skyblue;
        width: 500px;
        padding-top:70px;
        padding-bottom:70px;

    }
</style>


</head>
<body>
<?php
include 'student_sidebar.php';

?>
   <div class="content">
   <center>
    <h1> Update profile</h1>
    <br><br>
    <form>
    <div class="div_design">
        <div>
            <label>Name</label>
            <input type="text" name="name">
        </div>
        <div>
            <label>Email</label>
            <input type="email" name="email">
        </div>
        <div>
            <label>Phone</label>
            <input type="number" name="phone">
        </div>
        <div>
            <label>Password</label>
            <input type="text" name="password">
        </div>
        <div>
            <input type="submit" class="btn btn-primary"name="Update_profile">
        </div>
    </div>
  </form>
 </center>

   </div> 
</body>
</html>