<?php

@include 'config.php';
session_start();

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
   header('location:login.php');
}



?>
<style>
 
 table,tr,th,td{
        border : 1px solid black
    
    }
    
.delete-btn{
   margin-top: 0;
   background-color: var(--black);
}

body {
  background-image: url("image/users.jpeg");
  background-repeat: no-repeat;
 
  height: 300px; /* You must set a specified height */
  background-position: center; /* Center the image */
  background-repeat: no-repeat; /* Do not repeat the image */
  background-size: cover; /* Resize the background image to cover the entire container */
}
    </style>


<?php
    $con = mysqli_connect("localhost","root","","shop");
    if($con){
        echo "";
    }    

    $read = "SELECT * FROM `users`";

    if(mysqli_query($con,$read)){
        echo "";
    }
    $result = $con->query($read);


     if(isset($_POST['delete'])){
        $id = $_POST['id'];
        $dq = "DELETE  FROM `users` WHERE id='$id'";
        if ($read=mysqli_query($con,$dq))
        {
            echo "";
        }
       else
        {
            echo "error".mysqli_error($con);
        }
     }
?>

<h1 style="margin-left:680px;">Login User</h1>
<body  style="background-color:light">
<table align="center" style="background-color:lightpink;" >
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>User_type</th>
        <th>action</th>
    




<?php
    if($result->num_rows > 0) 
    
        while($row = $result->fetch_assoc()) {
            ?>



    </tr>
            <form action="" method="post">
            <tr>
                <td><?php echo $row['id'];?>
            <input type="hidden" name="id" value="<?=$row['id']?>"/>
            </td>
                <td><?php echo $row['name']?></td>
                <td><?php echo $row['email']?></td>
                <td><?php echo $row['password']?></td>
                <td><?php echo $row['user_type']?></td>
            
                <td> <input type="submit" name="delete" class="delete-btn" value="Remove"/></td>
                

            </tr>
        </form>
        <?php
    } else {
        echo "0 results";
    }
?>
