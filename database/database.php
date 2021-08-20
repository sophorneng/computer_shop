<?php 
// connect to database
    function db() {
        return new mysqli('localhost', 'root', '', 'sophorn_shop');
    }

    // to get all from database
    function allcomputer() {
        return db()->query("SELECT * FROM catagory inner join product on catagory.cat_id = product.cat_id where  catagory.name = 'computer'");
    };

    // create new computer
    function createcomputer($value) {
        $name = $value['name'];
        $price = $value['price'];
        $description = $value['description'];
        $profile =$_FILES['file']['name']; 
        $time = date("Y-m-d")." ".date("h:i:s");
        $cat_id = 1;
        return db()->query("INSERT INTO product (name, price, description, profile, cat_id ) VALUES ('$name', '$price', '$description', '$profile',  '$cat_id')");
    }

     // delete computer
    function deletecomputer($id) {
        return db()->query("DELETE FROM product WHERE pro_id = $id");
    }

    //update computer
    function updateComputer($value) {
        $name = $value['name'];
        $price = $value['price'];
        $description = $value['description'];
        $profile = $value['file'];
        $id = $value['pro_id'];
        return db()->query("UPDATE product SET name = '$name', price='$price', description='$description', profile='$profile'  WHERE pro_id = $id");
        
    }
    
    // update computer by id
    function selectOneComputer($id) {
        return db()->query("SELECT * FROM product WHERE pro_id = $id");
    }
    

    //search computer
    function searchBytitle($name) {
        $name = $name['search'];
        return db()->query("SELECT * FROM product where name like '%$name%'");
        
    }


    // get all electric
    function allElectric() {
        return db()->query("SELECT * FROM catagory inner join product on catagory.cat_id = product.cat_id where  catagory.name = 'electric'");
    }

    //create electrict
    function createElectric($value) {
        $name = $value['name'];
        $price = $value['price'];
        $description = $value['description'];
        $profile =$_FILES['file']['name']; 
        $time = date("Y-m-d")." ".date("h:i:s");
        $cat_id = 2;
        return db()->query("INSERT INTO product (name, price, description, profile, cat_id ) VALUES ('$name', '$price', '$description', '$profile',  '$cat_id')");
    }
   
    // select one eletrict
    function selectOneElectrict($id) {
        return db()->query("SELECT * FROM product WHERE pro_id = $id");
    }
    //delete electrictz
    function deleteElectric($id) {
        return db()->query("DELETE FROM product WHERE pro_id = $id");
    }

    // search electric by name
    function searchByName($name) {
        $name = $name['search'];
        return db()->query("SELECT * FROM product where name like '%$name%'");

        function selectEOnelectric($id) {
            return db()->query("SELECT * FROM product WHERE pro_id = $id");
        }
        
    }

    //read more
    function readMore($text,$number){
        return substr($text,0,$number);    
      
    }
