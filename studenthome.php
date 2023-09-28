
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
    <link rel="stylesheet" type="text/css" href="admin.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

</head>
<body>
    <header class="header">
        <a href=""> Student Dashboard </a>
        <div class="logout">
            <a class="btn btn-primary"href="logout.php">Logout</a>
        </div>
    </header>
    <aside>
        <ul>
           <li>
                <a href="">My Courses</a>
           </li>
           <li>
                <a href="">My Results</a>
           </li>
        </ul>
    </aside>
    
</body>
</html>