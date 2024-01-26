<div class="row fw-bold ">
    <div class="col-1 "> شناسه پروژه </div>
    <div class="col-2 "> تصویر پروژه </div>
    <div class="col-2 "> عنوان پروژه </div>
    <div class="col-1 "> دسته بندی </div>
    <div class="col-1 "> هزینه </div>
    <div class="col-1 "> وضعیت پروژه </div>
    <div class="col-1 "> ویرایش </div>
    <div class="col-1 "> حذف </div>
</div>

<hr/>

<?php 

    
    // get Categoris from DB
    $conn = mysqli_connect("localhost","root", "", "myshop");
    mysqli_set_charset($conn , "utf8");
    if($conn){
        //join project table and category table for get category name
        $query = "SELECT projectID, name, price, categoryName, image , projectStatus
        FROM project p, category c 
        WHERE p.category = c.categoryID and userID = ".$_SESSION['USER_ID'];

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
                    <div class="col-1 ">'. $row['categoryName'] .'</div>
                    <div class="col-1 ">'. $row['price'] .' تومان</div>
                    
                ');
                
                if($row['projectStatus'] == 0)
                    {
                        print('<div class="col-1 "> در انتظار </div>'); 
                        print('
                        <div class="col-1 ">    <a href="editProject.php?pID='.$row['projectID'].'">ویرایش</a>  </div>
                        
                            ');       
                        print('
                        <div class="col-1 ">    <a href="submit-remove-project.php?pID='.$row['projectID'].'">حذف</a>  </div>
                        </div>
                            ');    
                    }
                    
                else if($row['projectStatus'] == 1)
                {
                    print('<div class="col-1 "> در حال انجام </div>');
                    print('
                        <div class="col-1 ">    ممکن نیست  </div>
                        <div class="col-1 ">    ممکن نیست  </div>
                        </div>
                            ');      
                }
                else if($row['projectStatus'] == 2)
                {
                    print('<div class="col-1 "> خاتمه یافته </div>');   
                    print('
                        <div class="col-1 ">    ممکن نیست  </div>
                        <div class="col-1 ">    ممکن نیست  </div>
                        </div>
                            ');    

                }


                





            }







        }
    }
?>
