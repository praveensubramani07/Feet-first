<?php
include 'connection.php';
session_start();
$groupcount=0;
$groupc=0;
if(isset($_POST['create'])){
//$_SESSION["groupid"] = $_POST['cgroupid'];
$groupid=$_POST['cgroupid'];
$password=$_POST["password"];
$sql2="SELECT * FROM  users";
$res2=mysqli_query($con,$sql2);


$count= mysqli_num_rows($res2);
if( $count > 0)
{
while($row=mysqli_fetch_assoc($res2))
{
   


 if(($row['username']==$groupid)){
     $groupcount++;
    


}
}
}
    if($groupcount>=1)
    {
echo '<script type="text/JavaScript">  

     alert("User name already taken, Use different username"); 

     </script>';
    }
    

    else{
        setcookie("qwertyuiopraveen", "$groupid", time()+86400*30,"https://ecomshoeproject.000webhostapp.com/","",false,true);
        $query="insert into users(username, password) values('$groupid','$password')";
     
     if(mysqli_query($con,$query))
     {
     
    echo "<script>location='https://ecomshoeproject.000webhostapp.com/profile.php'</script>";
     }
    }
}



//login
if(isset($_POST['join'])){

$groupid=$_POST['jgroupid'];
$password=$_POST["password1"];


$sql3="SELECT * FROM  users";
$res3=mysqli_query($con,$sql3);


$count= mysqli_num_rows($res3);
if( $count > 0)
{
while($row=mysqli_fetch_assoc($res3))
{
   


 if(($row['username']==$groupid)&&$row['password']==$password)
 {
     $groupcount++;
}
}
}
    if($groupcount==1)
    {
    
    /*
    echo $groupid;
    echo "    ";
    echo $password;
    $sql = "SELECT * FROM users WHERE username='$groupid' AND password='$password'";

        $result = mysqli_query($con, $sql);

  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
echo $row;
$count=mysqli_num_rows($result);
   echo $count;        
           
   if ($count==1)*/ 
setcookie("qwertyuiopraveen", "$groupid", time()+86400*30,"https://ecomshoeproject.000webhostapp.com/","",false,true);
echo "<script>location='https://ecomshoeproject.000webhostapp.com/profile.php'</script>";

    }
    

    else{
echo '<script type="text/JavaScript">  

     alert("Account not found, Please check the username and password "); 

     </script>';
    }
}




    
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>login</title>
  <link rel="stylesheet" href="style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="login-page">
  <div class="form">
    <form class="register-form" method="post" action="">
      <input type="text" placeholder="Username" name="cgroupid"/>
 <input type="password" placeholder="password" name="password"/>
<?php

    ?>
      <button name="create">signup</button>
      <p class="message">Already have account <a href="#">login</a></p>
    </form>
    
    <form class="login-form" method="post" action="">
      <input type="text" placeholder="Username" name="jgroupid"/>
 <input type="password" placeholder="password" name="password1"/>
      <?php

?>
      <button name="join">login</button>
      <p class="message">Not have account? <a href="#">sign up</a></a></p>
    </form>
  </div>
</div>

<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="./script.js"></script>

</body>
</html>
