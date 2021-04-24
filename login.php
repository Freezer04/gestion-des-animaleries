
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>
<body>


       <!-----css code------>

<style>
        body{
            background:#d63031;
            overflow: hidden;
        }
        
    </style>     


       <!-----html code------>


<div class="container"></div>

<div class="sign-form">

<img src="./undraw_male_avatar_323b (2).svg"  style="height: 50%; width:50%">
        <form action="" method="post">
             <input type="email" placeholder="Email" class="txt" name="email"  required>
             <input type="password" placeholder="password " class="txt" name="password" required>
             <input type="submit" value="Login" class="btn" name="btn-login">
             <a href="./signup.php ">You don't Have an Account ?</a>
        </form>
</div>



       <!---java script code---->


<script src="./master/anime.min.js"></script>
    <script>
        //  $('#alert').click(function(){
        //    swal({
        //      title: "Good job!",
        //      text: "You clicked the button!",
        //      icon: "success",
        //         });
        //  })
       const container = document.querySelector('.container')
       for (var i = 0; i <= 100; i++){
           const blocks = document.createElement('div');
           blocks.classList.add('block');
           container.appendChild(blocks);
       }

       function animateBloks(){
           anime({
               targets: '.block',
               translateX: function(){
                   return anime.random(-700,700); 
               },
               translateY: function(){
                   return anime.random(-500,500); 
               },
               scale: function(){
                   return anime.random(1,5); 
               },

               easing: 'linear' ,
               duration: 3000,
               delay: anime.stagger(10),
               complete:animateBloks,
           })
       }
       animateBloks()
    </script>


            
        <!---------php code--------->


<?php

include('connection.php');
if (isset( $_POST['btn-login'])) {
  $email=$_POST['email'];
  $password = $_POST['password'];


$query = "SELECT * FROM developer WHERE email ='$email' and `pass`= '$password'";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_assoc($result);
$count = mysqli_num_rows($result);


if($count == 1){
    session_start();
    $_SESSION["FirtName"] = $row["firstN"];
    $_SESSION["id"] = $row["id"];
    

    if($row["role"] == "Admin"){
        $_SESSION["role"] = $email;
        header("Location: ./admin.php");
    }else{
        $_SESSION["FirtName"] = $email;
        header("Location: ./dev.php");

       
    }
}

// if (!$result) {
//     die("error").mysqli_error($result);
// }

// while ($row = mysqli_fetch_array($result) ) {
//     $db_email = $row['email'];
//     $db_password = $row['password'];

// }
// if ($email !== $db_email  && $password !== $db_password) {
// //   header("location: admin.php");
//      echo "invalid password";
// }else if ($email == $db_email && $password == $db_password) {
//     header("location: dev.php");
//   }
//   else{
//     // header("location: index.php");
//     'you have a problem in your database!';
//   }


}


?>

    
</body>
</html>