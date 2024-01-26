<?php

$conn = mysqli_connect("localhost","root", "", "myshop");
    mysqli_set_charset($conn , "utf8");
    if($conn && $_SESSION['USER_ID'] == 1){

    }
    else{
        print('شما به این بخش دسترسی ندارید.');
        exit();
    }
?>

<form method="post" action="submit-category.php">



    <div>
        <p>
            افزودن دسته بندی
        </p>
        <input type="text" name="categoryName" placeholder=" نام دسته بندی : " />
    </div>


    <div>
        <select name="catParent">
            <option value="0"> دسته اصلی </option>
            <?php 
                // دریافت لیست دسته های اصلی از دیتبایس
                $conn = mysqli_connect("localhost","root", "", "myshop");
                mysqli_set_charset($conn , "utf8");
                if($conn)
                {

                    $query = "select * from category order by categoryName asc";
                    $result = mysqli_query($conn, $query);
                    while($row = mysqli_fetch_array($result)) {
                        $catId = $row['categoryID'];
                        $catName = $row['categoryName'];
                        print("<option value='$catId'> $catName </option>");
                    }

                }
            ?>
        </select>
    </div>


    <div>
        <input type="submit" name="newCategory" value=" ثبت دسته بندی "/>
    </div>




    <hr/>






    <div>

        <p>
            حذف دسته بندی
        </p>


        <div>
            <select name="categoryToDelete">
            <?php 
                $conn = mysqli_connect("localhost","root", "", "myshop");
                mysqli_set_charset($conn , "utf8");
                if($conn)
                {
                    $query = "select * from category order by categoryName asc";
                    $result = mysqli_query($conn, $query);
                    while($row = mysqli_fetch_array($result)) {
                        $catId = $row['categoryID'];
                        $catName = $row['categoryName'];
                        print("<option value='$catId'> $catName </option>");
                    }
                }
            ?>
            </select>
        </div>
    
        <input type="submit" name="deleteCategory" value=" حذف دسته بندی "/>


    </div>






    <hr/>










    <div>


        <p>
            ویرایش دسته بندی
        </p>
        
        <!-- اول لیست دسته بندی هارو نشون بده -->
        <div>                
            <select name="editCatID">
            <?php 
                $conn = mysqli_connect("localhost","root", "", "myshop");
                mysqli_set_charset($conn , "utf8");
                if($conn)
                {
                    $query = "select * from category order by categoryName asc";
                    $result = mysqli_query($conn, $query);
                    while($row = mysqli_fetch_array($result)) {
                        $catId = $row['categoryID'];
                        $catName = $row['categoryName'];
                        print("<option value='$catId'> $catName </option>");
                    }
                }
            ?>
            </select>
        </div>









    <!-- اسم جدید دسته بندی رو کاربر وارد کنه -->
    <div>
        <input type="text" name="editCatName" placeholder=" نام جدید دسته بندی : " />
    </div>


    <div>
        <select name="editCatParent">
            <option value="-1"> بدون تغییر </option>
            <option value="0"> دسته اصلی </option>
            <?php 
                $conn = mysqli_connect("localhost","root", "", "myshop");
                mysqli_set_charset($conn , "utf8");
                if($conn){
                    $query = "select * from category order by categoryName asc";
                    $result = mysqli_query($conn, $query);
                    while($row = mysqli_fetch_array($result)) {
                        $catId = $row['categoryID'];
                        $catName = $row['categoryName'];
                        print("<option value='$catId'> $catName </option>");
                    }
                }
            ?>
        </select>
    </div>

    <div>
        <input type="submit" name="editCategory" value=" ثبت دسته بندی "/>
    </div>


</form>
