<?php
//session_start();
$link = mysqli_connect("localhost","root","","myshop");
mysqli_set_charset($link, "utf8mb4");
if(!$link)
	exit("<p>اتصال به پایگاه داده با خطا مواجه شد !</p>");
	
$userID = $_SESSION['USER_ID']; 	
$query = "SELECT * FROM `user` where id = $userID";
// اجرای کوئری در پایگاه داده - ذخیره ی نتیجه در یک متغیر
$result = mysqli_query($link , $query); 
$userInfo = mysqli_fetch_array($result);
mysqli_close($link);
?>



<div id="profileimage">
	<img src="<?php print($userInfo['profileimage']); ?>" width="150px" height="150px" />
</div>




<form action="submit-edit-info.php" method="post" enctype="multipart/form-data">


<p>
<label for="profileimage">انتخاب تصویر پروفایل :</label>
<input type="file" name="profileimage"/>
<input type="hidden" name="oldImage"  value="<?php print($userInfo['profileimage']); ?>"/>
</p>


<p>
<label for="username">نام کاربری :</label>
<input type="text" name="username" id="username" maxlength="10" value="<?php print($userInfo['username']); ?>" disabled  />
</p>

<p>
نام و نام خانوادگی :
<input type="text" name="name" placeholder="لطفا نام و نام خانوادگی را وارد کنید ..." value="<?php print($userInfo['name']); ?>" />
</p>

<p>
ایمیل:
<input type="email" name="email" required placeholder="example@gmail.com" size="70" value="<?php print($userInfo['email']); ?>" />
</p>

<p>
موبایل:
<input type="text" name="phone" required placeholder="09368413419" size="11" value="<?php print($userInfo['phone']); ?>" />
</p>

<p>
رزومه:<br/>
<textarea name="cv" cols="20" rows="10">
<?php print($userInfo['cv']); ?>
</textarea>
</p>

<p>
جنسیت:
<?php 
if($userInfo['gender'] == 0)
{
print('
	<input type="radio" name="gender" value="0" checked />مرد
	<input type="radio" name="gender" value="1" />زن
	');
}
else {
print('
	<input type="radio" name="gender" value="0" />مرد
	<input type="radio" name="gender" value="1" checked />زن
	');	
}
?>
</p>


<p>
<input type="submit" value="ویرایش اطلاعات" />
</p>

</form>





<form action="submit-change-password.php" method="post">
<p>
<label for="oldpassword">رمز عبور قبلی :</label>
<input type="password" name="oldpassword" />
</p>

<p>
<label for="newpassword">رمز عبور جدید :</label>
<input type="password" name="newpassword" />
</p>

<p>
<label for="renewpassword">تکرار رمز عبور جدید :</label>
<input type="password" name="renewpassword" />
</p>

<p>
<input type="submit" value="تغییر رمز عبور" />
</p>
</form>