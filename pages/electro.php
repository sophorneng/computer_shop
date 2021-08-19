<?php require_once('partial/header.php'); ?>
    <div class="container p-4">
        <div class="d-flex justify-content-end p-2">
            <a href="process/create_e_html.php" class="btn btn-primary">Create +</a>
        </div>
        <br>
        <br>
        <form action="" method="post">
           <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="Search by title" name = "search">
              <div class="input-group-append">
                <button class="btn btn-success" type="submit">research</button>
              </div>
           </div>
        </form>
        <hr>
        <br>
        <br>
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
        <div class="card">
            <div class="card-body">
               <div class="d-flex">
               <div class="card" style="width:200px; hight:">
                <img class="card-img-top" src="<?=$electrice['profile'] ?>">
                <div class="card-body">
                    <h3 class="card-title"><?=$electrice['name'] ?></h3>
                    <h6 class="card-text"><?=$electrice['price'] ?></h6>
                    <p><?=$description?><a href="process/detail_e.php?id=<?=$electrice['pro_id']?>" class="btn  btn-primary btn-sm">Readmore</a></p>
                    <p class="card-text"><?=$electrice['date'] ?></p>
                    
                </div>
                </div>
               </div>
                <div class="action d-flex justify-content-end">
                <a href="process/update_e_html.php?id=<?=$electrice['pro_id'] ?>" class="btn btn-info btn-sm">Edit</a>
                <a href="process/delete_e_model.php?id=<?= $electrice['pro_id'] ?>" class="btn btn-danger btn-sm">Delete</a>
                    
                </div>
            </div>
        </div>
        <?php endforeach; ?> 
    </div>
    <footer class="bg-dark text-center text-white">
      
  
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                 email :  sophorn.eng@student.passerellesnumeriques.org
                <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
            </div>
            <!-- Copyright -->
      </footer>
<?php require_once('partial/footer.php'); ?>