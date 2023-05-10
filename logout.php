<?php

if(isset($_POST["logout"])){

  //  unset($_COOKIE["mobile_number"]);

    setcookie("qwertyuiopraveen", "", time() - 3600);
    echo "logging out";
    //header("Location: https://ecomshoeproject.000webhostapp.com/profile.php");
 echo "<script>location='https://ecomshoeproject.000webhostapp.com/'</script>";

}
?>