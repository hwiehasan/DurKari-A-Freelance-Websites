<div class="row fw-bold ">
    <div class="col-1 "> شناسه پروژه </div> 
    <div class="col-2 "> تصویر پروژه </div>
    <div class="col-2 "> عنوان پروژه </div>
    <div class="col-2 "> دسته بندی </div>
    <div class="col-2 "> هزینه </div>
    <div class="col-1 "> ویرایش </div>
</div>

<hr/>

<?php 

    
    // get Categoris from DB
    $conn = mysqli_connect("localhost","root", "", "myshop");
    mysqli_set_charset($conn , "utf8");
    if($conn){
        //join project table and category table for get category name
        $query = "SELECT projectID, name, price, categoryName, image 
        FROM project p, category c 
        WHERE p.category = c.categoryID and userID = ".$_SESSION['USER_ID']. " and projectStatus = 0";

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
                    <div class="col-1 ">'. $row['projectID'] .'</div>
                    <div class="col-2 "><img src="..'. $row['image'] .'"width="50px" height="50px"/></div>
                    <div class="col-2 ">'. $row['name'] .'</div>
                    <div class="col-2 ">'. $row['categoryName'] .'</div>
                    <div class="col-2 ">'. $row['price'] .' تومان</div>
                    <div class="col-1 ">    <a href="editProject.php?pID='.$row['projectID'].'">ویرایش</a>  </div>
                    </div>
                ');
            }







        }
    }
?>
