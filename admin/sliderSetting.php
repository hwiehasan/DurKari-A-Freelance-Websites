<?php

$conn = mysqli_connect("localhost","root", "", "myshop");
    mysqli_set_charset($conn , "utf8");
    if($conn && $_SESSION['USER_ID'] == 1){


		$sliderQuery = "select * from slider";
		$result = mysqli_query($conn , $sliderQuery);
		print('<form method="post" action="submit-change-slider-setting.php" enctype="multipart/form-data">');
		for ($i = 1; $i <= 3; $i++) {
			if ($row = mysqli_fetch_array($result)) {


				$sliderPic = $row['pic'];
				$sliderDescription = $row['description'];
				
				print('
				
				<div>
				<img src="'.$sliderPic.'" style="width:50%">
				



				<div><textarea name="newSliderDesc'.$i.'" cols="106" rows="1">'.$sliderDescription.' </textarea></div>
				<input type="hidden" name="oldSliderDesc'.$i.'"  value="'.$sliderDescription.'"/>
				<label for="sliderpic">انتخاب تصویر جدید برای اسلایدر '.$i.' :</label>
				<input type="file" name="newSliderPic'.$i.'"/>
				<input type="hidden" name="oldSliderPic'.$i.'"  value="'.$sliderPic.'"/>
				</div>
				
				');
				
			}
		  } 
		  print('
		  <div>
		  <input type="submit" name="newSliderSetting" value=" ثبت تغییرات "/>
	  		</div>
		  </form>
		  ');

    }
    else{
        print('شما به این بخش دسترسی ندارید.');
        exit();
    }
?>