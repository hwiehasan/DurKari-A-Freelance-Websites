<?php

// Step 1: Get information
$username = $_POST['username'];
$password = $_POST['password'];
$repassword = $_POST['repassword'];
$name = $_POST['name'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$mobile = $_POST['mobile'];
$cv = $_POST['cv'];
//$siterules = $_POST['siterules'];

$date = date("Y-m-d H:i:s");

// Upload file
if (isset($_FILES['profileImage']) && move_uploaded_file($_FILES['profileImage']['tmp_name'], "../files/images/user/" . time() . $_FILES['profileImage']['name'])) {

    // Image address
    $imageAddress = "/files/images/user/" . time() . $_FILES['profileImage']['name'];

} else {
    $imageAddress = "/files/images/user/nophoto.png"; // Default image
}

// Step 2: Data security review
if ($password != $repassword) {
    exit("رمز عبور و تکرار آن یکسان نیست");
}

if (strlen($password) < 8) {
    exit("رمز عبور باید حداقل 8 کاراکتر داشته باشد");
}

if (!preg_match('/[0-9]/', $password)) {
    exit("رمز عبور باید حداقل یک عدد داشته باشد");
}

if (!preg_match('/[A-Z]/', $password)) {
    exit("رمز عبور باید حداقل یک حرف بزرگ داشته باشد");
}

if (!preg_match('/[!@#$%^&*(),.?":{}|<>]/', $password)) {
    exit("رمز عبور باید حداقل یک نماد داشته باشد");
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    exit("فرمت ایمیل وارد شده نامعتبر است");
}
if (!preg_match('/^(09)([0-9]{9})+$/', $mobile)) {
    exit("فرمت شماره وارد شده نامعتبر است");
}

// Step 3: Database interaction
$connection = mysqli_connect("localhost", "root", "", "myshop");
mysqli_set_charset($connection, "utf8");
if ($connection) {
    // Check if the email already exists
    $emailQuery = "SELECT * FROM `user` WHERE `email` = '$email'";
    $emailResult = mysqli_query($connection, $emailQuery);
    if (mysqli_num_rows($emailResult) > 0) {
        exit("این ایمیل قبلاً ثبت شده است");
    }

    // Encrypt the password using mcrypt library
    $encryptedPassword = encryptPassword($password);

    $query = "INSERT INTO `user` (`username`, `email`, `password`, `name`, `phone`, `gender`, `cv`, `joinDate`, `profileimage`) 
              VALUES ('$username', '$email', '$encryptedPassword', '$name', '$mobile', $gender, '$cv', '$date', '$imageAddress')";

    if (mysqli_query($connection, $query)) {
        // Registration successful
        exit($query);
        header("Location: login.html");
    } else {
        print("خطا در ثبت نام");
    }
} else {
    print("Faild to connect to the database");
}

// Function to encrypt the password
function encryptPassword($password) {
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    return $hashedPassword;
}



?>