<?php

$conn = mysqli_connect("localhost","root", "", "myshop");
mysqli_set_charset($conn , "utf8");
if($conn){
    //اگه جایی به خطا خورد به کاربر نشون نده بلکه بازم بره به صفحه قبلش
    try{
    if(isset($_POST['newSliderSetting'])) {
        // بررسی آیا اطلاعات جدید برای اسلایدر ارسال شده است
        for ($i = 1; $i <= 3; $i++) {



            $newSliderDesc = $_POST['newSliderDesc'.$i];
            $oldSliderDesc = $_POST['oldSliderDesc'.$i];
            $newSliderPic = $_FILES['newSliderPic'.$i]['name'];
            $oldSliderPic = $_POST['oldSliderPic'.$i];

            if(!empty($newSliderDesc) || !empty($newSliderPic)) {
                // اگر توضیحات یا تصویر جدید برای اسلایدر موجود است




                //عکس پر متن خالی
                if(!empty($newSliderPic) && empty($newSliderDesc)) {
                    // اگر تصویر جدید انتخاب شده است
                    $targetDir = "../assets/img/slider/"; // مسیر ذخیره تصاویر
                    $targetFile = $targetDir . basename($_FILES['newSliderPic'.$i]['name']);
                    

                    // ذخیره تصویر جدید
                    move_uploaded_file($_FILES['newSliderPic'.$i]['tmp_name'], $targetFile);

                    // حذف تصویر قبلی
                    if(!empty($oldSliderPic)) {
                        unlink($oldSliderPic);
                    }

                    // آدرس تصویر جدید
                    $newSliderPic = $targetFile;

                    $newSliderDesc = $oldSliderDesc;

                    // ذخیره تغییرات در پایگاه داده
                    $updateQuery = "UPDATE slider SET description = '$newSliderDesc', pic = '$newSliderPic' WHERE id = '$i'";
                    mysqli_query($conn, $updateQuery);
                }

                //عکس خالی متن پر
                else if(empty($newSliderPic) && !empty($newSliderDesc)) {
                 
                    $newSliderPic = $oldSliderPic;

                    // ذخیره تغییرات در پایگاه داده
                    $updateQuery = "UPDATE slider SET description = '$newSliderDesc', pic = '$newSliderPic' WHERE id = '$i'";
                    mysqli_query($conn, $updateQuery);
                }

                //عکس پر متن پر
                else if(!empty($newSliderPic) && !empty($newSliderDesc)) {
                    // اگر تصویر جدید انتخاب شده است
                    $targetDir = "../assets/img/slider/"; // مسیر ذخیره تصاویر
                    $targetFile = $targetDir . basename($_FILES['newSliderPic'.$i]['name']);
                    

                    // ذخیره تصویر جدید
                    move_uploaded_file($_FILES['newSliderPic'.$i]['tmp_name'], $targetFile);

                    // حذف تصویر قبلی
                    if(!empty($oldSliderPic)) {
                        unlink($oldSliderPic);
                    }

                    // آدرس تصویر جدید
                    $newSliderPic = $targetFile;

                    // ذخیره تغییرات در پایگاه داده
                    $updateQuery = "UPDATE slider SET description = '$newSliderDesc', pic = '$newSliderPic' WHERE id = '$i'";
                    mysqli_query($conn, $updateQuery);
                }
                //عکس خالی متن خالی
                else if(empty($newSliderPic) && empty($newSliderDesc)) {
                 
                    $newSliderPic = $oldSliderPic;
                    $newSliderDesc = $oldSliderDesc;

                    // ذخیره تغییرات در پایگاه داده
                    $updateQuery = "UPDATE slider SET description = '$newSliderDesc', pic = '$newSliderPic' WHERE id = '$i'";
                    mysqli_query($conn, $updateQuery);
                }
            
            
            }
        }

        echo "تغییرات با موفقیت ثبت شدند.";
        header("Location: ../admin/?page=sliderSetting");
    }

}
    catch (Exception $e) {
        header("Location: ../admin/?page=sliderSetting");
    }
} else {
    echo 'شما به این بخش دسترسی ندارید.';
    exit();
}
?>