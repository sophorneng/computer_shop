<div  style="background: pink;">
<?php require_once('partial/header.php'); ?>
    <div class="container p-2" >
        <div class="d-flex justify-content-end p-2 ">
            <a href="process/create_com_html.php" class="btn btn-primary" >Create +</a>

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
            $cumputers = "";
            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                //search
                $computers = searchBytitle($_POST);
            }else{
                //select
                $computers = allcomputer();
            }
            
            foreach ($computers as $computer):
                $description = readMore($computer['description'], 200);
        ?>
        <div class="card">
            <div class="card-body">
               <div class="d-flex">
                    <div class="card-image mr-5">
                        <img class="img-fluid" width="200" src="<?=$computer['profile']; ?>" alt="dfsf">
                    </div>
                    <div class="info">
                        <h1 class="display-4"><?=$computer['name']?> </h1>
                        <strong><?=$computer['price'] ?>$</strong> 
                        <p><?=$description?><a href="process/detail_com.php?id=<?=$computer['pro_id']?>" class="btn  btn-primary btn-sm">Readmore</a></p>
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
    <footer class="bg-dark text-center text-white">
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                 email :  sophorn.eng@student.passerellesnumeriques.org
                <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
            </div>
            <!-- Copyright -->
      </footer>
<?php require_once('partial/footer.php'); ?>
</div>


