<?php
session_start();
$html = '';
$cgi ='' ;
$ajax ='' ;
$js ='' ;
$php ='' ;
include('connection.php');
if(isset($_GET["edite"])){
    $id = $_GET["edite"];
    $query="SELECT * FROM technolgy WHERE id=$id";
    $result = mysqli_query($con,$query);
    $row =  mysqli_fetch_assoc($result); 
    $count = mysqli_num_rows($result);
    


if($count == 1){
    
        
        $html = $row['html'];
        $cgi = $row['cgi'];
        $ajax = $row['ajax'];
        $js = $row['js'];
        $php = $row['php'];


    }

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









<div class="sign-form">
<form action="" method="POST">
   
             <input type="hidden" name="id"  value="<?php echo $id ?>">
             <br>
             <label >HTML:</label> 
             <br> 
             <input type="text" placeholder="HTML" value="<?= $html?>"  class="txt" name="html" >
             <br>
             <label >CGI:</label>
             <br>
             <input type="text" placeholder="CGI"  value="<?php echo $cgi?>"  class="txt" name="cgi" >
             <br>
             <label >JS:</label> 
             <br> 
             <input type="text" placeholder="JS"  value="<?php echo $js?>"  class="txt" name="js" >
             <br>
             <label >AJAX:</label> 
             <br> 
             <input type="text" placeholder="AJAX"  value="<?php echo $ajax?>"  class="txt" name="ajax" >
             <br>
             <label >PHP:</label> 
             <br> 
             <input type="text" placeholder="PHP"   value="<?php echo $php?>"  class="txt" name="php" >
             <br>
             <input type="submit" value="Update"  class="btn" name="update" id="btn">
</form>

</div>

<?php
include('connection.php');
if(isset($_POST["update"])){
    $id    =   $_POST["id"];
    $html  =   $_POST['html'];
    $cgi   =   $_POST['cgi'];
    $ajax  =   $_POST['ajax'];
    $js    =   $_POST['js'];
    $php   =   $_POST['php'];
// echo $id. " " .$html. " ". $cgi; 
// header("Location: ./affichage.php")

$query = "UPDATE `technolgy` SET html= $html, cgi=$cgi, ajax=$ajax, js= $js, php= $php WHERE id_developer = $id";
$result = mysqli_query($con, $query);
if (!$result) {
    die("error").mysqli_error($result);
}else{
    header("Location:affichage.php");
}
}

?>
    
</body>
</html>