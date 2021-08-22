<div style="background: pink;">
<?php require_once('partial/header.php'); ?>
    <div class="container p-2" >
        <div class="d-flex justify-content-end p-2 ">
            <a href="process/create_com_html.php" class="btn btn-primary" >Create +</a>
           
        </div>
        <br>
        <br>
        
        <form action="" method="post">
           <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="Search by name" name = "search">
              <div class="input-group-append">
                <button class="btn btn-success" type="submit">research</button>
              </div>
           </div>
        </form>
        <hr>
        
        <?php
            require_once('database/database.php');
            $cumputers = "";
            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                //search
                $computers = searchBytitle($_POST);
            }else{
                //select
                $computers = allcomputer();
            }
            
            foreach ($computers as $computer):
                $description = readMore($computer['description'], 20);
        ?>
        <div class="card">
            <div class="card-body">
               <div class="d-flex">
                    <div class="card-image mr-5">
                        <img class="img-fluid" width="200" src="images/<?=$computer['profile']; ?>" alt="">
                    </div>
                    <div class="info">
                        <h1 class="display-4"><?=$computer['name']?> </h1>
                        <strong><?=$computer['price'] ?>$</strong> 
                        <p><?=$description?>....<a href="process/detail_com.php?id=<?=$computer['pro_id']?>" class="btn  btn-primary btn-sm">Readmore</a></p>
                        <p><?= $computer['date'] ?></p>
                    </div>
               </div>
                <div class="action d-flex justify-content-end">
                <a href="process/update_com_html.php?id=<?= $computer['pro_id'] ?>" class="btn btn-info btn-sm">Edit</a>
                <a href="process/delete_com_model.php?id1=<?= $computer['pro_id'] ?>" class="btn btn-danger btn-sm">Delete</a>
                    
                </div>
            </div>
        </div>
        <?php endforeach; ?> 
    </div>
<?php require_once('partial/footer.php'); ?>
</div>
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

