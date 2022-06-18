<?php
    // tạo session mặc đinh mỗi phiên làm việc có thời gian 24p
    session_start();

    //Nhận dữ liệu từ login.php chuyền sang
    if(isset($_POST['btnSignIn'])){
        $email = $_POST['txtEmail'];
        $pass = $_POST['txtPass'];
        //Ở đây kiểm tra người dùng đăng nhập chưa

        // Bước 01: Kết nối Database Server
        $conn = mysqli_connect('localhost','root','','mycv');
        if(!$conn){
            die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
        }
        // Bước 02: Thực hiện truy vấn
        $sql = "SELECT * FROM db_users where email_user='$email' ";
        // echo $sql;
        
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_assoc($result);
            $pass_hash = $row['pass_user'];//lấy ra mật khẩu chuỗi dạng băm trong CSDL
            if(password_verify($pass,$pass_hash)){
                $_SESSION['isLoginOK'] = $email;
                header("location: about_me.php"); //Chuyển hướng lại Trang Quản trị
            }else{
                $error="Mật khẩu không chính xác";
                header("location: login_cv.php?error=$error"); //Trả lại thông báo lỗi
            }

        }else{
            $error="Email không tồn tại";
            header("location: login_cv.php?error=$error"); //Trả lại thông báo lỗi
        }
        // Bước 03: Đóng kết nối
        mysqli_close($conn);
    }else{
        header("location:login_cv.php");
    } 
?>