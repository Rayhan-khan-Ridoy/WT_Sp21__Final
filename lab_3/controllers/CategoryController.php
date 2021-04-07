<?php 
require_once'models/db_config.php';



if(isset($_POST["add_category"])){
    insertCategory($_POST["name"]);
    
}


function insertCategory($name){
    $query="INSERT INTO categories VALUES(NULL,'$name')";
    execute($query);
    header("Location: allcategories.php");
}


function getCategory($id){
    $query="select * from categories where id=$id";
    $result=get($query);
    if (count($result)>0){
        return $result[0];
    }
    return false;
}


function getAllCategories($id){
    $query="select * from categories;
    $result=get($query);
    
    return $result;
}

?>