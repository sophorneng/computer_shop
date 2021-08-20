<?php require_once('../partial/header.php'); ?>
    <div class="container p-4">
        <?php  
            require_once('../database/database.php');
            $id= $_GET['id'];

            $computers = selectOneComputer($id);
            foreach($computers as $computer):

        ?>
        <form action="update_e_model.php" method="post">
            <div class="form-group">
                <input type="hidden" class="form-control" value="<?= $computer['pro_id'] ?>" name="pro_id">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" value="<?= $computer['name'] ?>" name="name">
            </div>
            <div class="form-group">
                <input type="number" class="form-control" value="<?= $computer['price'] ?>" name="price">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" value="<?= $computer['description'] ?>" name="description">
            </div>
            <div class="form-group">
                <input type="file" class="form-control" value="<?= $computer['profile'] ?>" name="file">
            </div>
            
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Create</button>
            </div>
        </form>
        <?php endforeach; ?>
    </div>
