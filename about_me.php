<?php
// session_start();
//     if (!isset($_SESSION['isLoginOK'])){
//         header("location:login_cv.php");
//     }
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <header>
    <div class="container-fluid">
        <div class="row">
          <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
              <a class="navbar-brand fs-4 fw-bold" href="#">HUNG</a>
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
                  <?php  if (isset($_SESSION['isLoginOK']))  {

                  echo "<a class='nav-link'>Welcome: ".$_SESSION['isLoginOK']."</a>";         
                  echo "<a class='nav-link text-success' href='logout_cv.php'>Logout</a>";
                  }
                    ?>



                </div>
                
              </div>
            </div>
          </nav>
        </div>
      </div>
        
    </header>
    <main>
    <div class="container">
        <h5 class="text-center text-primary mt-5">INTRODUCE YOURSELF</h5>
        <div>
            <a class="btn btn-primary btn-center" href="add_cv.php">Thêm</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Work</th>
                    <th scope="col">Mybackground</th>
                    <th scope="col">Skills</th>
                    <th scope="col">Name education </th>
                    <th scope="col">Diploma/timer</th>
                    <th scope="col">Job</th>
                    <th scope="col">Company/Timer</th>
                    <th scope="col">Note</th>
                    <th scope="col">People1</th>
                    <th scope="col">Note1 </th>
                    <th scope="col">People2</th>
                    <th scope="col">Note2</th>
                    <th scope="col">Philosophy</th>
                    <th scope="col">Sửa</th>
                    <th scope="col">Xóa</th>
                </tr>
            </thead>
            <tbody>
                <!-- Vùng này là Dữ liệu cần lặp lại hiển thị từ CSDL -->
                <?php
                    // Bước 01: Kết nối Database Server
                    $conn = mysqli_connect('localhost','root','','mycv');
                    if(!$conn){
                        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
                    }
                    // Bước 02: Thực hiện truy vấn
                    $sql = "SELECT * FROM dulieucv";
                    $result = mysqli_query($conn,$sql);
                    // Bước 03: Xử lý kết quả truy vấn
                    if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_assoc($result)){
                ?>
                            <tr>
                                <th scope="row"><?php echo $row['id']; ?></th>
                                <td><?php echo $row['name_']; ?></td>
                                <td><?php echo $row['work_']; ?></td>
                                <td><?php echo $row['my_bg']; ?></td>
                                <td><?php echo $row['skills']; ?></td>
                                <td><?php echo $row['name_edu']; ?></td>
                                <td><?php echo $row['diploma_timer']; ?></td>
                                <td><?php echo $row['job']; ?></td>
                                <td><?php echo $row['company_timer']; ?></td>
                                <td><?php echo $row['note']; ?></td>
                                <td><?php echo $row['people1']; ?></td>
                                <td><?php echo $row['note1']; ?></td>
                                <td><?php echo $row['people2']; ?></td>
                                <td><?php echo $row['note2']; ?></td>
                                <td><?php echo $row['philosophy']; ?></td>
                                <td><a href="update_cv.php?id=<?php echo $row['id']; ?>"><i class="bi bi-pencil-square"></i></a></td>
                                <td><a href="delete_cv.php?id=<?php echo $row['id']; ?>"><i class="bi bi-trash"></i></a></td>
                            </tr>
                <?php
                        }
                    }
                ?>
                
                
            </tbody>
            </table>
    </div>      
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>