<?php
    // deleteEmployee: NHẬN DỮ LIỆU TỪ admin.php gửi sang
    $id= $_GET['id'];
    // Bước 01: Kết nối Database Server
    $conn = mysqli_connect('localhost','root','','mycv');
    if(!$conn){
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }
    // Bước 02: Thực hiện truy vấn
    $sql = "SELECT * FROM dulieucv WHERE id = '$id'";

    $result = mysqli_query($conn,$sql); //Nó chỉ ra về 1 bản ghi, mà mình chỉ cần lấy 1 bản ghi thôi

    // Bước 03: Xử lý kết quả
    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
    }

    // Bước 04: Đóng kết nối
    mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <header>
        <div class="container-fluid">
        <div class="row">
          <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
              <a class="navbar-brand fs-4 fw-bold" href="home.php" role="button">HUNG</a>
              <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup"
                aria-expanded="false"
                aria-label="Toggle navigation"
              >
                <span class="navbar-toggler-icon"></span>
              </button>
              <div
                class="collapse navbar-collapse d-flex flex-row-reverse fs-4"
                id="navbarNavAltMarkup"
              >
                <div class="navbar-nav">
                  <a class="nav-link active fs-6 " aria-current="page" href="#">ABOUT ME </a>
                  <a class="nav-link fs-6" href="#">EXPERIENCE</a>
                  <a class="nav-link fs-6" href="#">TESTIMONIALS</a>
                  <a class="nav-link fs-6">CONTACTS</a>
                  <a class="nav-link fs-6 text-primary " href="login_cv.php" role="button">Login</a>
                  <a class="nav-link fs-6 text-primary" href="signup_cv.php" role="button">SignUp</a>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </div>
        
    </header>

    <main>
        <div class="container">
            <h5 class="text-center text-primary mt-5">UPDATE INFORMATION CV </h5>
            <!-- Form thêm Dữ liệu nhân viên -->
            <form action="process_update_cv.php" method="post">  
                <div class="form-group">
                    <label for="txtname_">Name</label>
                    <input type="text" class="form-control" id="txtname_" name="txtname_" placeholder="Your name " value="<?php echo $row['name_']; ?>">
                    <!-- <small id="txtHoTenHelp" class="form-text text-muted">Có thể dùng nó hiển thị thông báo lỗi hoặc gợi ý</small> -->
                </div>
                
                <div class="form-group">
                    <label for="txtwork">Work</label>
                    <input type="text" class="form-control" id="txtwork_" name="txtwork_" placeholder="Your work" value="<?php echo $row['work_']; ?>">
                    <!-- <small id="txtHoTenHelp" class="form-text text-muted">Có thể dùng nó hiển thị thông báo lỗi hoặc gợi ý</small> -->
                </div>

                <div class="form-group">
                    <label for="txtmy_bg">My Backgrounds </label>
                    <input type="text" class="form-control" id="txtmy_bg" name="txtmy_bg" placeholder="Enter your background" value="<?php echo $row['my_bg']; ?>">
                    <!-- <small id="txtHoTenHelp" class="form-text text-muted">Có thể dùng nó hiển thị thông báo lỗi hoặc gợi ý</small> -->
                </div>
                <div class="form-group">
                    <label for="txtskills">Skills</label>
                    <input type="text" class="form-control" id="txtskills" name="txtskills" placeholder="Enter your skills" value="<?php echo $row['skills']; ?>">
                </div>
                <div class="form-group">
                    <label for="txtname_edu">Name education</label>
                    <input type="text" class="form-control" id="txtname_edu" name="txtname_edu" placeholder="Enter your education " value="<?php echo $row['name_edu']; ?>">
                
                </div>

                <div class="form-group">
                    <label for="txtdiploma_timer">Diploma-Timer</label>
                    <input type="text" class="form-control" id="txtdiploma_timer" name="txtdiploma_timer" placeholder="Enter your Diploma - Timer  " value="<?php echo $row['diploma_timer']; ?>">
                
                </div>
                
                <div class="form-group">
                    <label for="txtjob">Job</label>
                    <input type="text" class="form-control" id="txtjob" name="txtjob" placeholder="Enter your job " value="<?php echo $row['job']; ?>">
                
                </div>

                <div class="form-group">
                    <label for="txtcompany_timer">Company Timer</label>
                    <input type="text" class="form-control" id="txtcompany_timer" name="txtcompany_timer" placeholder="Enter your Company Timer " value="<?php echo $row['company_timer']; ?>">
                
                </div>
                <div class="form-group">
                    <label for="txtnote">Note</label>
                    <input type="text" class="form-control" id="txtnote" name="txtnote" placeholder="Enter your Note " value="<?php echo $row['note']; ?>">
                
                </div>
                <div class="form-group">
                    <label for="txtpeople">People1</label>
                    <input type="text" class="form-control" id="txtpeople1" name="txtpeople1" placeholder="Enter name people1  " value="<?php echo $row['people1']; ?>">
                
                </div>
                <div class="form-group">
                    <label for="txtnote1">Note1</label>
                    <input type="text" class="form-control" id="txtnote1" name="txtnote1" placeholder="Enter your note 1  " value="<?php echo $row['note1']; ?>">
                
                </div>
                <div class="form-group">
                    <label for="txtpeople2">People2</label>
                    <input type="text" class="form-control" id="txtpeople2" name="txtpeople2" placeholder="Enter name people1  " value="<?php echo $row['people2']; ?>">
                
                </div>

                <div class="form-group">
                    <label for="txtnote1">Note2</label>
                    <input type="text" class="form-control" id="txtnote2" name="txtnote1" placeholder="Enter your note 2  " value="<?php echo $row['note2']; ?>">
                
                </div>

                <div class="form-group">
                    <label for="txtphilosophy">Philosophy</label>
                    <input type="text" class="form-control" id="txtphilosophy" name="txtphilosophy" placeholder="Enter your note 2  " value="<?php echo $row['philosophy']; ?>">
                
                </div> 
                <button type="submit" class="btn btn-primary mt-3">Lưu lại</button>
            </form>
        </div>    
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>