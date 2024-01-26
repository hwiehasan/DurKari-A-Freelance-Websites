<?php 
//header('charset=utf-8');
session_start();


$reqID = $_GET['reqID'];



//step 3 : Database interaction
$connection = mysqli_connect("localhost","root", "", "myshop");
mysqli_set_charset($connection, "utf8");

if ($connection){
    $query = "UPDATE `request` SET `accepted` = '0' WHERE `reqID` = $reqID ";
    //exit($query);
    
    
    
    if(mysqli_query($connection, $query)){
        //Add kala Successfuly
        header("Location: ../admin/?page=listOffer");
        exit(" درخواست رد شد");
    }
    else {
        
        //exit(" خطا در ثبت نظر ");
        print($query);
        //exit(" خطا در حذف نظر");

    }
    
}
else print("Faild to connect DataBase !!");



?>