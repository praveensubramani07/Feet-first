<?php
if(isset($_POST["submit"])){
    


$cookie_name = "qwertyuiopraveen";
$cookie_value = $_POST["mobile"];
$password=$_POST["password"];
setcookie($cookie_name, $cookie_value, time() + (86400 * 30),"https://ecomshoeproject.000webhostapp.com/","",false,true); // 86400 = 1 day

//setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
}

?>
<html>
<body>

<?php
if(!isset($_COOKIE[$cookie_name])) {
  echo "please refresh.....";
  
 
  ?>
  


  <?php



  
} else {
  echo " logging in";
 

include 'connection.php';
     
     $query1="select * from users where username='$cookie_value'";
     
     $result=mysqli_query($con,$query1);
     
     $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
     
     $count=mysqli_num_rows($result);
     
     echo $count;
     
     if($count==0)
     {
     $query="insert into users(username, password) values('$cookie_value','$password')";
     
     if(mysqli_query($con,$query))
     {
     
     echo "<script>location='https://ecomshoeproject.000webhostapp.com/profile.php'</script>";

echo "added";

}

else
 {
    echo "connection error";
}
 }
     else{
         echo "<script>location='https://ecomshoeproject.000webhostapp.com/profile.php'</script>";

echo "logged in";


     
 }
}
?>

</body>
</html>