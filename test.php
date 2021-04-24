<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<body>

      <div class="container">
      <div class="jonboron">
            <div class="card">
              <div class="card-header">
               List of developers and thoes technolgy:
              </div>
              <div class="card-body">
                <!-- <h5 class="card-title">Special title treatment</h5> -->
                <table class="table table-dark table-striped table-hover table-bordered">
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
      <th scope="col">Actions</th>
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
      <td><a href="./Asign.php?Asign=<?php echo $data["id"]?> ">
      <button class="btn btn-primary"  >Asign a formation</button></a>
      <a href="./affichage.php?delete=<?php echo $data["id"]?>"><button class="btn btn-danger" onclick='return confirmation();'>Delete</button></a>
      <a href="./edite.php?edite=<?php echo $data["id"]?>"><button class="btn btn-success">Edite</button></a>
      </td>
    </tr>

    <?php endwhile; ?>
    <?php endif;  ?>

  </tbody>
</table>
              </div>
            </div>
      
      </div>
    
    </div>
    
</body>
</html>


