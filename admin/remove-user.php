<?php 
//header('charset=utf-8');
session_start();
if(!isset($_SESSION['USER_ID']) && $_SESSION['USER_ID'] != "admin" ){
    exit("شما دسترسی ندارید");
}


$userID = $_GET['userID'];



//step 3 : Database interaction
$connection = mysqli_connect("localhost","root", "", "myshop");
mysqli_set_charset($connection, "utf8");

if ($connection){

    $queryImageAddress = "select profileimage from user where id = $userID";
    $result = mysqli_query($connection, $queryImageAddress);
    $row = mysqli_fetch_array($result);

    if( $row['profileimage'] != "/files/images/user/nophoto.png") {
        unlink("../".$row['profileimage']);
    }



    $query = "delete from `user` where `id` = $userID; ";
    //exit($query);
    
    
    
    if(mysqli_query($connection, $query)){
        //Add kala Successfuly
        header("Location: ../admin/?page=usersManagement");
       
    }
    else {
        
        //exit(" خطا در ثبت نظر ");
        print($query);
        //exit(" خطا در حذف نظر");

    }
    
}
else print("Faild to connect DataBase !!");



?>