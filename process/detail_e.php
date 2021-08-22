<?php require_once('../partial/header.php'); ?>
    <div class="container p-4">
    <div class="container mt-3 p-3">
    <div class="d-flex justify-content-end p-3">
    <button class="btn btn-info" onclick="window.history.back();">&#8592; Back</button>
    </div>
        <?php
            require_once('../database/database.php');
            $id = $_GET['id'];
            $electrices = selectOneComputer($id);
            foreach ($electrices as $electrice):
                $description = readMore($electrice['description'], 300);
        ?>
        <div class="card">
            <div class="card-body">
               <div class="d-flex">
                    <div class="card" style="width: 12rem;">
                        <img class="card-img-top" src="../image_ele/<?=$electrice['profile'] ?>">
                    </div>
                    <div class="card-body">
                        <h3 class="card-title"><?=$electrice['name'] ?></h3>
                        <h6 class="card-text"><?=$electrice['price'] ?></h6>
                    
                        <p class="card-text"><?=$electrice['date'] ?></p>
                        <p class="card-text"><?=$electrice['description'] ?></p>
                    </div>
               
            </div>
        </div>
        <?php endforeach; ?> 
    </div>
    
<?php require_once('../partial/footer.php'); ?>