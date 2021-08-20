<?php require_once('../partial/header.php'); ?>
    <div class="container p-4">
    <div class="d-flex justify-content-end p-3">
        <button class="btn btn-info" onclick="window.history.back();">&#8592; Back</button>
    </div>
      <?php
            if(isset($_POST['submit'])){
                $filename = $_FILES['file']['name'];
                $filesize = $_FILES['file']['size'];
                $filetype = $_FILES['file']['type'];
                $tmp_name = $_FILES['file']['tmp_name'];
               
                // echo $filetype;
                $dir = "../images/";

                if($filetype != "image/jpeg"){
                    echo "Only JPG images allowed";

                }else{
                   move_uploaded_file($tmp_name,$dir.$filename);
                    
                }

                require_once('../database/database.php');
                $isCreated = createcomputer($_POST);

                if($isCreated){
                    header('Location: http://localhost/computer_shop/?page=computer');
                }

            }

       ?>
        <form action="#" method="post" enctype="multipart/form-data">
            
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
                <input type="file" name="file">
            </div>
            
            <div class="form-group">
            <button type="submit" name = "submit" class="btn btn-primary btn-block">Create</button>
            </div>
        </form>
    </div>
