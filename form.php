<?php
// $conn = mysqli_connect("localhost","root","","wedev") or die("Error:can't connect to server ");
include('connection.php');
$query = "SELECT d.`id`, d.`firstN`,d.`lastN`, t.formation,t.date From developer d INNER JOIN formation t where t.id_developer = d.id ";

$result = mysqli_query($con,$query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>


           <!-----css code------>    

    <style>
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



           <!-----html code------>

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

<table class="table">
  <thead>
    <tr>
      <!-- <th scope="col">id</th> -->
      <th scope="col">First name</th>
      <th scope="col">Last name</th>
      <th scope="col">Formation</th>
      <th scope="col">Date</th>
      
    </tr>
  </thead>


  

            <!-----php code------>
  <tbody>    
    <?php  if($row = mysqli_num_rows($result)>0)   : ?>
      
    <?php while($data = mysqli_fetch_assoc($result)) : ?>
    <tr>
      <!-- <th scope="row"></th> -->
      <td><?= $data['firstN'];  ?></td>
      <td><?= $data['lastN']; ?></td>
      <td><?= $data['formation']; ?></td>
      <td><?= $data['date']; ?></td>
      
      <td><a href="./Asign.php?Asign=<?php echo $data["id"]?> ">
      <button class="btn btn-success"  >Edit</button>
    </a>
    <a href="./form.php?delete=<?php echo $data["id"]?> ">
      <!-- <button class="btn btn-danger" onclick='return confirmation();'  >delete</button> -->
    </a>
    
      <!-- <button type="delete"  class="btn">Delete </button></a></td> -->
    </tr>

    <?php endwhile; ?>
    <?php endif;  ?>

  </tbody>
</table>
<!-- <script>
    function confirmation(){
        return confirm("Are You sure You want to delet this developer? ")
    }
</script> -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<?php
// include('./connection.php');
// if(isset($_GET['delete'])){
//     $id=$_GET['delete'];
//     $query = "DELETE FROM formation WHERE id_developer = $id" ;
//     $result = mysqli_query($con,$query);
// }

?>
</body>
</html>