<div class="row fw-bold ">
    <div class="col-1 ">  شناسه پیغام </div>
    <div class="col-1 "> نام ثبت کننده</div>
    <div class="col-3 "> ایمیل ثبت کننده</div>
    
    <div class="col-2 "> موضوع پیغام</div>
    <div class="col-3 "> متن پیغام</div>
    <div class="col-1 "> تاریخ و زمان</div>
    
    
</div>

<hr/>

<?php 

    
    // get Categoris from DB
    $conn = mysqli_connect("localhost","root", "", "myshop");
    mysqli_set_charset($conn , "utf8");
    if($conn && $_SESSION['USER_ID'] == 1){
        //join kala table and category table for get category name
        $query = "SELECT * FROM messages ";

        $result = mysqli_query($conn , $query);

        if($result === false) 
        {
            echo "Error: " . mysqli_error($conn);
        } 
        
        else 
        {    
            while( $row = mysqli_fetch_array($result) ) {
                print('
                    <div class="row ">
                    <div class="col-1 ">'. $row['id'] .'</div>
                    <div class="col-1 "> '. $row['name'] .'    </div>
                    <div class="col-3 ">'. $row['email'] .'</div>
                    <div class="col-2 ">'. $row['subject'] .'</div>
                    <div class="col-3 ">'. $row['message'] .'</div>
                    <div class="col-1 ">'. $row['submitDate'] .'</div>



                    </div>
                    
                ');

            }
        }
    }
    else
        print('شما به این بخش دسترسی ندارید.');
?>
