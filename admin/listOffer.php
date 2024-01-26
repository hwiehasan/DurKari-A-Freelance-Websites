<div class="row fw-bold ">
    <div class="col-1 "> شناسه پروژه </div>
    <div class="col-2 "> تصویر پروژه </div>
    <div class="col-2 "> عنوان پروژه </div>
    <div class="col-2 "> دسته بندی </div>
    <div class="col-2 "> هزینه </div>
    <div class="col-2 "> فریلنسر پیشنهاد دهنده </div>
    <div class="col-1 "> وضعیت </div>
</div>

<hr/>

<?php 

    
    // get Categoris from DB
    $conn = mysqli_connect("localhost","root", "", "myshop");
    mysqli_set_charset($conn , "utf8");
    if($conn){
        //join project table and category table for get category name
        $query = "SELECT * FROM  project p, category c WHERE p.category = c.categoryID and  userID = ".$_SESSION['USER_ID'];

        $result1 = mysqli_query($conn , $query);

        if($result1 === false) 
        {
            echo "Error: " . mysqli_error($conn);
        } 
        
        else 
        {    
            while( $projectRow = mysqli_fetch_array($result1) ) {

                $requestListQuey = "SELECT * FROM request WHERE projectID = ".$projectRow['projectID'];
                $result2 = mysqli_query($conn , $requestListQuey);

                while($requestRow = mysqli_fetch_array($result2)){

                $freelancerInfoQuery = "SELECT id , name , username FROM user WHERE id = ".$requestRow['freelancerID'];
                $result3 = mysqli_query($conn , $freelancerInfoQuery);  
                $freelancerInfoRow = mysqli_fetch_array($result3); 

                print('
                    <div class="row ">
                    <div class="col-1 ">'. $projectRow['projectID'] .'</div>
                    <div class="col-2 "><img src="..'. $projectRow['image'] .'"width="50px" height="50px"/></div>
                    <div class="col-2 ">'. $projectRow['name'] .'</div>
                    <div class="col-2 ">'. $projectRow['categoryName'] .'</div>
                    <div class="col-2 ">'. $projectRow['price'] .'</div>
                    <div class="col-2 ">'. $freelancerInfoRow['username'] .'<a href="../userCV.php?userID='.$freelancerInfoRow['id'].'" > (مشاهده رزومه) </a></div>
                    
                    
                ');

                if($requestRow['accepted'] == -1)
                {
            
                    print('
                    <div class="col-1 ">    <a href="denyRequest.php?reqID='.$requestRow['reqID'].'">رد</a> / <a href="acceptRequest.php?reqID='.$requestRow['reqID'].'&freelancerID='.$requestRow['freelancerID'].'&projectID='.$requestRow['projectID'].'">تایید</a> </div>
                    </div>
                        ');     
                }
                
                else if($requestRow['accepted'] == 0)
                {
            
                print('
                    <div class="col-1 ">     رد شده </div>
                    </div>
                        ');      
                }
                else if($requestRow['accepted'] == 1)
                {
                  
                print('
                    <div class="col-1 ">    تایید شده </div>
                    </div>
                        ');    

                }







            }



            }




        }
    }
?>
