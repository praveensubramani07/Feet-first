<?php
include 'connection.php';


if(isset($_GET["id"])){
    $id=$_GET["id"];
}
    $query1="select * from product where id='$id'" ;
  $result=mysqli_query($con,$query1);
  if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
      $image=$row["image"];
      $title=$row["title"];
      $price=$row["price"];
      $des=$row["description"];
      $color=$row["color"];
      $size=$row["size"];
      $img2=$row["image2"];
      $img3=$row["image3"];
  }
  }
   

 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Productst</title>
    <link rel="stylesheet" href="product.css">
    <style>
    
    
    *{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
.mcontainer{
    display: none;
}
.mdescription{
    display: none;
}
.dcontainer{
    display: none;
}
.ddescription{
    display: none;
}

.ncontainer{
    margin-top: 80px;
    padding: 100px;
    
    
}
.ncontainer .col-2 img{
    padding: 0;
}
.ncontainer .col-2{
    padding: 0px;
    
}
.col-3{
    margin-right: 150px;
    font-size: 20px
}
.ncontainer h2{
    margin: 20px 0;
    font-weight: bold;
    color: green;
    
}
.ncontainer .count{
    display: block;
    padding: 10px;
    background-color: green;
    border: none;
    border-radius: 5px;
    margin-top: 1px;
    margin-bottom: 2px;
    color: white;
}
.row{
    display: flex;
    
}
.ncontainer .col-2 img{
    padding-right: 10px;
    height: 325px;
    width: 650px;
    margin-left: 100px;
    border-bottom-right-radius: 10px;
    border-right: 5px solid black;
    margin-right: 5px;
}
.option{
    display: grid;
    grid-template-columns:  20% 20% 20%;
    margin-left: 100px;
    cursor: pointer;

    
}
.option img:hover{
    box-shadow: 0px 0px 0px 2px;
}

.option img{
    width: 130px;
}
.nbtn{
    display: grid;
}
.nbtn1{
    color: white;
    background-color: #ed9e15;
    padding: 10px;
    border: none;
    border-radius: 5px;
    margin: 10px;
    width: 240px;
    
    
}
.count{
    margin: 10px;
}
.nbtn1:hover{
    background-color: #c3b4d1;
    color: black;
}
.count:hover{
    background-color: #c3b4d1;
    color: black;
}
h3{
    margin-top: 10px;
    margin-bottom: 10px;
}
.size button{
    background-color: #c3b4d1;
    border: 1px solid;
    padding: 5px;
    border-radius: 3px;
    margin-top: 10px;
}
.size{
    background-color: white;
}
.ndescription h4
{
    font-size: 17px;
    margin-left: 100px;
    word-spacing: 2px;
    margin-right: 200px;
    
}
.ndescription h3{
    margin-left: 100px;
    
    font-size: 30px
}
.ndescription{
    margin-top: 10px''
}
@media(max-width:780px){
    .ncontainer,.row{
        display: none;
        
    }
    .option,.ndescription{
        display: none;
    }
    .dcontainer{
        margin-top: 80px;
        display: block;
    
    }
    .doption{
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        padding-top: 10px
    }
    .doption img{
        width: 150px;
    }
    .dcol-3{
        
        padding-left: 18px;
        
    }
    .dcol-3 h1{
        margin-bottom: 10px;
        border-top: 4px solid black;
        border-radius: 10px
    }
    .dprice{
        margin-bottom: 10px;
        color: darkgreen;
    }
    .dcount{
        background-color: green;
        color: aliceblue;
        padding: 10px;
        width: 200px;
        border: none;
        border-radius: 5px;
        margin-right: 10px;
        
    }
    .dbtn1{
        background-color: orange;
        color: aliceblue;
        padding: 10px;
        width: 200px;
        border: none;
        border-radius: 5px;
        margin-left: 217px;
    }
    .dcount:hover{
        background-color: #c3b4d1;
        color: black;
    }
    .dbtn1:hover{
        background-color: #c3b4d1;
        color: black;
    }
    .dsize{
    margin-top: 10px;
        
    }
    .dsize button{
        padding: 10px;
        margin-right: 71px;
        background-color: #c3b4d1;
        border: none;
        border-radius: 5px;
        color: aliceblue;
    }
    .ddescription{
        display: block;
    }
    .ddescription h3{
        margin-left: 20px;
        font-size: 20px;
            
    }
    .ddescription h4{
        margin-left: 20px;
        margin-right: 20px;
        word-spacing: 4px;
    }
    .mcontainer{
        display: none;
    }
    .mdescription{
        display: none;
    }
}
@media(min-device-width:320px) and (max-device-width:480px){
    .ncontainer{
        display: none;
    }
    .option,.ndescription{
        display: none;
    }
    .mcontainer{
        
        margin-top: 80px;
        margin-left: 50px;
        margin-right: 50px;
        
    }
    .mcol-2 img{
        width: 300px;
        height: 150px;
        margin-right: 19px;
    }
    .moption{
        display: flex;
        margin-top: 19px;
        flex-wrap: wrap;
        justify-content: space-around;
        
    }
    .moption img{
        width: 60px;
    
    }
    .mcol-3 h1{
        margin-top: 16px;
        font-size: 24px;
    }
    .mcol-3 h2{
        color: green;
        margin-bottom: 10px;
        margin-top: 10px;
        margin-left: 205px
    }
    
    
    
    .mdescription h4{
        font-size: 40px
        
    }
    .mcount{
        font-size: 30px;
        padding-left: 60px;
        padding-right:65px;
        width: 300px;
        margin-right: 30px;
        border: none;
        background-color: darkseagreen;
        color: white;
        border-radius: 10px;
    }
    .mbtn1{
        font-size: 30px;
        padding-left: 60px;
        padding-right:65px;
        width: 300px;
        margin-right: 30px;
        margin-top: 05px;
        border-radius: 10px;
        border: none;
        background-color: #ed9e15;
        color: white;

    }
    .msize{
        
        display: flex;
        margin-top: 10px;
        justify-content: space-around;
        background-color: #c3b4d1;
        padding: 05px;
        border-radius: 10px;
        border: none;
    }
    .msize button{
        font-size: 20px;
        background-color: #c3b4d1;
        border:none;
        border-right: 2px solid white;
        border-left: 2px solid white;
        border-radius: 40px
    }
    .mdescription h3{
        font-size: 30px;
        margin-left: 40px;
    }
    .mdescription h4{
        font-size: 20px;
        margin-left: 40px;
        margin-right: 40px;
        word-spacing: 2px;
    }
    .mcontainer{
        display: block;
    }
    .mdescription{
        display: block;
    }
    
    
    .dcontainer,.row{
        display: none;
        
    }
.ddescription{
        display: none;
    }
    .dcontainer,.row{
        display: none;
    }
    .mcount:hover{
        background-color: #c3b4d1;
        color: black;
    }
    .mbtn1:hover{
        background-color: #c3b4d1;
        color: black;
    }
}




    
    
    
    
    
    
    
    
    
    
    </style>
    
     <meta name="viewport" content="width=device-width,initial-scale=1.0">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    
</head>
<body>
   <div class="ncontainer">
       <div class="row">

           <div class="col-2">
               <img src="uploads/<?php echo $image?>" id="productimg" width="100%">
           </div>
           <div class="col-3">
               <h1><?php echo $title."  ".$color?></h1>
               <h2 class="price">Rs <?php echo $price?></h2>
               <div class="nbtn">
               <button value="1" class="count">add to cart</button>
               
       </div>
       <a href="order.php?id=<?php echo $id; ?>" class="nbtn1"><button class="nbtn1">Buy Now</button></a>
       <div class="size">
           <button value="6">6 UK</button>
           <button value="7">7 UK</button>
           <button value="8">8 UK</button>
           <button value="9">9 UK</button>
           <button value="10">10 UK</button>
       </div>
       
   </div>
   
    </div>
               
           </div>
           
           
           <div class="option">
           <img src="uploads/<?php echo $image;?>" class="smallimg">
           <img src="uploads/<?php echo $img2; ?>" class="smallimg">
           <img src="uploads/<?php echo $img3; ?>" class="smallimg">
        
       </div>
       <br>
        <div class="ndescription">
        <img src="shoe1.png" class="pdimg" width="5%" style=" border: 2px solid black;border-radius: 60px;margin-left: 90px;">
       <h3>Product details</h3>
               <h4><?php echo $des; ?></h4>
               <img src="return-button-png-34573.png" width="5%" style="margin-left: 90px;border: 2px solid black;border-radius: 60px;margin-top: 10px">
               
               <h3>10 Days Easy Return</h3>
               <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe qui laborum consequatur officiis sapiente, cumque eum reiciendis, iste, nulla fugiat odio laudantium ad quo dicta quod a aut earum culpa autem nemo tempore. Cupiditate non earum a accusantium repellendus voluptates.</h4>
                              <img src="q1.png" width="5%" style="margin-left: 90px;border: 2px solid black;border-radius: 60px;margin-top: 10px">
                              <h3>Quality Leather</h3>
                              <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam nemo beatae tenetur, maxime at, corporis mollitia quibusdam eos quis iusto eligendi veniam in iure perferendis. Repellendus et, nemo distinctio dolorum quas modi, aperiam quia facere nihil quibusdam, incidunt, temporibus doloribus.</h4>
               

    </div>
    
    <div class="dcontainer">
     
       <div class="drow">
           <div class="dcol-2">
               <img src="uploads/<?php echo $image; ?>" id="dproductimg" width="80%">
           </div>
           </div>
           <div class="doption">
           <img src="uploads/<?php echo $image; ?>" class="dsmallimg">
           <img src="uploads/<?php echo $img2; ?>" class="dsmallimg">
           <img src="uploads/<?php echo $img3; ?>" class="dsmallimg">
        
       </div>
           <div class="dcol-3">
               <h1><?php echo $title."   ".$color;; ?></h1>
               <h2 class="dprice">Rs <?php echo $price;?></h2>
               <div class="dbtn">
               <button value="1" class="dcount">add to cart</button>
               <a href="order.php?id=<?php echo $id; ?>" class="dbtn1"><button class="dbtn">Buy Now</button></a>
       </div>
       <div class="dsize">
           <button value="6">6 UK</button>
           <button value="7">7 UK</button>
           <button value="8">8 UK</button>
           <button value="9">9 UK</button>
           <button value="10">10 UK</button>
       </div>
       
   </div>
  
    </div>
               
           
       <br>
        <div class="ddescription">
            
            <img src="shoe1.png" class="pdimg" width="5%" style=" border: 2px solid black;border-radius: 60px;margin-left: 20px;">
       <h3>Product details</h3>
               <h4><?php echo $des; ?>.</h5>
               <img src="return-button-png-34573.png" width="5%" style="margin-left: 20px;border: 2px solid black;border-radius: 60px;margin-top: 10px">
               
               <h3>10 Days Easy Return</h3>
               <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe qui laborum consequatur officiis sapiente, cumque eum reiciendis, iste, nulla fugiat odio laudantium ad quo dicta quod a aut earum culpa autem nemo tempore. Cupiditate non earum a accusantium repellendus voluptates.</h4>
                              <img src="q1.png" width="5%" style="margin-left: 20px;border: 2px solid black;border-radius: 60px;margin-top: 10px">
                              <h3>Quality Leather</h3>
                              <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam nemo beatae tenetur, maxime at, corporis mollitia quibusdam eos quis iusto eligendi veniam in iure perferendis. Repellendus et, nemo distinctio dolorum quas modi, aperiam quia facere nihil quibusdam, incidunt, temporibus doloribus.</h4>

            
    </div>
    <div class="mcontainer">
       <div class="drow">
           <div class="mcol-2">
               <img src="uploads/<?php echo $image; ?>" id="mproductimg" width="80%">
           </div>
           </div>
           <div class="moption">
           <img src="uploads/<?php echo $image; ?>" class="msmallimg">
           <img src="uploads/<?php echo $img2; ?>" class="msmallimg">
           <img src="uploads/<?php echo $img3; ?>" class="msmallimg">
        
       </div>
           <div class="mcol-3">
               <h1><?php echo $title."  ".$color; ?></h1>
               <h2 class="mprice">Rs <?php echo $price; ?></h2>
               <div class="mbt">
               <button value="1" class="mcount">add to cart</button>
               <a href="order.php?id=<?php echo $id; ?>" ><button class="mbtn1">Buy Now</button></a>
       </div>
       <div class="msize">
           <button value="6">6 UK</button>
           <button value="7">7 UK</button>
           <button value="8">8 UK</button>
           <button value="9">9 UK</button>
           <button value="10">10 UK</button>
       </div>
       
   </div>
   
    </div>
               
           
       <br>
        <div class="mdescription">
       
              <img src="shoe1.png" class="pdimg" width="10%" style=" border: 2px solid black;border-radius: 60px;margin-left: 40px;">
       <h3>Product details</h3>
               <h4><?php echo $des; ?>.</h4>
               <img src="return-button-png-34573.png" width="10%" style="margin-left: 40px;border: 2px solid black;border-radius: 60px;margin-top: 10px">
               
               <h3>10 Days Easy Return</h3>
               <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe qui laborum consequatur officiis sapiente, cumque eum reiciendis, iste, nulla fugiat odio laudantium ad quo dicta quod a aut earum culpa autem nemo tempore. Cupiditate non earum a accusantium repellendus voluptates.</h4>
                              <img src="q1.png" width="10%" style="margin-left: 40px;border: 2px solid black;border-radius: 60px;margin-top: 10px">
                              <h3>Quality Leather</h3>
                              <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam nemo beatae tenetur, maxime at, corporis mollitia quibusdam eos quis iusto eligendi veniam in iure perferendis. Repellendus et, nemo distinctio dolorum quas modi, aperiam quia facere nihil quibusdam, incidunt, temporibus doloribus.</h4>

               
    </div>
   
<script>
    var productimg = document.getElementById("productimg");
    var smallimg = document.getElementsByClassName("smallimg");
    
    smallimg[0].onclick=function(){
        productimg.src=smallimg[0].src;
    }
    smallimg[1].onclick=function(){
        productimg.src=smallimg[1].src;
    }
    smallimg[2].onclick=function(){
        productimg.src=smallimg[2].src;
    }
    smallimg[3].onclick=function(){
        productimg.src=smallimg[3].src;
    }
    
    </script>   
    <script>
    var dproductimg = document.getElementById("dproductimg");
    var dsmallimg = document.getElementsByClassName("dsmallimg");
    
    dsmallimg[0].onclick=function(){
        dproductimg.src=dsmallimg[0].src;
    }
    dsmallimg[1].onclick=function(){
        dproductimg.src=dsmallimg[1].src;
    }
    dsmallimg[2].onclick=function(){
        dproductimg.src=dsmallimg[2].src;
    }
    dsmallimg[3].onclick=function(){
        dproductimg.src=dsmallimg[3].src;
    }
    
    </script> 
    <script>
    var mproductimg = document.getElementById("mproductimg");
    var msmallimg = document.getElementsByClassName("msmallimg");
    
    msmallimg[0].onclick=function(){
        mproductimg.src=msmallimg[0].src;
    }
    msmallimg[1].onclick=function(){
        mproductimg.src=msmallimg[1].src;
    }
    msmallimg[2].onclick=function(){
        mproductimg.src=msmallimg[2].src;
    }
    msmallimg[3].onclick=function(){
        mproductimg.src=msmallimg[3].src;
    }
    
    </script>   
    

    
    <script>const hamburger =  document.querySelector(".hamburger");
const navmenu =  document.querySelector(".navmenu");
        const mbl = document.querySelector(".mblt");
hamburger.addEventListener("click",()=>{
                           hamburger.classList.toggle("active");
                           navmenu.classList.toggle("active");
                            mbl.classList.toggle("active");
                           })</script>
    
    
    
</body>

</html>
<?php include 'footer.php';?>