<div class="row fw-bold ">
    <div class="col-1 "> شناسه کاربر</div>
    <div class="col-1 "> نمایه کاربری </div>
    <div class="col-1 "> نام کاربر</div>
    <div class="col-1 "> نام کاربری</div>
    <div class="col-1 "> موبایل </div>
    <div class="col-2 "> ایمیل</div>
    <div class="col-1 "> جنسیت </div>
    <div class="col-2 "> تاریخ عضویت </div>
    <div class="col-1 ">  حذف کاربر </div>
</div>

<hr/>

<?php 

    
    // get Categoris from DB
    $conn = mysqli_connect("localhost","root", "", "myshop");
    mysqli_set_charset($conn , "utf8");
    if($conn && $_SESSION['USER_ID']==1){
        //join project table and category table for get category name
        $query = "SELECT * FROM user";
       

        $result = mysqli_query($conn , $query);

        if($result === false) 
        {
            echo "Error: " . mysqli_error($conn);
        } 
        
        else 
        {    
            while( $row = mysqli_fetch_array($result) ) {

                
                if($row['gender'] == 0)
                    $gender = "مرد";
                if($row['gender'] == 1)
                    $gender = "زن";

                print('
                    <div class="row ">
                    <div class="col-1 ">'. $row['id'] .'</div>
                    <div class="col-1 "><img src="..'. $row['profileimage'] .'"width="50px" height="50px"/></div>
                    <div class="col-1 ">'. $row['name'] .'</div>
                    <div class="col-1 ">'. $row['username'] .'</div>
                    <div class="col-1 ">'. $row['phone'] .' </div>
                    <div class="col-2 ">'. $row['email'] .'</div>
                    <div class="col-1 ">'. $gender .'</div>
                    <div class="col-2 ">'. $row['joinDate'] .'</div>
                    <div class="col-1 "><a href="remove-user.php?userID='.$row['id'].'"> حذف </a></div>
                    </div>
                    
                ');


            }







        }
    }
    else print('شما به این صفحه دسترسی ندارید.');
?>
