<?php
include 'connection.php';
if(!isset($_COOKIE["qwertyuiopraveen"])){
    echo "First login to make orders";
    echo '<a href="loginform.php">Click here to login</a>';
}
else{
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
.pcont{
	border: 1px solid black;
	text-align: center;
	width: 50%;
	display: block;
	margin-left: 25em;
	background-color: #dde7eb

}
.pic{
	
	
	margin-bottom: 20px;
	
}
.price span{
color: darkgreen;

}
.pic p{
	margin-bottom: 20px;
}
img{
	width: 50%;
}
p{
	font-size: 26px;
}
input{
	font-size: 20px;
	width: 90%;
	padding: 8px;
	border-radius: 5px;
	outline: none;
	border: 1px solid;
}
.si{
	width: 5%;
	padding: 0px;
	font-size: 20px;
	outline: none;
	margin-left: 4px;
}
h3{
	font-size: 30px;
}
label{
	font-size: 25px;
}
h6{
	font-size: 25px;
	color: darkgreen;
}
.chk{
	width: 100%;
	height: 30px;
}
.pcont button{
	font-size: 50px;
	background-color: #c3b4d1;
	margin-bottom: 70px;
	border-radius: 5px;
	outline: none;
	border: 1px solid;

}
@media(min-width:120px) and (max-width:800px){
.pcont{
	width: 100%;
	margin-left: 0px;
}

p{
	font-size: 15px;
}
input{
	font-size: 16px;
	width: 90%;
	padding: 8px;
	border-radius: 5px;
	outline: none;
	border: 1px solid;
}
.si{
	width: 5%;
	padding: 0px;
	font-size: 19px;
	outline: none;
	margin-left: 4px;
}
h3{
	font-size: 20px;
}
label{
	font-size: 20px;
}
h6{
	font-size: 20px;
	color: darkgreen;
}
.chk{
	width: 100%;
	height: 20px;
}
.pcont button{
	font-size: 50px;
	background-color: #c3b4d1;
	margin-bottom: 70px;
	border-radius: 5px;
	outline: none;
	border: 1px solid;

}


}
	</style>
</head>
<body>
    	<?php
 $id=$_GET["id"];
 
  $query1="select * from product where id='$id'" ;

  $result=mysqli_query($con,$query1);

  if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
   $product_title=$row["title"];
   $price=$row["price"];
   $image_name=$row["image"];
  }
  }
?>
<form method="post" action="">
	<div class="pcont">
		<h3>Order</h3>
		<div class="pic">
			<img src="uploads/<?php echo $image_name;?>">
			<p><?php echo $product_title;?></p>
			<p class="price">Price:<span><?php echo $price;?></span></p>


		</div>
		<label for="size">Select Size</label>
		<select name="size" required>
			<option value="0">0</option>
			<option value="5">5</option>
			<option value="6">6</option>
			<option value="7">7</option>
			<option value="8">8</option>
			<option value="9">9</option>
			<option value="10">10</option>
			<option value="11">11</option>
			<option value="12">12</option>
		</select>
		<p class="qty">Enter Quantity<input class="si" name="quantity" type="text" required></p>
		<h2>Address</h2>
	
		<p>Full Name</p><input class="inp" type="text" name="name" required>
		<p>Mobile number</p><input class="inp" name="mobile" type="number" required>
		<p>Flat,House no,Building,Company,Apartment</p><input class="inp" name="doorno" type="text" required>
		<p>Area,Street,Village</p><input class="inp" name="village" type="text" required>
		<p>Landmark</p><input class="inp" name="" type="text" >
		<p>Town/City</p><input class="inp" type="text" name="town" required>
		<p>State</p><input class="inp" type="text" name="state" required>
		<h6 class="cod">cash on delivery<span><input type="checkbox" class="chk" value="cash on delivery"name="payment" required></span></h6>
		<p>Price:<span style="color: green;"><?php echo $price;?></span></p>
		<button type="submit"name="submit">Place Order</button>
	</div>
	</form>
</body>
</html>
<?php
}
    
if(isset($_POST["submit"])){
    
$size=$_POST["size"];
    $cookie_value=$_COOKIE["qwertyuiopraveen"];
   
    $quantity=$_POST["quantity"];
    $mobile=$_POST["mobile"];
    $address=$_POST["doorno"]."   ".$_POST["village"]."   ".$_POST["town"]."  ".$_POST["state"];
    $name=$_POST["name"];
    $payment=$_POST["payment"];
 
$query="insert into orders(user, product_id, product_title,status,mobile,Address,quantity,price,image,size,name, payment) values('$cookie_value','$id','$product_title','order placed','$mobile','$address','$quantity','$price','$image_name','$size','$name','$payment')";
     
     if(mysqli_query($con,$query))
     {
         
     echo '<script language="javascript">';
  echo 'alert(Order placed successfully, you can see your orders in profile page )';  //not showing an alert box.
  echo '</script>';
    echo "<script>location='https://ecomshoeproject.000webhostapp.com/profile.php'</script>";



}
else{
echo '<script language="javascript">';
  echo 'alert(cannot place order)';  //not showing an alert box.
  echo '</script>';
}
}
?>