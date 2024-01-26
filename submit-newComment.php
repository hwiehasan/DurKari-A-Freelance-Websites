<?php 
//header('charset=utf-8');
session_start();
if(!isset($_SESSION['USER_ID'])){
    exit(header("Locatoin: ../login.html"));
}
else {
    $userID = $_SESSION['USER_ID'];
    $user_name = $_SESSION['NAME'];
    $username = $_SESSION['USER_NAME'];

}



$id = $_POST['projectID'];


//step 1
$commentText = $_POST['commentText'];


$date = date("Y-m-d H:i:s");



//step 3 : Database interaction
$connection = mysqli_connect("localhost","root", "", "myshop");
mysqli_set_charset($connection, "utf8");

if ($connection){
    $query = " INSERT INTO comment
        (commentProjectID, commentSenderID, commentSubmitDate, commentText, commentSenderName, commentSenderUsername ) 
        VALUES ( $id, $userID, '$date' , '$commentText', '$user_name' , '$username') ";
    //exit($query);
    
    
    
    if(mysqli_query($connection, $query)){
        //Add kala Successfuly
        //header("Location: ../admin/?page=listKala");
        exit(" نظر ثبت شد");
    }
    else {
        
        //exit(" خطا در ثبت نظر ");
        print($query);
    }
    
}
else print("Faild to connect DataBase !!");



?>