<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>
<body>
    <style>
       
        .banner{
     
            background-image:linear-gradient(rgba(0,0,0,0.75),rgba(0,0,0,0.75)),url(dor.jpg);
     
               }
                .banner{
                    width: 100%;
                    height: 100vh;
                    background-image:linear-gradient(rgba(0,0,0,0.75),rgba(0,0,0,0.75)),url(./dor.jpg);
                    background-size: cover;
                    background-position: center;
                }
                .navbar{
                    width: 85%;
                    margin: auto;
                    padding: 35px 0;
                    display: flex;
                    align-items: center;
                    justify-content: space-between;
                }
                    .logo{
                        width: 150px;
                        cursor: pointer;
                    }
                    .navbar ul li{
                        list-style: none;
                        display: inline-block;
                        margin: 0 20px;
                        position: relative;
                    }
                    .navbar ul li a{
                        text-decoration: none;
                        color: #ffffff;
                        text-transform: uppercase;
                    }
                    .navbar ul li::after{
                        content: '';
                        height: 3px;
                        width: 0;
                        background:#d63031 ;
                        position: absolute;
                        left: 0;
                        bottom: -10px;
                        transition: 0.5s;
                    }
                    .navbar ul li:hover:after{
                        width: 100%;
                    }
                    .content{
                        width: 100%;
                        position: absolute;
                        top: 50%;
                        transform: translateY(-50%);
                        text-align: center;
                        color: #fff;
                        font-family: 'Poppins', sans-serif;
                    }
                    h1{
                        color:#d63031;
                        text-align: center;
                        font-size: 12vw;
                        line-height: 0.6em;
                        z-index: 1000;
                        font-weight: 900;
                    }
                    h1 span{
                        font-size: 0.2em;
                        letter-spacing: 0.4em;
                        font-weight: 400;
                        text-transform: uppercase ;
                    } 
                    p{
                        color: #ffffff;
                        text-align: center;
                        margin: 40px auto;
                        font-weight: 100;
                        line-height: 30px;
                        font-size: 25px;
                    }
                    button{
                        width: 200px;
                        padding: 15px 0;
                        text-align: center;
                        margin: 20px 10px;
                        border-radius: 25px;
                        font-weight: bold;
                        border: 2px solid #d63031;
                        background: transparent;
                        color: #d63031;
                        cursor: pointer;
                        position: relative;
                        overflow: hidden;
                    }
                    span{
                        background:#ffffff;
                        height: 100%;
                        width: 0;
                        border-radius: 25px;
                        position: absolute;
                        left: 0;
                        bottom: 0;
                        z-index: -1;
                        transition: .5s;
                    }
                    button:hover span{
                        width: 100%;
                    }
                    button:hover{
                        border: none;
                    }
                    .section{
                        max-width: 1170px;
                        margin: auto;
                    }
                    .row{
                        display: flex;
                        flex-wrap: wrap;
                    }
                    ul{
                        list-style: none;
                    } 





    </style>


<div class="banner">
    <div class="navbar">
        <img src="./img/dev.png" class="logo">
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="./admin.php">profil</a></li>
            <li><a href="./signup.php">Sign Up</a></li>
            <li><a href="./login.php">Login</a></li>
            <li><a href="./footer.php">Contact Us</a></li>
        </ul>
    </div>

    <div class="content">
         <h1> WeDev</h1>
         <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, eum repellendus! Adipisci expedita<br> ullam impedit animi nisi voluptatum beatae, aliquid placeat! Modi  </P>
       <div>
           <button type="button"><span></span>Get Started</button>
           <button type="button"><span></span>Learn More</button>
       </div>
    </div>
       
</div>
<?php
//  include("footer.php");

?>

    
</body>
</html>