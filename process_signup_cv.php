<?php
    // tạo session mặc đinh mỗi phiên làm việc có thời gian 24p
    session_start();

    //Nhận dữ liệu từ login.php chuyền sang
    if(isset($_POST['btnSignUp'])){
        header("location: signup.php");
    }
    $user = $_POST['txtUser'];
    $email = $_POST['txtEmail'];
    $pass1 = $_POST['txtPass1'];
    $pass2 = $_POST['txtPass2'];

    //Mục tiêu chèn bản ghi vào cơ sở dữ liệu
    // Bước 01: Kết nối Database Server
    $conn = mysqli_connect('localhost','root','','mycv');
    if(!$conn){
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }
    // Bước 02: Thực hiện truy vấn
    $sql01 = "SELECT * FROM db_users WHERE email_user='$email' OR name_user='$user' ";
    // echo $sql01;
    
    $result01 = mysqli_query($conn,$sql01);
    if(mysqli_num_rows($result01) > 0){
        $error="Email hoặc tên người dùng đã tồn tại";
        header("location: signup_cv.php?error=$error"); //Chuyển hướng lại Trang Quản trị
    }else{
      
        $pass_hash = password_hash($pass1, PASSWORD_DEFAULT );
        $sql02= "INSERT db_users(name_user, email_user, pass_user)  VALUES('$user','$email','$pass_hash')";
        $result02 = mysqli_query($conn,$sql02);

        if($result02 == true){
            header("location: login_cv.php");
        }else{
            $error="Không tạo đc tài khoản. Please check ...";
            header("location: signup_cv.php?error=$error");
        }
    }
    // Bước 03: Đóng kết nối
    mysqli_close($conn);
?>