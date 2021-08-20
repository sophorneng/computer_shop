<div style="background: pink;">
<?php require_once('partial/header.php'); ?>
<div class="container" >
        <div class="container p-4">
                <div class="d-flex justify-content-end p-2">
                <a href="process/create_e_html.php" class="btn btn-primary">Create +</a>
        </div>
        
        <form action="" method="post">
           <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="Search by title" name = "search">
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
                                            box-shadow: 0 .5rem 0.5rem black;
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