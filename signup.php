<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>WeDev</title>

</head>
<body>

     <!-----css code------>   

    <style>
        body{
            overflow: hidden;
            background:#d63031;
        }
    </style> 


     <!-----html code------>  

    <div class="container">
    </div>
    
    </div>
   
    <div class="sign-form">
         <img src="./undraw_male_avatar_323b (2).svg" alt="" style="height: 50%; width:50%">
         <form action="" method="post" >
             <input type="text" placeholder="First Name" class="txt" name="fname"  required>
             <input type="text" placeholder="Last Name" class="txt" name="lname" required>
             <input type="email" placeholder="Email " class="txt" name="email" required>
             <input type="password" placeholder="password " class="txt" name="password" required minlength="6">
             <input type="submit" value="create a account" class="btn" name="btn-save" id="alert">
             <a href="login.php">Already Have an Account</a>
         </form>
    </div>

                   <!---java script code---->


    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>  -->
     <script src="./master/anime.min.js"></script>
    <script>
        
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
if(isset($_POST['btn-save'])){

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$password=$_POST['password'];
// $password =  password_hash($password,PASSWORD_BCRYPT);
$query = "INSERT INTO developer(`firstN`,`lastN`,`email`,`Pass`) VALUES ('$fname', '$lname', '$email', '$password')";
$result = mysqli_query($con, $query);
if ($result) {
    header("Location: ./login.php");
}
}


?>




    
</body>
</html>