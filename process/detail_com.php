<?php require_once('../partial/header.php'); ?>
    <div class="container p-4">
    <div class="container mt-3 p-3">
    <div class="d-flex justify-content-end p-3">
    <button class="btn btn-info" onclick="window.history.back();">&#8592; Back</button>
    </div>
        <?php
            require_once('../database/database.php');
            $id = $_GET['id'];
            $computers= selectOneComputer($id);
            foreach ($computers as $computer):
                $description = readMore($computer['description'], 300);
        ?>
        <div class="card">
            <div class="card-body">
               <div class="d-flex">
               <div class="card" style="width: 12rem;">
                <img class="card-img-top" src="<?=$computer['profile'] ?>">
                <div class="card-body">
                    <h3 class="card-title"><?=$computer['name'] ?></h3>
                    <h6 class="card-text"><?=$computer['price'] ?></h6>
                    <p class="card-text"><?=$computer['description'] ?></p>
                    <p class="card-text"><?=$computer['date'] ?></p>
                    
                </div>
                </div>
               </div>
                
                </div>
            </div>
        </div>
        <?php endforeach; ?> 
    </div>
    
<?php require_once('../partial/footer.php'); ?>