<div style="background: pink;">
<?php require_once('partial/header.php'); ?>
<div class="container" >
        <div class="container p-4">
                <div class="d-flex justify-content-end p-2">
                <a href="process/create_e_html.php" class="btn btn-primary">Create +</a>
        </div>
        
        <form action="" method="post">
           <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="Search by name" name = "search">
              <div class="input-group-append">
                <button class="btn btn-success" type="submit">research</button>
              </div>
           </div>
        </form>
        <br>
       
        <div class="row">
            
            <div class='card-columns'>
                <?php
                require_once('database/database.php');
                $electrices = "";
                if($_SERVER['REQUEST_METHOD'] == 'POST') {
                    //search
                    $electrices = searchByName($_POST);
                }else{
                    //select
                    $electrices = allElectric();
                }
                foreach ($electrices as $electrice):
                    $description = readMore($electrice['description'], 200);
                ?>
                        <div class="card m-2" style="background-color:#CCFFFF;height:47%;magin-top:10%;flex: 1 1 30rem;
                                           
                                            border-radius: .5rem;
                                            border: .1rem solid gray;
                                            position: relative;">                      
                               <div class="d-flex">
                                    <div class="card-image mr-4">
                                                <img class="img-fluid"src="image_ele/<?= $electrice['profile']?>"  width="200"  height="190" alt="">
                                    </div>
                                    <div class="info" >
                                            <h1 class="display-5" ><?= $electrice['name']?></h1>
                                            
                                            <strong><?= $electrice['price'].'$'?></strong> <br>
                                            <p><?=$description?>...<a href="process/detail_e.php?id=<?=$electrice['pro_id']?>" class="btn  btn-primary btn-sm">....Readmore</a></p>
                                            <p ><?=$electrice['date'] ?></p>
                                    </div>
                                    
                                        
                                </div>
                                <div class="action d-flex justify-content-end">
                                      <a href="process/update_e_html.php?id=<?=$electrice['pro_id'] ?>" class="btn btn-info btn-sm">Edit</a>
                                      <a href="process/delete_e_model.php?id=<?= $electrice['pro_id'] ?>" class="btn btn-danger btn-sm">Delete</a>
                    
                                </div>
                            
                                
                        
                        </div>
                        <?php endforeach; ?>
                </div>
            </div>
        </div>
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