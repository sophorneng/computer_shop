<?php include_once('partial/header.php'); 
    include_once('partial/navbar.php');
    //get each page
    if (isset( $_GET['page'])){

        if ($_GET['page']=='computer'){
            include_once('pages/computer.php');

        } elseif ($_GET['page']=='electro'){
            include_once('pages/electro.php');
        

        } elseif ($_GET['page']=='login'){
            include_once('pages/login.php');
            
            
        } elseif ($_GET['page']=='home'){
            include_once('pages/home.php');
        }

    } else {
        include_once('pages/home.php');
    }
    

    include_once('partial/footer.php'); 
    ?>