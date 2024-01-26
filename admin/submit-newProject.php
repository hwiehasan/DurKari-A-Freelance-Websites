<?php 
//header('charset=utf-8');
session_start();
if(!isset($_SESSION['USER_ID'])){
    exit(header("Locatoin: ../login.html"));
}
else {
    $userID = $_SESSION['USER_ID'];
}


//step 1 : Get information at clainet
$projectName = $_POST['projectName'];
$projectDesc = $_POST['projectDesc'];
$projectPrice = $_POST['projectPrice'];
$category = $_POST['category'];

$date = date("Y-m-d H:i:s");

//upload file
if (isset($_FILES['projectImage']) && move_uploaded_file($_FILES['projectImage']['tmp_name'],"../files/images/project/".time().$_FILES['projectImage']['name'])) {
    
    //image address
    $imageAddress = "/files/images/project/".time().$_FILES['projectImage']['name'];
    
}
//defalt image
else $imageAddress = "/files/images/project/nophoto.png";


//step 3 : Database interaction
$connection = mysqli_connect("localhost","root", "", "myshop");
mysqli_set_charset($connection, "utf8");
if ($connection){
    $query = " INSERT INTO project
        (name, description, price, category, userID, image, submitDate) 
        VALUES ('$projectName', '$projectDesc', $projectPrice , $category, $userID,'$imageAddress', '$date') ";
    //exit($query);
    
    
    if(mysqli_query($connection, $query)){
        //Add project Successfuly
        //یک واحد به تعداد کل پروه ها اضافه شه
        $queryAddCount = "update stats set totalproject = totalproject+1";
        mysqli_query($connection, $queryAddCount);



        header("Location: ../admin/?page=listProject");
    }
    else {
        
        exit(" خطا در ثبت کالا ");
    }
    
}
else print("Faild to connect DataBase !!");



?>