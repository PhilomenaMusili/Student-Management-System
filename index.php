<?php 
 error_reporting(0);
 session_start();
 session_destroy();
if($_SESSION['message'])
{
    $message = $_SESSION['message'];

    echo "<script type=text/javascript>
      alert('$message');
    </script>";
}
$host ="localhost";
$username ="root";
$password="";
$db ="school_project";

$data = mysqli_connect($host,$username,$password,$db);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</head>
<body>
    <nav>
        <label class="logo">W-School</label>
        <ul>
            <li><a href="">Home </a></li>
            <li><a href="">Contact </a></li>
            <li><a href="">Administration </a></li>
            <li><a href="login.php" class="btn btn-success">Login</a></li>
        </ul>
    </nav>
    <div class="section1">
        <label class="img_text"> We Teach each student with care</label>
       <img class="main_img" src="library.jpg" alt="To be Added">

    </div>
    <div class="container">
       <div class="row">
           <div class="col-md-4">
             <img class="welcome_img" src="school2.jpg"alt="Tp ad">
            </div>
            <div class="col-md-8">
             <h1>Welcome to M school </h1>
             <p> Welcome to Mena's School Student Management System! At Mena's School, we are committed to providing a top-notch educational experience, and our Student Management System plays a vital role in achieving this goal. This platform is designed to seamlessly manage student information, enabling our dedicated educators and administrators to focus on what matters most - the success and growth of our students. Whether you're a parent, teacher, or student, our system offers an intuitive and efficient way to access and update academic records, track progress, and facilitate communication. Explore the array of features and resources we provide, and let us work together to nurture a bright future for our students here at Mena's School.</p>
           </div>
        </div>
    </div>
    <center>
        <h1>Our Teachers<h1>
    </center>
    <div class="container">
       <div class="row">
           <div class="col-md-4">
             <img class="teacher" src="school1.jpg"alt="Teachers">
             <p>Math teacher</p>
            </div>
            <div class="col-md-4">
            <img class="teacher" src="mena.jpg"alt="Teachers">
            <p>Physics teacher</p>
           </div>
           <div class="col-md-4">
             <img class="teacher" src="library.jpg"alt="Teachers">
             <p>Biology teacher</p>
            </div>
            
        </div>
    </div>
    <center>
        <h1>Our Courses<h1>
    </center>
    <div class="container">
       <div class="row">
           <div class="col-md-4">
             <img class="teacher" src="teacher1.jpg"alt="Teachers">
             <h3>Computer Sciencer</h3>
             
            </div>
            <div class="col-md-4">
            <img class="teacher" src="course1.jpg"alt="Teachers">
            <h3>Digital Marketing and SEO</h3>
           </div>
           <div class="col-md-4">
             <img class="teacher" src="study1.jpg"alt="Teachers">
             <h3>Cybersecurity Fundamentals</h3>
            </div>
        </div>
    </div>
    <center>
        <h1 class="admisssion"> Admission Form<h1>
    </center>
    <div align="center" class="admission_form">
        <form action="data_check.php" method="POST">
            
            <div class="admission_int">
                <label class="label_text"> Name </label>
                <input class="input_design"type="name" name="name">      
            </div>
            <div class="admission_int">
                <label class="label_text">Phone</label>
                <input class="input_design"type="number" name="phone">      
            </div>
            <div class="admission_int">
                <label class="label_text">Email</label>
                <input class="input_design"type="email" name="email">      
            </div>
            <div class="admission_int">
                <label class="label_text">Message</label>
                <textarea class="input_txt"name="message"></textarea>      
            </div>
            <div class="admission_int">
            <input class= "btn btn-primary"id="submit" type="submit" value="apply"name="apply">       
            </div>
        </form>
     </div>
     <footer class="footer_text">
        <h3>All rights reserved</h3>
    </footer>

</body>
</html>