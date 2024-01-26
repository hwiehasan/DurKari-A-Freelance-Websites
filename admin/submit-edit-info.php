<?php
// دستور اتصال به سرور پایگاه داده و ایجاد لینک ارتباطی
$link = mysqli_connect("localhost","root","","myshop");
mysqli_set_charset($link, "utf8mb4");
// بررسی صحت اتصال به سرور پایگاه داده
if(!$link)
	exit("<p>اتصال به پایگاه داده با خطا مواجه شد !</p>");
else print("<p>اتصال به پایگاه داده با موفقیت انجام شد.</p>");	

// ذخیره اطلاعات دریافت شده از سمت کلاینت در متغیرها

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];
$cv = $_POST['cv'];








//در صورتی که تصویر کاربر نیز تغییر کند
if(isset($_FILES["profileimage"]) && is_uploaded_file($_FILES['profileimage']['tmp_name']))
{

	// آپلود فایل
	if (move_uploaded_file($_FILES['profileimage']['tmp_name'], "../files/images/user/" . time() . $_FILES['profileimage']['name'])) {

		// آدرس تصویر
		$imageAddress = "/files/images/user/" . time() . $_FILES['profileimage']['name'];
		if($_POST['oldImage'] != "/files/images/user/nophoto.png")
    	{
            unlink($_POST['oldImage']);
    	}
	}

}
// تصویر پیش‌فرض
else {
$imageAddress = $_POST['oldImage'];
}









session_start();
$userID = $_SESSION['USER_ID'];
// نوشتن کوئری مورد نیاز
$query = "update `user` set 
`name` = '$name'        , 
`email` = '$email'      , 
`phone` = '$phone'    , 
`gender` = '$gender'  , 
`cv` = '$cv' ,
`profileimage`  = '$imageAddress' 
where id = $userID
";

// اجرای کوئری در پایگاه داده
if(mysqli_query($link , $query)) 
	header("Location: ../admin/?page=accountSetting");
else print("خطا در ویرایش اطلاعات .");

mysqli_close($link);

?>