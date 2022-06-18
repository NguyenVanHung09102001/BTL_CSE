<?php
    // Xử lý giá trị GỬI TỚI
    if(isset($_POST['txtname_'])){
        $name_ = $_POST['txtname_'];
    }
    $work_ = $_POST['txtwork_'];
    $my_bg = $_POST['txtmy_bg'];
    $skills = $_POST['txtskills'];
    $name_edu = $_POST['txtname_edu'];
    $diploma_timer = $_POST['txtdiploma_timer'];
    $job= $_POST['txtjob'];
    $company_timer = $_POST['txtcompany_timer'];
    $note = $_POST['txtnote'];
    $people1= $_POST['txtpeople1'];
    $note1 = $_POST['txtnote1'];
    $peple2 = $_POST['txtpeople2'];
    $note2 = $_POST['txtnote2'];
    $philosophy = $_POST['txtphilosophy'];

    
    
    // Bước 01: Kết nối Database Server
    $conn = mysqli_connect('localhost','root','','mycv');
    if(!$conn){
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }
    // Bước 02: Thực hiện truy vấn
    $sql = "UPDATE dulieucv SET name_ ='$name_', work_='$work_', my_bg = '$my_bg', skills = '$skills', name_edu='$name_edu', diploma_timer = '$diploma_timer' ,job ='$job', company_timer='$company_timer',note= '$note',people1='$people1',note1='$note1' ,people2 = '$people2', note1='$note1' ,philosophy='$philosophy'" ;
    // -- WHERE ma_nhanvien = '$maNhanVien'";
    // echo $sql;

    $ketqua = mysqli_query($conn,$sql);
    
    if(!$ketqua){
        header("location: error.php"); //Chuyển hướng lỗi
    }else{
        header("location: about_me.php"); //Chuyển hướng lại Trang Quản trị
    }

    // Bước 03: Đóng kết nối
    mysqli_close($conn);

?>