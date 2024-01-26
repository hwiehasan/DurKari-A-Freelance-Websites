<?php 
//header('charset=utf-8');
session_start();
if(!isset($_SESSION['USER_ID'])){
    exit(header("Locatoin: ../login.html"));
}
else {
    $userID = $_SESSION['USER_ID'];
}

$pID = $_GET['pID'];


$connection = mysqli_connect("localhost","root", "", "myshop");
mysqli_set_charset($connection, "utf8");

if ($connection){
$queryImageAddress = "select image from project where projectID = $pID";

$result = mysqli_query($connection, $queryImageAddress);
$row = mysqli_fetch_array($result);
if($row['image'] != "/files/images/project/nophoto.png")
    {
        //اگه عکس وجود داشت
        if(file_exists($row['image'] ))
            unlink($row['image']);
    }









    $queryDelete = " Delete from project where projectID = $pID and userID = $userID ";
    //exit($query);
    
    
    if(mysqli_query($connection, $queryDelete)){
        //Add project Successfuly
        //یک واحد از تعداد کل پروه ها کم شه
        $queryCount = "update stats set totalproject = totalproject-1";
        mysqli_query($connection, $queryCount);



        header("Location: ../admin/?page=listProject");
    }
    else {
        
        exit(" خطا در ثبت کالا ");
    }
    
}
else print("Faild to connect DataBase !!");



?>