<html>
<head>
    <meta charset="UTF-8">
    <title>صفحه شما</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body>


<?php 
session_start();
    if(isset($_GET['pID']))
    {
        $projectID = $_GET['pID'];
    }
    else
        exit(header("Location: ../admin/?page=listProject"));
    
    // get Categoris from DB
    $conn = mysqli_connect("localhost","root", "", "myshop");
    mysqli_set_charset($conn , "utf8");
    if($conn){
        //join project table and category table for get category name
        $query = "SELECT projectID, name, description, price, categoryName, image 
        FROM project p, category c 
        WHERE p.category = c.categoryID and userID = ".$_SESSION['USER_ID']." and p.projectID = $projectID";

        $result = mysqli_query($conn , $query);
        if(mysqli_num_rows($result) == 0)
        {
            exit ("اجازه دسترسی به پروژه وارد شده وجود ندارد!");
        }
        else
            $projectInfo = mysqli_fetch_array($result);
 

    }

?>






<form class="my-2 text-center" method="post" action="submit-editProject.php" enctype="multipart/form-data">
    <!-- ارسال آیدی کالا به صفحه بعدی جهت حذف یا ادیت -->
    <input type="hidden" value=" <?php print($projectID); ?> " name="projectID" />
    <div>
        <input type="text" class="projectName" name="projectName" placeholder=" عنوان پروژه" value=" <?php print($projectInfo["name"]); ?> " />
    </div>
    <div>
        <textarea name="projectDesc"  id="" cols="30" rows="10">
        <?php print($projectInfo["description"]); ?>
        </textarea>
    </div>
    <div>
        <input type="text" class="projectPrice" name="projectPrice" placeholder="  هزینه پروژه " value=" <?php print($projectInfo["price"]); ?>" />
    </div>
    <div>
        <select name="category">
            <?php 
                
                    $query = "select * from category order by categoryName asc";
                    $result = mysqli_query($conn, $query);
                    while($row = mysqli_fetch_array($result)) {




                        $catId = $row['categoryID'];
                        $catName = $row['categoryName'];
                        //کتگوری دیفالت همونی باشه که مال کالا هست
                        if($row['categoryName'] == $projectInfo["category"])
                            print("<option value= '$catId ' selected> $catName </option>");
                        else   
                            print("<option value= '$catId '> $catName </option>");




                    }
                
            ?>
            
        </select>
    </div>
    <div>
        <img src="<?php print($projectInfo["image"]); ?>"  width="200px" height="auto"/>
        <input type="file" class="projectImage" name="projectImage" placeholder=" تصویر پروژه "/>
        <input type="hidden" class="projectImage" name="oldImage"  value=" <?php print($projectInfo["image"]); ?>" />
    </div>
    <div style="text-align:center;">
        <input type="submit" class="submitProject py-2 px-3 my-3 mx-auto" name="editProject" value=" ویرایش پروژه ">
    </div>
    <div style="text-align:center; margin-top:5px;">
        <input type="submit" class="submitProject py-2 px-3 my-3 mx-auto" name="deleteProject" value=" حذف پروژه ">
    </div>
</form>

</body>
</html>