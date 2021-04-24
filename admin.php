<?php
session_start();
$firstName = $_SESSION["role"];
if(empty($firstName)){
    header("Location: ./login.php");
    // echo $firstName;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=h, initial-scale=1.0">
    <link rel="stylesheet" href="./css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>
<body>
   <header>
   <div class="navbar" style="width: 100%; background: #2d3436;">
        <img src="./dev.png" class="logo">
        <ul>
            <li><a href="./home.php">Home</a></li>
            <li><a href="./admin.php">Profile</a></li>
            <li><a href="./affichage.php">Developers</a></li>
            <li><a href="./form.php">foramtion</a></li>
            <li><a href="./logout.php">Logout</a></li>
        
        </ul>
    </div>
<h2 style="position: absolute;top: 20%;left:35%;font-size: 100PX;">Admin Page:</h2>
    </header>
    
            <!-- <li>
                <a href="#">
                    <span class="icon"><i class="fa fa-cog" ></i></span>
                    <span class="title">Setting</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="icon"><i class="fa fa-info-circle" ></i></span>
                    <span class="title">Help</span>
                </a>
            </li>-->
            <!-- <li> 
                <a href="./logout.php">
                    <span class="icon" ><i class="fa fa-sign-out"></i></span>
                    <span class="title">Logout </span>
                </a>
            </li> -->
            <!-- <li>
                <a href="./affichage.php">
                    <span class="icon"><i class="fa fa-home" ></i></span>
                    <span class="title" >Affichage</span>
                </a>
            </li> -->
        <!-- </ul>
    </div> -->

   <style>
       /* .navigation{
    position: fixed;
    width: 60px;
    height: 100%;
    background:#d63031;
    transition: 0.5s;
    overflow: hidden;
}

.navigation:hover{
    width: 300px;
}
.navigation ul{
    position: absolute;
    top: 0px;
    left: 0px;
    width: 100%;
}
.navigation ul li {
    position: relative;
    width: 100%;
    list-style: none;
}
.navigation ul li:hover{
    background:#ffffff;
}

.navigation ul li a{
    position: relative;
    display: block;
    width: 100%;
    display: flex;
    text-decoration: none;
    color: #2d3436;
}
.navigation ul li a .icon{
    position: relative;
    display: block;
    min-width: 60px;
    height: 60px;
    line-height: 60px;
    text-align: center;
    color:#2d3436;
}
.navigation ul li a .icon .fa{
    font-size:  24px;
}
.navigation ul li a .title{
    position: relative;
    display: block;
    padding: 0 10px;
    height: 60px;
    line-height: 60px;
    text-align: start;
    white-space: nowrap;
} */

        /* body{
            background: #d63031;
        }        */
        .navbar{
                    width: 100%;
                    margin: auto;
                    padding: 14px 0;
                    display: flex;
                    align-items: center;
                    justify-content: space-between;
                    background: #2d3436;
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
                    button{
                      background: #2d3436 ;
                      color:#ffffff;
                      border-radius: 20px;
                       height: 44px;
                       border: none;
                       font-family: 'Poppins', sans-serif;
                       font-size: 14px;
                       cursor: pointer;
                       transform: .0.8s;
                      
                    }
    
    
    
    
   


   </style>



    <?php
    
    // include('connection.php');
   
    // if(isset($_POST['btn-save'])){

    //     $fname =   ($_POST['fname']);
    //     $lname =   ($_POST['lname']);
    //     $query = "SELECT * FROM developpeurs ORDER BY `first name` ";
    //     $result = mysqli_query($conn, $query);
    //     if (!$result) {
    //         die("error").mysqli_error($result);
    //     }
    
    // }
    
    ?>
    <?php
//  include("footer.php");

?>
   
   
</body>
</html>