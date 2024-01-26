<form class="my-2 text-center" method="post" action="submit-newProject.php" enctype="multipart/form-data">
    <div id="inputProjectName">
        <input type="text" class="projectName" name="projectName" placeholder=" عنوان پروژه ">
    </div>
    <div id="inputprojectDesc">
        <textarea name="projectDesc"  id="" cols="30" rows="10"></textarea>
    </div>
    <div  id="inputprojectPrice">
        <input type="number" class="projectPrice" name="projectPrice" placeholder="  هزینه پروژه ">
    </div>
    <div>
        <select name="category">
            <?php 
                $conn = mysqli_connect("localhost","root", "", "myshop");
                mysqli_set_charset($conn , "utf8");
                if($conn){
                    $query = "select * from category order by categoryName asc";
                    $result = mysqli_query($conn, $query);
                    while($row = mysqli_fetch_array($result)) {
                        $catId = $row['categoryID'];
                        $catName = $row['categoryName'];
                        print("<option value= '$catId '> $catName </option>");
                    }
                }
            ?>
            
        </select>
    </div>
    <div id="inputprojectPic">
        <input type="file" class="projectImage" name="projectImage" placeholder=" تصویری برای پروژه ">
    </div>
    <div>
        <input type="submit" class="submitProject py-2 px-3 my-3 mx-auto" name="submitProject" value=" ثبت پروژه ">
    </div>
</form>