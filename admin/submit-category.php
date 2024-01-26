<?php
    $categoryName = $_POST['categoryName'];
    $categoryParent = $_POST['catParent'];

    $connection = mysqli_connect("localhost","root", "", "myshop");
    mysqli_set_charset($connection, "utf8");
    if($connection)
    {

        //مقدار name در دکمه سابمیت
        // روی کدوم دکمه سابمیت کلیک شده؟

        if(isset($_POST['newCategory']))
        {
            $query = " INSERT INTO `category`(`categoryName`, `ParentID`) VALUES ('$categoryName',$categoryParent)";
        }        

        else if(isset($_POST['deleteCategory']))
        {
            $categoryToDelete = $_POST['categoryToDelete'];
            $query = "delete from category where categoryID = $categoryToDelete";
        }

        else if (isset($_POST['editCategory']))
        {
            $editCatId = $_POST['editCatID'];
            $editCatName = $_POST['editCatName'];
            $editCatParent = $_POST['editCatParent'];
        
            if(empty($editCatName) && $editCatParent == -1)
            {
                //بدون تغییر
                $query = "";

            }
            else if(empty($editCatName) && $editCatParent != -1)
            {
                //فقط والد تغییر کند
                $query = "UPDATE category SET parentID = $editCatParent where categoryID = $editCatId ";

            }
            else if(!empty($editCatName) && $editCatParent == -1)
            {
                //فقط نام دسته بندی تغییر کند
                $query = "UPDATE category SET categoryName = '$editCatName' where categoryID = $editCatId ";

            }
            else
            {
                //هردو تغییر کند
                $query = "UPDATE category SET categoryName = '$editCatName', parentID = $editCatParent where categoryID = $editCatId ";

                
            }
        
        
        
        
        }
    
    
        if(mysqli_query($connection, $query)){
            header("Location: ../admin/?page=category");
        }
        else {
      
            print("خطا در ثبت دسته جدید: " . mysqli_error($connection));
            print($query);
        }







    }
        //عکس گرفتم 
        //12 novambre 2023

    
    

?>