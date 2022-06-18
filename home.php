<?php
    // trước khi cho người dùng vào bên trong
    // phải kiểm tra thẻ làm việc
    // session_start();
    // if (!isset($_SESSION['isLoginOK'])){
    //     header("location:login_cv.php");
    // }
?> 
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
      crossorigin="anonymous"
    />
  </head>

  <body>
    <head>
      <div class="container-fluid">
        <div class="row">
          <nav class="navbar navbar-expand-lg bg-light ">
            <div class="container-fluid">
              <a class="navbar-brand fs-4 fw-bold text-primary " href="home.php" role="button">HUNG</a>  
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
                  <a class="nav-link active fs-6 text-primary " aria-current="page" href="#about-me">ABOUT ME </a>
                  <a class="nav-link fs-6 text-primary" href="#EXPERIENCE">EXPERIENCE</a>
                  <a class="nav-link fs-6 text-primary" href="#TESTIMONIALS">TESTIMONIALS</a>
                  <a class="nav-link fs-6 text-primary" href = "#CONTACTS">CONTACTS</a>         
                  <a class="nav-link fs-6 text-primary " href="login_cv.php" role="button">Login</a>
                  <a class="nav-link fs-6 text-primary" href="signup_cv.php" role="button">SignUp</a>
                    
                </div>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </head>

    <?php
        // Bước 01: Kết nối Database Server
        $conn = mysqli_connect('localhost','root','','mycv');
        if(!$conn){
            die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
        }
        // Bước 02: Thực hiện truy vấn
        $sql = "SELECT * FROM dulieucv  ";
        $result = mysqli_query($conn,$sql);
        // Bước 03: Xử lý kết quả truy vấn
        if(mysqli_num_rows($result) > 0){
          $row = mysqli_fetch_assoc($result);
        }
    ?>

    <main>
      <div class="container-fluid">
        <div class="row">
          <div class="col-6 d-flex align-items-center">
            <div class="start mx-3">
              <?php
                echo '<h1 class="fs-1">Hi, I am '.$row['name_'].', a '.$row['work_'].'</h1>';
              ?>
              <button type="button" class="btn btn-primary my-3">
                Email me
              </button>
              <ul class="d-flex link ps-0 pt-3">
                <li class="link-item"><a href="">Linkedin / </a></li>
                <li class="link-item"><a href="">Facebook / </a></li>
                <li class="link-item"><a href="">Twitter</a></li>
              </ul>
            </div>
          </div>
          <div class="col-6">
            <figure class="figure">
              <img
                src="images/1.png"
                class="figure-img img-fluid rounded-5"
                alt="..."
              />
            </figure>
          </div>
        </div>
      </div>
    </main>
    <main>
      <div class="container-fluid mt-5" id='about-me'>
        <div class="row">
          <div class="col-8 ps-4">
            <h4>― MY BACKGROUND</h4>
            <?php
              echo '<p>'.$row['my_bg'].'</p>';
            ?>
          </div>
          <div class="col-4">
            <h4>― SKILLS</h4>
            <?php
              echo '<p>'.$row['skills'].'</p>';
            ?>
          </div>
        </div>
        <div class="row">
          <div class="col-3 img-card">
            <figure class="figure">
              <img
                src="images/2.jpg"
                class="figure-img img-fluid rounded-5"
                alt="..."
              />
            </figure>
          </div>
          <div class="col-6 img-main">
            <figure class="figure">
              <img
                src="images/3.jpg"
                class="figure-img img-fluid rounded-5"
                alt="..."
              />
            </figure>
          </div>
          <div class="col-3 img-card">
            <figure class="figure">
              <img
                src="images/4.jpg"
                class="figure-img img-fluid rounded-5"
                alt="..."
              />
            </figure>
          </div>
        </div>
      </div>

      <div class="container mt-5" id='EXPERIENCE'>
        <div class="row">
          <div class="col-6">
            <h4>― WORK EXPERIENCE</h4>
          </div>
          <div class="col-6">
            <div class="info">
              <?php
              echo '<h4>'.$row['job'].'</h4>';
              echo '<p>'.$row['company_timer'].'</p>';
              echo '<p>'.$row['note'].'</p>';
              ?>
            </div>
            <br />
            <div class="info">
            <!--  <h4>Project manager</h4>
              <p>Yeall & Co / Aug 2016 - Aug 2018</p>
              <p>
                I was lucky to learn the ropes at Yeall Co., where I worked with
                an international team on projects including edible smartphone
                cases and human cloning.
      -->
              </p>
            </div>
          </div>
        </div>
      </div>  

      <div class="container mt-5">
        <div class="row">
          <div class="col-6">
            <h4>― EDUCATION</h4>
          </div>
          <br />
          <br />
          <br />
          <div class="col-6">
            <div class="info">
              <?php
             echo '<h4>'.$row['name_edu'].'</h4>';
             echo '<p>'.$row['diploma_timer'].'</p>';
              ?>
            </div>

            <div class="info">
              <h4></h4>
              <p></p>
            </div>
          </div>
        </div>
      </div>

     
    <div class="containers mt-5">
      <div class="background">
      <?php  
      echo '<h1 class="fs-3">'.$row['philosophy'].'</h1>';

        ?>
      </div>
    </div>



    <main>
      <div class="container-fluid ms-4 mt-5">
        <h1>What they say:</h1>
        <div class="row">
          <div class="col-4">
            <figure class="figure">
              <img
                src="images/5.jpg"
                class="figure-img img-fluid rounded-5"
                alt="..."
              />
            </figure>
          </div>
          <div class="col-8 right">
          <?php
            echo '<h4>'.$row['people1'].'</h4>';
            echo '<p class="mt-5">'.$row['note1'].'/p>';
          ?>
          </div>
        </div>
      </div>


      <div class="container-fluid ms-4 mt-5" id='TESTIMONIALS'>
      
        <div class="row ">
          <div class="col-4 ">
            <figure class="figure ">
              <img
                src="images/6.jpg"
                class="figure-img img-fluid rounded-5"
                alt="..."
              />
            </figure>
          </div>
          <div class="col-8 right">
          <?php
            echo '<h4>'.$row['people2'].'</h4>';
            echo '<p class="mt-5">'.$row['note2'].'/p>';
          ?>
          </div>
        </div>
      </div>
    </main>

    <main>
      <div class="container-fluid   ms-4" id='CONTACTS'>
        <div class="row">
          <div class="col-5 mt-5">
            <div class="input">
                <h6>Name:</h6>
              <div class="input-group mb-3">
                <input
                  type="text"
                  placeholder="Your name"
                  class="form-control"
                  aria-label="Dollar amount (with dot and two decimal places)"
                />
              </div>
            </div>

            <div class="input">
                <h6>Your email*:</h6>
              <div class="input-group mb-3">
                <input
                  type="text"
                  placeholder="Your email address"
                  class="form-control"
                  aria-label="Dollar amount (with dot and two decimal places)"
                />
              </div>
            </div>
            <div class="input">
                <h6>Message</h6>
              <div class="input-group mb-3">
                <input
                  type="text"
                  placeholder="Enter your message"
                  class="form-control"
                  aria-label="Dollar amount (with dot and two decimal places)"
                />
              </div>
            </div>
            <button type="button" class="btn btn-primary my-3">
           SUBMIT 
            </button>
            </div>
            <div class="col-7 image ">
              <img src="./images/7.jpg" class="rounded-5" alt="">
           </div>
          </div>
          
        </div>
      </div>
    </main>
<br></br>

    <main>
      <div class="footer -fluid ">
        <div class="row">
          <div class="col-6 d-flex align-items-center">
            <div class="start mx-3">
              <h1 class="fs-1  fw-bold">Nguyen Van Hung </h1>
              <p>Powered by Zyro.com</p>
              
            </div>
          </div>
          <div class="col-3">
            <figure class="figure">
              <h2 class="fs-5  fw-bold">- SOCIALS</h2>
              <br class="d-flex link ps-0 pt-3">
                <li class="link-item list-unstyled "><a href="" class="link-dark">Linkedin </a></li>
                <li class="link-item list-unstyled"><a href=""  class="link-dark" >Facebook  </a></li>
                <li class="link-item list-unstyled"><a href=""  class="link-dark">Twitter</a></li>
              </ul>
            </figure>
          </div>

          <div class="col-3">
            <figure class="figure">
              <h2 class="fs-5  fw-bold">― CONTACTS</h2>
              <br class="d-flex link ps-0 pt-3">
                <li class="link-item list-unstyled"><a href=""  class="link-dark">19510607242@e.tlu.edu.vn</a></li>
                <li class="link-item list-unstyled"><a href=""  class="link-dark">096944444</a></li>
                
              </ul>
            </figure>
          </div>
        </div>

      </div>
    </main>


    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
