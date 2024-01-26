<?php 
//header('charset=utf-8');
session_start();


$reqID = $_GET['reqID'];
$freelancerID = $_GET['freelancerID'];
$projectID = $_GET['projectID'];



//step 3 : Database interaction
$connection = mysqli_connect("localhost","root", "", "myshop");
mysqli_set_charset($connection, "utf8");

if ($connection){
    $query = "UPDATE `request` SET `accepted` = '1' WHERE `reqID` = $reqID ";
    //exit($query);
    
    
    
    if(mysqli_query($connection, $query)){


        $queryUpdateProject = "Update project SET freelancerID = $freelancerID , projectStatus = 1 WHERE projectID = $projectID ";
        $result3 = mysqli_query($connection , $queryUpdateProject);






        //Add kala Successfuly
        header("Location: ../admin/?page=listOffer");
        exit(" درخواست تایید شد");
    }
    else {
        
        //exit(" خطا در ثبت نظر ");
        print($query);
        //exit(" خطا در حذف نظر");

    }
    
}
else print("Faild to connect DataBase !!");



?>