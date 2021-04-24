<?php
session_start();
$firstName = $_SESSION["FirtName"];
$id =  $_SESSION["id"];

if(empty($firstName)){
    header("Location: ./login.php");
}
?>
<?php

if(isset($_GET["Edit"])){
    $id = $_GET["Edit"];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=welco, initial-scale=1.0">
    <link rel="stylesheet" href="./css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>
<body>
    <header>
       
    <div class="navbar">
        <img src="./dev.png" class="logo">
        <ul>
            <li><a href="./home.php">Home</a></li>
            <li><a href="./dev.php">Profile</a></li>
            <li><a href="./formation.php">Formation</a></li>
            <li><a href="./tchnos.php">tchnology</a></li>
            <li><a href="./logout.php">Logout</a></li>
        
        </ul>
       
    </div>
<h2 style="position: absolute;top: 10%;left:30%;">Here Can You insert Your Knowledge About This  Technologies:</h2>
    </header>
   

    <!-----html code-------->



    <?php
        echo "welcome <strong> $firstName" ;
        
        ?>

<section class="box">
  
 <form action="" method="POST">

   <p>HTML:</p>
   <select name="html" id="cars">
     <option value="0">level zero</option>
     <option value="1">level one</option>
     <option value="2">level two</option>
     <option value="2">level three</option>
     <option value="4">level four</option>
     <option value="5">level five</option>
   </select>
  
  <p>CGI:</p>
   <select name="cgi" id="cars">
     <option value="0">level zero</option>
     <option value="1">level one</option>
     <option value="2">level two</option>
     <option value="3">level three</option>
     <option value="4">level four</option>
     <option value="5">level five</option>
   </select>

  <p>JAVA SCRIPT:</p>
    <select name="ajax" id="cars">
     <option value="0">level zero</option>
     <option value="1">level one</option>
     <option value="2">level two</option>
     <option value="2">level three</option>
     <option value="4">level four</option>
     <option value="5">level five</option>
   </select>

  <p>AJAX:</p>
   <select name="js" id="cars">
     <option value="0">level zero</option>
     <option value="1">level one</option>
     <option value="2">level two</option>
     <option value="2">level three</option>
     <option value="4">level four</option>
     <option value="5">level five</option>
   </select>

  <p>PHP:</p>
   <select name="php" id="cars">
     <option value="0">level zero</option>
     <option value="1">level one</option>
     <option value="2">level two</option>
     <option value="2">level three</option>
     <option value="4">level four</option>
     <option value="5">level five</option>
    </select>
      <input type="submit" value="valider" class="btn" name="btn-valid" id="btn">
 </form>
</section>


  <!--------- Navigation----------->


<!-- <div class="navigation">
        <ul>
            <li>
                <a href="./home.php">
                    <span class="icon"><i class="fa fa-home" ></i></span>
                    <span class="title" >Home</span>
                </a>
            </li>
            <li>
                <a href="./formation.php " >
                    <span class="icon"><i class="fa fa-user" ></i></span>
                    <span class="title">Formation</span>
                </a>
            </li> -->
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
            </li> -->
            <!-- <li>
                <a href="./logout.php">
                    <span class="icon" ><i class="fa fa-sign-out"></i></span>
                    <span class="title">Logout </span>
                </a>
            </li>
            
        </ul>
    </div> -->
    <style>


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

    

        <!-----------php------------>


<?php
  
   include('connection.php');
if(isset($_POST['btn-valid'])){

    $html  =   $_POST['html'];
    $cgi   =   $_POST['cgi'];
    $ajax  =   $_POST['ajax'];
    $js    =   $_POST['js'];
    $php   =   $_POST['php'];
    // echo"$html, $cgi, $ajax, $js , $php";
    $query = "INSERT INTO `technolgy` (`id_developer`, `html`, `cgi`, `ajax`, `js`, `php`) VALUES ('$id', '$html', '$cgi', '$ajax', ' $js ', '$php ')";
    $result = mysqli_query($con, $query);
    if (!$result) {
        die("error").mysqli_error($result);
    }
    else{
        echo "thanks for insert your knowldge";
    }
    }
    


?>
<?php
//  include("footer.php");

?>




</body>
</html>