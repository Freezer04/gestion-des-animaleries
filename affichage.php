<?php
// $conn = mysqli_connect("localhost","root","","wedev") or die("Error:can't connect to server ");
include('connection.php');
$query = "SELECT d.`id`, d.`firstN`,d.`lastN`, t.html,t.cgi,t.ajax,t.js,t.php From developer d INNER JOIN technolgy t where t.id_developer = d.id ";

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
            text-align: center;
        }         */
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



    <div class="container" style="text-align: center;">
     <div class="jonboron" style="width: 100%; " >
            <div class="card">
              <div class="card-header">
                Featured
              </div>
              <div class="card-body">
                <h5 class="card-title">Special title treatment</h5>
                <table class="table table-dark table-hover table-bordered">
                    <thead>
                      <tr>
                        <!-- <th scope="col">id</th> -->
                        <th scope="col">first name</th>
                        <th scope="col">last name</th>
                        <th scope="col">html</th>
                        <th scope="col">cgi</th>
                        <th scope="col">ajax</th>
                        <th scope="col">js</th>
                        <th scope="col">php</th>
                        <th class="text-right">Actions</th>
                      </tr>
                    </thead>


  <!-- <script src="jquery-3.6.0.min.js"></script>
    <script src="./sweetalert2.all.min.js"></script>
    <script>

$('#btn').on('click', function() {
    swal({
  title: "Are you sure?",
  text: "Once deleted, you will not be able to recover this imaginary file!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    swal("Poof! Your imaginary file has been deleted!", {
      icon: "success",
    });
  } else {
    swal("Your imaginary file is safe!");
  }
});
        })



    </script> -->



  

            <!-----php code------>
  <tbody>    
    <?php  if($row = mysqli_num_rows($result)>0)   : ?>
      
    <?php while($data = mysqli_fetch_assoc($result)) : ?>
    <tr>
      <!-- <th scope="row"></th> -->
      <td><?= $data['firstN'];  ?></td>
      <td><?= $data['lastN']; ?></td>
      <td><?= $data['html']; ?></td>
      <td><?= $data['cgi']; ?></td>
      <td><?= $data['ajax']; ?></td>
      <td><?= $data['js']; ?></td>
      <td><?= $data['php']; ?></td>
      <td class="text-right" ><a href="./Asign.php?Asign=<?php echo $data["id"]?> ">
      <button class=" btn btn-primary" style="width: 80px;"  >Asign</button></a>
      <a href="./affichage.php?delete=<?php echo $data["id"]?>"><button class=" btn btn-danger" style="width: 80px;" onclick='return confirmation();'>Delete</button></a>
      <a href="./edite.php?edite=<?php echo $data["id"]?>"><button class="btn btn-success" style="width: 80px;">Edite</button></a>
    </tr>

    <?php endwhile; ?>
    <?php endif;  ?>

  </tbody>
</table>
              </div>
            </div>
      
      </div>
    
    </div>



           <!-----html code------>
           <!-- <div class="alert alert-danger" role="alert">
  delete success!
</div> -->

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


<script>
    function confirmation(){
        return confirm("Are You sure You want to delet this developer? ")
    }
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<?php
include('./connection.php');
if(isset($_GET['delete'])){
    $id=$_GET['delete'];
    $query = "DELETE FROM developer WHERE id = $id" ;
    $result = mysqli_query($con,$query);
}

?>
</body>
</html>