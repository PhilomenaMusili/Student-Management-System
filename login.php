<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

</head>
<body background="school2.jpg" class="body_design">

    <center>
        <div class="form_design">
            <center class="title_design">
                Login Form
                <h4>
                    <?php
                    error_reporting(0);
                    session_start();
                    session_destroy();
                    echo $_SESSION['loginMessage'];
                    ?>

                </h4>
            </center>
            <form action="login_check.php" method="POST" class="login_form">
               <div>
                <label class="label_design">Username</label>
                <input type="text" name="username">
               </div> 
               <div>
                <label class="label_design">Password</label>
                <input type="password" name="password">
               </div>
               <div>
               
                <input class="btn btn-primary" type="submit" name="submit"value="login">
               </div>
            </form>

        </div>
    </center>
</body>
</html>