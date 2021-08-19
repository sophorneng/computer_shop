<?php require_once('../partial/header.php'); ?>
    <div class="container p-4">
        <form action="create_e_model.php" method="post">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Name" name="name">
            </div>
            <div class="form-group">
                <input type="number" class="form-control" placeholder="price" name="price">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="description" name="description">
            </div>
            <div class="form-group">
                <input type="file" class="form-control" placeholder="Image URL" name="image_url">
            </div>
            
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Create</button>
            </div>
        </form>
    </div>
