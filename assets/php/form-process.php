<?php 
//header('charset=utf-8');

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['msg_subject'];
$message = $_POST['message'];
$date = date("Y-m-d H:i:s");



//step 3 : Database interaction
$connection = mysqli_connect("localhost","root", "", "myshop");
mysqli_set_charset($connection, "utf8");

if ($connection){
    $query = " INSERT INTO messages
        (name, email, subject, message, submitDate) 
        VALUES ('$name', '$email', '$subject', '$message', '$date') ";
    //exit($query);
    
    
    
    if(mysqli_query($connection, $query)){
        //Add kala Successfuly
        //header("Location: ../admin/?page=listKala");
        exit(" پیام شما ثبت شد");
    }
    else {
        
        //exit(" خطا در ثبت نظر ");
        print($query);
    }
    
}
else print("Faild to connect DataBase !!");



?>