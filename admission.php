
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
    $sql ="select *  FROM admission";
    $result= mysqli_query($data,$sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admission page</title>
    <?php
    include 'admin_css.php'
    
    ?>
</head>
<body>
<?php
    include 'admin_sidebar.php'
    
    ?>
    <div class="content">
        <h1>Apply for Admission</h1>
        <br><br>
        <table border="1px">
        <tr>
            <th style="padding: 20px; font-size: 15px;">Name</th>
            <th style="padding: 20px; font-size: 15px;">Email</th>
            <th style="padding: 20px; font-size: 15px;">Phone</th>
            <th style="padding: 20px; font-size: 15px;">Message</th>
       </tr>
       <?php
        while($info=$result->fetch_assoc())
       {
       ?>
       <tr>
        <td style="padding: 20px;">
        <?php echo "{$info['name']}"; ?></td>
        <td style="padding: 20px;">
        <?php echo "{$info['email']}"; ?></td>
        <td style="padding: 20px;">
        <?php echo "{$info['phone']}"; ?></td>
        <td style="padding: 20px;">
        <?php echo "{$info['message']}"; ?></td>

       </tr>
       <?php
      }
       ?>

        </table>
        
    </div>
</body>
</html>