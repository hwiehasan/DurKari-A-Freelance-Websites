<div class="row fw-bold ">
    <div class="col-1 ">  شناسه نظر </div>
    <div class="col-1 "> نام ثبت کننده</div>
    <div class="col-3 "> متن نظر</div>
    <div class="col-2 "> تاریخ و زمان</div>
    <div class="col-2 "> وضعیت نمایش </div>
    
    
</div>

<hr/>

<?php 

    
    // get Categoris from DB
    $conn = mysqli_connect("localhost","root", "", "myshop");
    mysqli_set_charset($conn , "utf8");
    if($conn && $_SESSION['USER_ID'] == 1){
        //join kala table and category table for get category name
        $query = "SELECT * FROM comment order by commentSubmitDate desc ";

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
                    <div class="col-1 "> '. $row['commentSenderName'] .'    </div>
                    <div class="col-3 ">'. $row['commentText'] .'</div>
                    <div class="col-2 ">'. $row['commentSubmitDate'] .'</div>
                    
                ');


                if($row['allow'] == -1 )
                {
                    print('
                    <div class="col-2 "> <form method="post" action="removeComment.php" ><input type="hidden" name="commentID" value="'. $row['id'] .'" /><div><input type="submit"  name="submitremoveCommentt" value=" حذف نظر "></div></form>  </div>
                    <div class="col-2 "> <form method="post" action="allowComment.php" ><input type="hidden" name="commentID" value="'. $row['id'] .'" /><div><input type="submit"  name="submitremoveCommentt" value=" تایید نظر "></div></form></div>
                    </div>
                    ');
                }
                else if($row['allow'] == 0 )
                {
                    print('نظر حذف شده است');
                    print('</div>');
                }
                else if($row['allow'] == 1 )
                {
                    print('نظر تایید شده است');
                    print('</div>');
                }









            }
        }
    }
    else
        print('شما به این بخش دسترسی ندارید.');
?>
