<?php 
//header('charset=utf-8');
session_start();
if(!isset($_SESSION['USER_ID'])){
    exit(header("Locatoin: ../login.html"));
}
else {
    $userID = $_SESSION['USER_ID'];
}


$connection = mysqli_connect("localhost","root", "", "myshop");
mysqli_set_charset($connection, "utf8");
if(!$connection)
    exit("خطا در اتصال به پایگاه داده");

$projectID = $_POST['projectID'];

if(isset($_POST['deleteProject']))
{
    //کالا را حذف کنه

    //1. حذف تصویر کالا
    if($_POST['oldImage'] != "/files/images/project/nophoto.png")
    {
        //اگه عکس وجود داشت
        if(file_exists($_POST['oldImage'] ))
            unlink($_POST['oldImage']);
    }
        



    //2. حذف نظرات مربوط به کالا
    $query = "Delete from comment where commentProjectID = $projectID";
    mysqli_query($connection , $query);




    //3. حذف خود کالا
    $query = "Delete from project where projectID = $projectID";
    mysqli_query($connection , $query);

    exit("پروژه با موفقیت حذف شد");



}
else if (isset($_POST['editProject']))
{
    //پروژه رو ویرایش کنه


    $projectName = $_POST['projectName'];
    $projectDesc = $_POST['projectDesc'];
    $projectPrice = $_POST['projectPrice'];
    $category = $_POST['category'];
    $date = date("Y-m-d H:i:s");





    //در صورتی که تصویر کالا نیز تغییر کند
    if(isset($_FILES["projectImage"]) && is_uploaded_file($_FILES['projectImage']['tmp_name']))
    {
    // آپلود فایل
    if (move_uploaded_file($_FILES['projectImage']['tmp_name'], "../files/images/project/" . time() . $_FILES['projectImage']['name'])) {

        // آدرس تصویر
        $imageAddress = "/files/images/project/" . time() . $_FILES['projectImage']['name'];

    }

    }
    // تصویر پیش‌فرض
    else {
    $imageAddress = $_POST['oldImage'];
    }
        



    
    $query = "update project set name= '$projectName' , description = '$projectDesc' ,  price = $projectPrice , category = $category , editDate = '$date', image = '$imageAddress' where projectID = $projectID ";

    
    mysqli_query($connection , $query);

    //exit($query);


    

    
}
else
{
    exit("خطا");
}




?>