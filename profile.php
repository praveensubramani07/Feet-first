<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>
    <style>
        *{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
.cot{
    border: none;
    text-align: center;
    width: auto;
    height: auto;
    margin-top: 80px;
    background-color: white;
    margin-left: 10px;
    margin-right: 10px;
    border-radius: 10px;
}
.num{
    margin-top: 10px;
    padding: 10px;
}
.num p{
    font-size: 21px;
    color: black;
}
.num :nth-child(2){
    margin-top: 10px;
    color: red;
}
.ord{
    margin-right: 10px;
    margin-left: 10px;
    display: grid;
    padding: 0;
    grid-template-columns: 1fr 1fr ;
    background-color: white;
    border-radius: 10px;
}
.ocont{
    border: none;
    width: auto;
    height: auto;
    display: flex;
    margin-bottom: 10px;
    margin-right: 10px;
    
}
.nbox {
    
    margin-left: 10em;
    font-size: 20px;
    padding-top: 10px;


    
    
}
.ocont img{
    width: 30%;
    border: none;
}
.nbox :nth-child(1){
    color: maroon;

}
.nbox :nth-child(2){
    color: green;
}
.nbox :nth-child(4){
    color: red;
}
#logout{
    width: 20%;
    margin-left: 39em;
    font-size: 30px;
    background-color: #c3b4d1;
    border: none;
    outline: none;
    border-radius: 10px;
}
.mor{
    padding: 10px;
    margin-left: 30em;
}
body{
    background-color: #c3b4d1;
}
.nbox p{
    padding-top: 10px;
}
.nbox button{
    margin-top: 10px;
    background-color: #c3b4d1;
    border: 1px solid gray;
    font-size: 20px;
    padding: 3px;
}
@media (min-width:150px) and (max-width:980px) {

    .cot{
        border: none;
        text-align: center;
        width: auto;
        height: auto;
        margin-top: 80px;
        background-color: white;
        margin-left: 20px;
        margin-right: 20px;
        border-radius: 10px;
    }
    #logout{
        width: 40%;
        margin-left: 9em;
        font-size: 20px;
        background-color: #c3b4d1;
        border: none;
        outline: none;
        border-radius: 10px;
        margin-top: 10px;
    }
 
    
    .ord{
        margin-right: 20px;
        margin-left: 20px;
        display: grid;
        padding: 0;
        grid-template-columns: 1fr ;
        background-color: white;
        border-radius: 10px;
    }
    .ocont{
        border: none;
        width: auto;
        height: auto;
        display: flex;
        margin-bottom: 10px;
        margin-right: 10px;
        
    }
    .nbox {
        
        margin-left: 9em;
        font-size: 10px;
        padding-top: 10px;   
    }
    .mor{
        padding: 10px;
        margin-left: 5em;
    }

    
.ocont img{
    width: 30%;
    border: none;
}
.nbox :nth-child(1){
    color: maroon;

}
.nbox :nth-child(2){
    color: green;
}
.nbox :nth-child(4){
    color: red;
}


.nbox button{
    margin-top: 10px;
    background-color: #c3b4d1;
    border: 1px solid gray;
    font-size: 10px;
    padding: 3px;
}
}
    </style>
</head>
<body>
    <?php include 'navbar.php'; ?>
    <div class="cot">
        <?php
if(isset($_COOKIE['qwertyuiopraveen'])) {

$mobile = $_COOKIE['qwertyuiopraveen'];



?>
        <h2>My Profile</h2>
        <div class="num">
        <p>Username</p>
        <p><?php echo $mobile;?></p>
        <form method="post" action="logout.php">
        <button name="logout" type="submit" id="logout">Logout</button>
        </form>
</div>
<?php 



}

else {
    echo "<script>location='https://ecomshoeproject.000webhostapp.com/loginform.php'</script>";

}
?>
    </div>
    <h2 class="mor">My Orders</h2>
    <div class="ord">
        <?php

include 'connection.php';

$query1="select * from orders where user='$mobile'" ;
  $result=mysqli_query($con,$query1);
  if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
      
   
    $title=$row["product_title"];
   $price= $row["price"];
   $quantity=$row['quantity'];
   $address=$row["Address"];
   $mobile=$row["mobile"];
   $status=$row["status"];
   $image=$row["image"];
   $size=$row["size"];
  
   ?>
   
   <div class="ocont">

            <img src="uploads/<?php echo $image;?>">

            <div class="nbox">
                
                    </p>
            <p><?php echo $title;?></p>
            
            <p>Rs:<?php echo $row["price"];?></p>
            <p>Name:<?php echo $row["name"];?></p>
            <p>Address:<?php echo $row["Address"];?></p>
            <p>Mobile:<?php echo $row["mobile"];?></p>
            <p>Payment:<?php echo $row["payment"];?></p>
            <p>size:<?php echo $size;?></p>
            
<p>Status:<?php echo $row["status"];?></p>
            <button>Track Order</button>
            </div>
        </div>
        <?php
  }
  }
  else{
      echo "no orders";
  }
 

?>
        
      

   </div>
</body>
</html>