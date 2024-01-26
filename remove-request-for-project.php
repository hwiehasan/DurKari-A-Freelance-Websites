<?php 
//header('charset=utf-8');
session_start();
if(!isset($_SESSION['USER_ID'])){
    exit(header("Locatoin: ../login.html"));
}
else {
    $freelancerID = $_SESSION['USER_ID'];
    

}

$projectID = $_GET['projectID'];


//step 3 : Database interaction
$connection = mysqli_connect("localhost","root", "", "myshop");
mysqli_set_charset($connection, "utf8");

if ($connection){
    $query = " delete from request
        where projectID = $projectID and freelancerID = $freelancerID ";
    //exit($query);
    
    
    
    if(mysqli_query($connection, $query)){
        //Add kala Successfuly
        header('Location: project.php?projectID='.$projectID.'');
        exit(" درخواست حذف شد");
    }
    else {
        
        //exit(" خطا در ثبت نظر ");
        print($query);
    }
    
}
else print("Faild to connect DataBase !!");



?>