
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>
<body>
    <div class="p-4">
    <div class="d-flex justify-content-end p-2 ">
        <a href="process/create_user.php" class="btn btn-info">New Acount</a>
        </div>
    
    </div>
    <table class="table table-striped">
        <tr>
            
            <th>username</th>
            <th>password</th>
            <th>image</th>
            <th>Role</th>
            <td>action</td>
        </tr>

        <?php 
           require_once('database/database.php');
           $result = getAllUser();
           foreach ($result as $user) :
              if($user ==="admind")
         ?>
          <tr>
            <td><?php echo $user["username"]; ?></td>
            <td><?php echo $user["password"]; ?></td>
            <td><img style="border-radius: 30%;" class="img-fluid" width="100" hight="10" src="profile_user/<?=$user['image']; ?>" alt="dfsf"></td>
            <td><?php echo $user["Role"]; ?></td>
            <td>
            <a href="process/update_user.php?id=<?php echo $user['user_id'] ?>" class="btn btn-info btn-sm">Edit</a>
            <a href="process/delete_user.php?id=<?php echo $user['user_id'] ?>" class="btn btn-danger btn-sm">Delete</a>
            </td>
          </tr>
        <?php endforeach; ?>
    </table>
    
</body>
</html>
<footer class="bg-dark text-center text-white">
  <!-- Grid container -->
  <div class="container p-4 pb-0">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a class="btn btn-outline-light btn-floating m-1" href="https://web.facebook.com/" role="button"
        ><i class="fab fa-facebook-f"></i
      ></a>

      <!-- Twitter -->
      <a class="btn btn-outline-light btn-floating m-1" href="https://fontawesome.com/v5.15/icons/twitter" role="button"
        ><i class="fab fa-twitter"></i
      ></a>

      <!-- Google -->
      <a class="btn btn-outline-light btn-floating m-1" href="https://www.google.com/search?q=fab+fa-google&rlz=1C1BNSD_enKH942KH942&oq=fab+fa-google&aqs=chrome..69i57j0i512l4j0i22i30.981j0j4&sourceid=chrome&ie=UTF-8" role="button"
        ><i class="fab fa-google"></i
      ></a>

      <!-- Instagram -->
      <a class="btn btn-outline-light btn-floating m-1" href="https://fontawesome.com/v5.15/icons/instagram" role="button"
        ><i class="fab fa-instagram"></i
      ></a>

      <!-- Linkedin -->
      <a class="btn btn-outline-light btn-floating m-1" href="https://fontawesome.com/v5.15/icons/linkedin-in" role="button"
        ><i class="fab fa-linkedin-in"></i
      ></a>

      <!-- Github -->
      <a class="btn btn-outline-light btn-floating m-1" href="https://github.com/" role="button"
        ><i class="fab fa-github"></i
      ></a>
    </section>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2020 Copyright:
    <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
  </div>
  <!-- Copyright -->
</footer>