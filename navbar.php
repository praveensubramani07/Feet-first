<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
     <meta name="viewport" content="width=device-width,initial-scale=1.0">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Products</title>
    <style>
    
    
    *{
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
    width: 100%;
    height: 70px;
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
        position: fixed;
        font-size:20px; 
        background-color: white;
        border: none;
        outline: none;
        background-color: white;
        padding: 1px;
        right: 10px;
        top: 75px;
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
        width: 120px;
        height: 80px;
    }
    .branding{
        
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
   <header>
<nav class="navbar">
    <form action="showproducts.php" method="post" class="srh">
           <input class="srhtxt" type="text" name="search" placeholder="search....">
           <button type="submit" class="srbtn" name="submit">
               <p class="fa fa-search"></p>
           </button>
           
           
       </form>  
         
    

           <a href="index.php" class="branding"><img class="logo1" src="Feet-First-logos_black.png"></a>
           <ul class="navmenu">
               <li class="navitem">
                   <a href="#" class="navlink"><p class="fa fa-shoppng-cart" style="font-size: 27px"></p></a>
               </li>             
                    <li class="navitem" >
                   <a href="profile.php" class="navlink"><p class="fa fa-user" style="font-size: 27px"></p></a>
               </li>
               <li class="navitem">
                
                   
  
  <div id="shoes">
      <a href="profile.php">My Orders</a>
                   </div>
  

               </li>
               
               
               
           </ul>
           <ul class="nav2">
               <li class="nav2i">
                   <a class="fa fa-user" href="profile.php"></a>
               </li>
               <li class="nav2i">
                   <a class="fa fa-shopping-cart" href="#" ></a>
               </li>
               
               
               
           </ul>
           <div class="hamburger">
               <span class="bar"></span>
               <span class="bar"></span>
               <span class="bar"></span>
           </div>
            <div class="shoes">
                <a href="profile.php">My Orders</a>
    </div>
  
           
       </nav>
       
   </header>
    <form action="showproducts.php" method="post" class="mbl">
           <input class="mblt" type="text" name="search" placeholder="search....">
           <button type="submit" class="mbtn" name="submit">
               <p class="fa fa-search"></p>
           </button>
           
           
       </form>
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