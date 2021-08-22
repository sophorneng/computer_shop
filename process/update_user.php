<?php require_once('../partial/header.php'); ?>
    <div class="container p-4">
        <?php  
            require_once('../database/database.php');
            $id= $_GET['id'];

            $users = selectOneUser($id);
            foreach($users as $user):

        ?>
        <form action="update_user_model.php" method="post">
            <div class="form-group">
                <input type="hidden" class="form-control" value="<?= $user['userID'] ?>" name="userID">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" value="<?= $user['username'] ?>" name="username">
            </div>
            <div class="form-group">
                <input type="number" class="form-control" value="<?= $user['password'] ?>" name="password">
            </div>
            <div class="form-group">
                <input type="file" class="form-control" value="<?= $user['image'] ?>" name="file">
            </div>
            
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Create</button>
            </div>
        </form>
        <?php endforeach; ?>
    </div>
