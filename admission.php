
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
    include 'admin_css.php';
    
    ?>
<style type="text/css">
    .table {
        border-collapse: collapse; /* Collapse the borders to prevent double lines */
        width: 90%;
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
        <h1>Apply for Admission</h1>
        <br><br>
        <table border="1px" class="table">
        <tr  style="background-color: grey;"> <!-- First row with grey background -->>
            <th  class="table_th">Name</th>
            <th  class="table_th">Email</th>
            <th  class="table_th">Phone</th>
            <th  class="table_th">Message</th>
       </tr>
       <?php
        while($info=$result->fetch_assoc())
       {
       ?>
       <tr>
        <td style="padding: 20px;" class="table_td">
        <?php echo "{$info['name']}"; ?></td>
        <td style="padding: 20px;" class="table_td">
        <?php echo "{$info['email']}"; ?></td>
        <td style="padding: 20px;" class="table_td">
        <?php echo "{$info['phone']}"; ?></td>
        <td style="padding: 20px;" class="table_td">
        <?php echo "{$info['message']}"; ?></td>

       </tr>
       <?php
      }
       ?>

        </table>
        
    </div>
</body>
</html>