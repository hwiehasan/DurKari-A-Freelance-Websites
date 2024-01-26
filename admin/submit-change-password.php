<?php
// دستور اتصال به سرور پایگاه داده و ایجاد لینک ارتباطی
$link = mysqli_connect("localhost","root","","myshop");
mysqli_set_charset($link, "utf8mb4");
// بررسی صحت اتصال به سرور پایگاه داده
if(!$link)
	exit("<p>اتصال به پایگاه داده با خطا مواجه شد !</p>");
//else print("<p>اتصال به پایگاه داده با موفقیت انجام شد.</p>");	

// ذخیره اطلاعات دریافت شده از سمت کلاینت در متغیرها
$oldpass = $_POST['oldpassword'];
$newpass = $_POST['newpassword'];
$renewpass = $_POST['renewpassword'];

if($newpass != $renewpass)
	exit("رمز عبور جدید با تکرار رمز عبور جدید برابر نیست !");
if (strlen($newpass) < 8) {
    exit("رمز عبور باید حداقل 8 کاراکتر داشته باشد");
}

if (!preg_match('/[0-9]/', $newpass)) {
    exit("رمز عبور باید حداقل یک عدد داشته باشد");
}

if (!preg_match('/[A-Z]/', $newpass)) {
    exit("رمز عبور باید حداقل یک حرف بزرگ داشته باشد");
}

if (!preg_match('/[!@#$%^&*(),.?":{}|<>]/', $newpass)) {
    exit("رمز عبور باید حداقل یک نماد داشته باشد");
}





session_start();
$userID = $_SESSION['USER_ID'];

$query = "select password from user where id = $userID";
$result = mysqli_query($link,$query);
$userInfo = mysqli_fetch_array($result);

$hashedOldPassword = $userInfo['password'];
if ( password_verify( $oldpass, $hashedOldPassword) ) {
	//پسورد بطور صحیح وارد شده
	
	$hashedNewPassword = password_hash($newpass, PASSWORD_DEFAULT);
	$queryNewPassword = "update `user` set `password` = '$hashedNewPassword'  where id = $userID ";

	// اجرای کوئری در پایگاه داده
	if(mysqli_query($link , $queryNewPassword)) 
		print("رمز عبور با موفقیت تغییر  یافت");
	else print("خطا در تغییر رمز عبور .");




}
	
mysqli_close($link);

?>