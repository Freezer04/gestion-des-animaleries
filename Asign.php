<?php

if(isset($_GET["Asign"])){
    $id = $_GET["Asign"];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>


   <!-----css code------>

    <style>
        body{
            background: #d63031; 
           }
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
    </style>


   <!-----html code------>

<div class="navbar">
        <img src="./dev.png" class="logo">
        <ul>
        <li><a href="./home.php">Home</a></li>
            <li><a href="./admin.php">Profile</a></li>
            <li><a href="./affichage.php">Developers</a></li>
            <li><a href="./form.php">foramtion</a></li>
            <li><a href="./logout.php">Logout</a></li>
        
        </ul>
    </div>

<div class="sign-form">
<form action="" method="POST">
   
             <input type="hidden" name="id" value="<?php echo $id ?>">
             <br>
             <label >Formation:</label> 
             <br> 
             <input type="text" placeholder="Add Formation"  class="txt" name="formation" >
             <br>
             <label >Date de Formation:</label>
             <br>
             <input type="date"  class="txt" name="date" >
             <br>
             <input type="submit" value="Envoyer"  class="btn" name="submit" id="btn">
</form>

</div>

</body>
</html> 



      <!-----php code------>


<?php
include('connection.php');
if(isset($_POST["submit"])){
    $id = $_POST["id"];
    $formation = $_POST["formation"];
    $date = $_POST["date"];
echo $id. " " . $formation. " ". $date; 
// header("Location: ./affichage.php")

$query = "INSERT INTO `formation` (`id_developer`, `formation`, `date`) VALUES ('$id',  '$formation', '$date')";

$result = mysqli_query($con, $query);
if (!$result) {
    die("error").mysqli_error($result);
}else{
    header("Location:affichage.php");
}
}

?>

