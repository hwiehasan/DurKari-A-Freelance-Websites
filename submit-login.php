<?php 

//step 1 : get information at claient
$username = $_POST['username'];
$enteredPassword = $_POST['password'];


$connection = mysqli_connect("localhost","root", "", "myshop");

if ($connection){
    $queryPass = " select password from user where username= '$username'";
    //ejray dastur mored nazar az tarighe conection eijad shode dar DB
    $resultPass = mysqli_query($connection, $queryPass);
    $userpassInfo = mysqli_fetch_array($resultPass);
    $hashedPassword = $userpassInfo['password'];

    if ( password_verify($enteredPassword, $hashedPassword) ) {
        // پسورد معتبر است، به کاربر اجازه ورود.
       
        $query = " select * from user where username= '$username'";
        //ejray dastur mored nazar az tarighe conection eijad shode dar DB
        $result = mysqli_query($connection, $query);
      
        if(mysqli_num_rows($result) == 1){
            //print("Welcome baby");
    
            //get recursive information from DB
            $userInfo = mysqli_fetch_array($result);//information save like array to $userInfo
    
    
            // save information in session
            session_start();//for start to use session
            $_SESSION['USER_NAME'] = $username;// === $_SESSION['USER_NAME'] = $userInfo['$username'];
            $_SESSION['USER_ID'] = $userInfo['id'];
            $_SESSION['NAME'] = $userInfo['name'];
            $_SESSION['PROFILE_PHOTO'] = $userInfo['profilePhoto'];
    
    
            header("Location: admin/");
        }






    } else {
        // پسورد اشتباه است.
        print("Username or password or username is wrong");
        header("Location: login.html");
    }

}
else print("Faild to connect DataBase !!");


?>