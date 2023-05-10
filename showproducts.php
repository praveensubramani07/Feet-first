<html>
 <head>
      <style>*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}

.container{
    border: none;
}
.navitem{
    display: none;
}
.mbl{
    display: none;
}
.navitem{
    display: none;
}

header{
        position:fixed;
        overflow: hidden;
        top: 0px;
        width: 100%;
    background-color: #c3b4d1;
    }

li{
    list-style: none;
}
a{
    color:white;
    text-decoration: none;
}
#shoes{
    display: none;
}
.navbar{
    min-height: 70px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0 20px;
}
.navmenu{
    display: flex;
    justify-content:space-between;
    
    align-items: center;
    gap:60px;
}
.branding{
    width: px;
    border: none;
}
.logo1{
    width: 150px;
    height: 50px;
    padding-top: 10px;
}
.navlink{
    transition: 0.7s ease;
}
.navlink:hover{
    color: black;
}
.hamburger{
    display: none;
    cursor: pointer;
}
.bar{
    display: block;
    width: 25px;
    height: 3px;
    margin: 5px auto;
    ~webkit-transition:all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
    background-color: white;
    
}
body{
    background-color:white;
}
@media(min-device-width:320px) and (max-device-width:480px){
    
    .hamburger{
        display:block;
    }
    .hamburger.active .bar:nth-child(2){
        opacity: 0;
    }
    .hamburger.active .bar:nth-child(1){
        transform: translateY(8px) rotate(45deg);
}
    .hamburger.active .bar:nth-child(3){
        transform: translateY(-8px) rotate(-45deg);
    }
    .navmenu{
        position: fixed;
        left: -100%;
        top: 70px;
        gap:0;
        flex-direction: column;
        background-color:#c3b4d1;
        width: 100%;
        text-align: center;
        transition: 0.3s;
        
    }
    header{
        position:fixed;
        overflow: hidden;
        top: 0px;
        width: 100%;
    }
    
    .navitem{
        margin: 16px 0;
    }
    .navmenu.active{
        left: 0px;
    }
    .container{

        color:white;
        margin-bottom:10px;
    }
    
}
@media(max-width:780px){
     .hamburger{
        display: block;
    }
    .hamburger.active .bar:nth-child(2){
        opacity: 0;
    }
    .hamburger.active .bar:nth-child(1){
        transform: translateY(8px) rotate(45deg);
}
    .hamburger.active .bar:nth-child(3){
        transform: translateY(-8px) rotate(-45deg);
        background-color: black;
    }
    
    .navmenu{
        position: fixed;
        left: -100%;
        top: 70px;
        gap:0;
        flex-direction: column;
        background-color: #c3b4d1;
        width: 100%;
        text-align: center;
        transition: 0.3s;
        border: none;
        
    }
    .navitem{
        margin: 16px 0;
    }
    .navmenu.active{
        left: 0;
    }
    header{
        position:fixed;
        overflow: hidden;
        top: 0px;
        width: 100%;
    }
    .grid{
        display: grid;
        grid-template-columns: 1fr 1fr;
        padding:1px; 

        
    }
    .nav2{
        display: flex;
        position: fixed;
        left: 60px;
        font-size: 25px;
        align-items: center;
        border: none;
        padding: 0px;
        margin-left: 500px;
        margin-right: 50px
        
    }
    
    .nav2i{
        border:none;
    }
    .logo1{
        width: 60px;
        border: 1px solid black;
        
    }
    
}


    .grid{
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr;
        background-color:white;
        margin: 100px 10px 10px 10px;
        border:none;
        
    }
body{
    background-color:white;
}
.container{
    
    margin-top: 20px;
    margin-right:10px;
    height: 250px;
    border:none;
    color:black;
    background-color: white;
    
}
.pdn{
    display: flex;
    padding: 5px;
    font-size: 22px;

}
.price{
    color: green;
    font-size: 20px;
    display: flex;
    justify-content:flex-end;
    padding: 1px;
    margin-bottom:10px;

}
@media(max-width:780px){
    
    .grid{
        display: grid;
        grid-template-columns: 1fr 1fr;
        padding:1px; 

        
    }
    .mbl{
        display: none;
    }
    #shoes{
        display: block;
        background:#c3b4d1;
        border: none;
        font-size: 15px;
        color: white;
    }
    .navitem{
        display: block;
    }
    

}
@media(min-device-width:320px) and (max-device-width:480px){
    .grid{
        display: grid;
        grid-template-columns: 1fr;
        padding: 7px;
        background-color:white;
        border:none;
    }
    .container{ 
        border:none;
        margin-left: 10px;
        
    }
    
    .mbl{
        display:inline-block;
        position:fixed;
        left: 100px;
        border: 1px solid black;
        position: fixed;
        top: 70.5px;
        left: 0px;
        width: 100%;
        background-color: white;
    }
    input[type=text]{
        width: 363px;
        box-sizing: border-box;
        border:none;
        border-radius: 5px;
        padding: 8px;
        
    }
    .mbtn{
        
        font-size:20px; 
        background-color: white;
        border: none;
        outline: none;
        background-color: white;
        padding: 1px;
    }
    .mbtn:hover{
        color: darkgray;
    }
    .nav2{
        display: flex;
        align-items: center;
        
        position: static;
        left: 100px;
        top: px;
        margin-right: 0px;
        font-size: 23px;
        margin-left: 110px;
        margin-right: 50px
        
    }
    .srh{
        display: none;
    }
    .shoes{
        display: none;
    }
    .logo1{
        width: 100px;
        display: none;
    }
    .branding{
        border: 1px solid black;
        display;
    }
}


/**nab bar 2 desktop*/
.nav2{
    display:flex;
    justify-content: space-around;
    position: fixed;
    right:10px;
    font-size: 25px;
    gap:10px;
}
.srh{
    position: fixed;
    right:220px;
    background-color: white;
    border: none;
    border-radius: 5px

}
.srhtxt{
    padding: 10px;
    border: none;
    width: 350px
}
.srbtn{
    font-size: 20px;
    background-color: white;
    border: ;
    border-right: none;
    border-bottom: none;
    border-top: none;
}
.shoes{
    position: fixed;
    right: 100px;
    font-size: 20px;
    background-color: #c3b4d1;
    border: none;
}

</style>
     </head>
 <body>
     <?php include'navbar.php';
     include 'connection.php';?>
   <div class="grid">
       <?php
if(isset($_POST["search"])){
    

$search=$_POST["search"];

 
    $query1="select * from product where keyword like '%$search%'" ;
      
  $result=mysqli_query($con,$query1);
  if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
      ?>
       <a href="product.php?id=<?php echo $row["id"]; ?>">
        <div class="container">
           
       <li class="prd">
           <img src="uploads/<?php echo $row['image'];?>">
           <p class="pdn"><?php echo $row["title"]."  ".$row["color"];?></p>
           <p class="price">Rs:<?php echo $row["price"];?></p>
           
       </li>
      
   </div>
   </a>
   <?php
  
  }
} else {
    
  echo "<br><br>product not found";

}

       
}else if(isset($_GET["search"])){
    $search_cat=$_GET["search"];
    if($search_cat=="featured")
{
    $query1="select * from product where featured='Yes'";
  $result=mysqli_query($con,$query1);
  if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
      ?>
             <a href="product.php?id=<?php echo $row["id"]; ?>">
        <div class="container">
           
       <li class="prd">
           <img src="uploads/<?php echo $row['image'];?>">
           <p class="pdn"><?php echo $row["title"]."  ".$row["color"];?></p>
           <p class="price">Rs:<?php echo $row["price"];?></p>
           
       </li>
      
   </div>
   </a>
   <?php
  
  
}
}
else {
    
  echo "<br><br>product not found";

}
}
else{
       $query2="select * from product where category='$search_cat'" ;
      
  $result=mysqli_query($con,$query2);
  if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
      ?>
       <a href="product.php?id=<?php echo $row["id"]; ?>">
        <div class="container">
           
       <li class="prd">
           <img src="uploads/<?php echo $row['image'];?>">
           <p class="pdn"><?php echo $row["title"]."  ".$row["color"];?></p>
           <p class="price">Rs:<?php echo $row["price"];?></p>
           
       </li>
      
   </div>
   </a>
   <?php
  
  }
} else {
    
  echo "<br><br>product not found";

}
}
}
?>
 
   
   
    </div>
</body>
</html>
<?php include 'footer.php';?>