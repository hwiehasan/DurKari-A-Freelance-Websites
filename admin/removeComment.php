<?php 
//header('charset=utf-8');
session_start();
if(!isset($_SESSION['USER_ID']) && $_SESSION['USER_ID'] != "admin" ){
    exit("شما دسترسی ندارید");
}


$commentID = $_POST['commentID'];



//step 3 : Database interaction
$connection = mysqli_connect("localhost","root", "", "myshop");
mysqli_set_charset($connection, "utf8");

if ($connection){
    $query = "UPDATE `comment` SET `allow` = '0' WHERE `id` = $commentID; ";
    //exit($query);
    
    
    
    if(mysqli_query($connection, $query)){
        //Add kala Successfuly
        header("Location: ../admin/?page=comments");
       
    }
    else {
        
        //exit(" خطا در ثبت نظر ");
        print($query);
        //exit(" خطا در حذف نظر");

    }
    
}
else print("Faild to connect DataBase !!");



?>