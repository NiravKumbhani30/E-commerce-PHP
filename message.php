
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>




<?php

@include 'config.php';
session_start();

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
   header('location:login.php');
}

if(isset($_GET['delete'])){
   $delete_id = $_GET['delete'];
   mysqli_query($conn, "DELETE FROM `users` WHERE id = '$delete_id'") or die('query failed');
   header('location:admin_users.php');
}

?>

<style>
    table,tr,th,td{
        border : 1px solid black
    }
    
</style>

<?php
    $con = mysqli_connect("localhost","root","","shop");
    if($con){
        echo "";
    }

    $read = "SELECT * FROM `message`";

    if(mysqli_query($con,$read)){
        echo "";
    }
    $result = $con->query($read);


     if(isset($_GET['delete'])){
        $id = $_GET['id'];
        $dq = "DELETE  FROM `message` WHERE id='$id'";
        if ($read=mysqli_query($con,$dq))
        {
            echo "deleted";
        }
       else
        {
            echo "error".mysqli_error($con);
        }
     }
?>

<h1 style="margin-left:640px;">MESSAGE</h1>
<body  style="background-color:lightyellow">
<table align="center" style="background-color:lightpink">
        
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Number</th>
        <th>Email</th>
        <th>Subject</th>
        <th>Message</th>
        <th>Action</th>
    </tr>
<?php
    if($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            ?>
            <form action="" method="get">
            <tr>
                <td><?php echo $row['id'];?>
            <input type="hidden" name="id" value="<?=$row['id']?>"/>
            </td>
                <!-- <td><?php echo $row['id']?></td> -->
                <td><?php echo $row['name']?></td>
                <td><?php echo $row['number']?></td>
                <td><?php echo $row['email']?></td>
                <td><?php echo $row['subject']?></td>
                <td><?php echo $row['mess']?></td> 
                <td> <input type="submit" name="delete" value="Delete" /></td>
                

            </tr>
        </form>
            <?php
            // echo "<br>  - Name: ". $row["name"]. " " . $row["number"] . "<br>";
        }
    } else {
        echo " No nmessage !";
    }
?>
</table>
</body>

</html>
     

