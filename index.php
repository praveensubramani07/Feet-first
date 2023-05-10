<?php
include 'connection.php';
include 'navbar.php';




?>
<html>
    <head>
        <style>
  .offer{
    margin-top: 70px;
    background-image: url(f45f608cc8624fd6404b0aa6df42607f.png);
    height: 600px;
    width:1050px ;
    background-position:right 10%;
    background-repeat:no-repeat;
    background-color: white;
    padding-right: 0 80px;
    display: flex;
    justify-content: center;
    border: none;
    background-size:  70%;
    margin-bottom: 10px;
    background-color: gainsboro;
    
}
.wrap{
    background-color: gainsboro;
    
}
.offertxt{
    margin-top: 200px;
    margin-right: 400px;
    font-size: 25px;
    
    
}
.pro-container{
    text-align: center;
    border: none;
    display: flex;
    justify-content: space-evenly;
    background-color: white;
    border-radius: 20px;
    margin: 0 50px
}
.pro{
    border: ;
    width: 20%;
    height: ;
    margin: 10px 10px;
    border-radius: 5px;
    box-shadow: 1px 1px 1px ;
}
.pro img{
    width: 100%;
    
}
#fpro h2{
    text-align: center;
    margin: 10px ;
    
}
.pro2{
    background-color: #c3b4d1;
    padding: 10px 0px;
}
.pro2 i{
    color: gold;
}
.pro2 h4{
    color: white;
    
    
}

.offertxt h4{
    color: white;
    font-size: 22px;
}
.offertxt h2{
    color: crimson;
    
}
.offertxt h1{
    color: cornflowerblue;
}
.offertxt p{
    color: white;
}
.offertxt button{
    background-color: #c3b4d1;
    font-size: 22px;
    margin-top: 10px;
    border: none;
    color: white;
    border-radius: 05px;
    padding: 4px;
    box-shadow: 1px 1px 2px 1px;
    cursor: pointer;
}
.offertxt a:hover{
    box-shadow: 0px 0px 0px 0px;
    color: black;
}
/*
@media(max-width:980px){
    
    .offer{
        margin-top: 0px;
        background-image: url(f45f608cc8624fd6404b0aa6df42607f.png);
        background-size: 500px;
        background-position: bottom ;
        background-repeat: no-repeat;
        width: 100%;
        padding: 10px;
    }
    .offertxt{
        margin-left: 30px;
        width: 900px;
        
    }
    
    
}
*/
@media(min-width:320px) and (max-width:980px){
    
    .offer{
        margin-top: 0px;
        background-image: url(f45f608cc8624fd6404b0aa6df42607f.png);
        background-size: 100%;
        background-position: left;
        background-repeat: no-repeat;
        width: 100%;
        height: 10%;
        padding: 10px;
    }
    .offertxt{
        margin-right: 0px;
        margin-top: 300px;
        text-shadow:0px;
        
    }
    .pro-container{
        flex-direction: column;
    }
    .pro{
        width: 100%;
        box-shadow: 0px 1px 5px 0px;
        border-radius: 0px;
    }
    
   
    }
.cat-cont{
    
    border-radius: 10px;
    padding: 10px 40px;
    margin: 0px 20px;
    background-color: #c3b4d1;
    
    
    
}
.cont{
    border-right: 2px solid white;
    border-left: 2px solid white;
    border-radius: 10px;
    display: flex;
    justify-content: ;
    flex-wrap:wrap;
    padding-left: 30px
    
}
.cont button{
    font-size: 20px;
    margin: 10px;
    width: 10%;
    height: 100px;
    background-color: white;
    border: none;
    border-radius: 5px;
    box-shadow: 0px 1px 2px 1px
}
.cont button a{
    color: black;
    
}
#cato h2{
    text-align: center;
    margin-bottom: 10px;
    margin-top: 10px;
    
}
@media screen and (max-width:780px){
    .cont button{
        font-size: 13px;
        width: 24%;
        height: 60px;
        box-shadow: 0px 1px 5px 0px;
        
        
    }
    .cont{
        justify-content:space-around;
        padding-right: 20px;
        border-color: black
            
    }
    
}
        
        </style>
        
    </head>
    <body>
             <div class="wrap">

                           <div class="offer">

                              <div class="offertxt">
                               <h4>Trade-in-offers</h4>
                                <h2>Super value deals</h2>  
                                <h1>On all Shoes</h1>
                                <p>All shoes are geniune leather</p>
                                  <button><a href="showproducts.php?search=featured">Shop Now</a></button>
                               </div>
    </div>
    </div>
    
    
       <section id="cato">
               <h2>Catogories</h2>
               
                <div class="cat-cont">
                    <div class="cont">
                        
            <?php
$query1="select * from category" ;
  $result=mysqli_query($con,$query1);
  if ($result->num_rows > 0) {
      $count=1;
  // output data of each row
  while($row = $result->fetch_assoc()) {
    
    ?>
                     <button><a href="showproducts.php?search=<?php echo $row["name"];?>"><?php echo $row["name"];?></a></button>  
            <?php
  }
  }
  ?>
                        
                     
                        
                       
                       
                       
                        
                    </div>
                    
                    
                    
                    
                </div>
                
                
                
            </section>
            
        <section id="fpro">
           <h2>Featured Products</h2>
           
            <div class="pro-container">
                
       <?php        
          $query1="select * from product where featured='Yes'" ;
  $result=mysqli_query($con,$query1);
  if ($result->num_rows > 0) {
      $count=1;
  // output data of each row
  while($row = $result->fetch_assoc()) {
      if($count>4)
      break;
      $count++;
      ?>
     
        
           
      
  
            
               
      
                <div class="pro">
                  <a href="product.php?id=<?php echo $row["id"]; ?>">
          <img src="uploads/<?php echo $row['image'];?>"></a>
                    <div class="pro2">
                    <h4><?php echo $row["title"]."  ".$row["color"];?></h4>
                    <h3><?php echo $row["price"];?></h3>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                    
                </div>
                
       <?php
  
  }
} else {
    
  echo "<br><br>product not found";
}

?>            
            </div>
        </section> 
        </body>
       
    
</html>
<?php include 'footer.php'; ?>