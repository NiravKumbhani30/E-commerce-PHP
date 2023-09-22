<?php

@include 'config.php';
session_start();

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
   header('location:login.php');
}



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
</head>

<body>
    

<?php

@include 'config.php';



?>

<style>
    table,tr,th,td{
        border : 1px solid black
   
    }
</style>

<?php
   

    $read = "SELECT * FROM `orders`";

    if(mysqli_query($conn,$read)){
        echo "";
    }
    $result = $conn->query($read);

   
    if(isset($_GET['delete'])){
        $id = $_GET['id'];
        $dq = "DELETE  FROM `orders` WHERE id='$id'";
        if ($read=mysqli_query($conn,$dq))
        {
            echo "";
        }
       else
        {
            echo "error".mysqli_error($conn);
        }
     }




?>

 <h1 style="margin-left:750px;">ORDER DETAILS </h1>
<table align="center" style="background-color:lightpink">
        
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Number</th>
        <th>Email</th>
        <th>Method</th>
        <th>Flat</th>
        <th>Street</th>
        <th>City</th>
        <th>State</th>
        <th>Country</th>
        <th>pin code</th>
        <th>price</th>
        <th>placed on</th>
        <th>Action</th>

    </tr>
<?php
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            ?>
            <form action="" method="get">
            <tr>
            <td><?php echo $row['id'];?>
            <input type="hidden" name="id" value="<?=$row['id']?>"/>
            </td>
                <td><?php echo $row['name']?></td>
                <td><?php echo $row['number']?></td>
                <td><?php echo $row['email']?></td>
                <td><?php echo $row['method']?></td>
                <td><?php echo $row['flat']?></td> 
                <td><?php echo $row['street']?></td> 
                <td><?php echo $row['city']?></td>
                <td><?php echo $row['state']?></td>
                <td><?php echo $row['country']?></td>
                <td><?php echo $row['pin_code']?></td>
                <td><?php echo $row['total_price']?></td><br>
                <td><?php echo date('d-M-Y'); ?></td>
                <td><input type="submit" id="btn" name="accept" value="Accept">
                    <br><input type="submit" name="delete" value="Reject "/></td>
            </td>
            
                   
            </td>

            </tr>
            </form>
            <?php
            // echo "<br>  - Name: ". $row["name"]. " " . $row["number"] . "<br>";
        }
    } else {
        echo "0 results";
    }
?>
</table>


    
</body>
</html>







