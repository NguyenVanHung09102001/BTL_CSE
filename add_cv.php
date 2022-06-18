<!-- header -->

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
              <a class="navbar-brand fs-4 fw-bold text-primary " href="#">HUNG</a>
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
                  <a class="nav-link active fs-6 text-primary " aria-current="page" href="#">ABOUT ME </a>
                  <a class="nav-link fs-6 text-primary" href="#">EXPERIENCE</a>
                  <a class="nav-link fs-6 text-primary" href="#">TESTIMONIALS</a>
                  <a class="nav-link fs-6 text-primary">CONTACTS</a>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </head>


    <main>
    <div class="container">
        <h5 class="text-center text-primary mt-5">ADD NEW CV </h5>
       
        <form action="process_add_cv.php" method="post">
            <div class="form-group">
                <label for="txtname_">Name </label>
                <input type="text" class="form-control" id="txtname" name="txtname_" placeholder="Your name ">
               
            </div>
            
            <div class="form-group">
                <label for="txtwork">Work </label>
                <input type="text" class="form-control" id="txtwork_" name="txtwork_" placeholder="Your work ">
                <!-- <small id="txtHoTenHelp" class="form-text text-muted">Có thể dùng nó hiển thị thông báo lỗi hoặc gợi ý</small> -->
            </div>

            <div class="form-group">
                <label for="txtmy_bg"> My background</label>
                <input type="text" class="form-control" id="txtmy_bg" name="txtmy_bg" placeholder="Enter your backgrounds">
                <!-- <small id="txtHoTenHelp" class="form-text text-muted">Có thể dùng nó hiển thị thông báo lỗi hoặc gợi ý</small> -->
            </div>
            <div class="form-group">
                <label for="txtskills">Skills</label>
                <input type="text" class="form-control" id="txtskills" name="txtskills" placeholder=" Enter your skills">
                
            </div>
            <div class="form-group">
                <label for="txtname_edu">Name edu</label>
                <input type="text" class="form-control" id="txtname_edu" name="txtname_edu" placeholder="Enter your name education">
               
            </div>

            <div class="form-group">
                <label for="txtdiploma_timer">Diploma/Timer</label>
                <input type="text" class="form-control" id="txtdiploma_timer" name="txtdiploma_timer" placeholder="Enter your Diploma/Timer ">
               
            </div>

            <div class="form-group">
                <label for="txtjob">Job</label>
                <input type="text" class="form-control" id="txtjob" name="txtjob" placeholder="Enter your job ">
               
            </div>

            <div class="form-group">
                <label for="txtcompany_timer">Company/Timer</label>
                <input type="text" class="form-control" id="txtcompany_timer" name="txtcompany_timer" placeholder="Enter your company/timer  ">
               
            </div>

            <div class="form-group">
                <label for="txtnote">Note</label>
                <input type="text" class="form-control" id="txtnote" name="txtnote" placeholder="Enter your note  ">
    
            </div>

            <div class="form-group">
                <label for="txtpeople1">People1</label>
                <input type="text" class="form-control" id="txtpeople1" name="txtpeople1" placeholder="Enter your people 1 ">
    
            </div>
            <div class="form-group">
                <label for="txtnote1">Note</label>
                <input type="text" class="form-control" id="txtnote1" name="txtnote1" placeholder="Enter your note1  ">
    
            </div>

            <div class="form-group">
                <label for="txtpeople2">People2</label>
                <input type="text" class="form-control" id="txtpeople2" name="txtpeople2" placeholder="Enter your people 2 ">
    
            </div>
            <div class="form-group">
                <label for="txtnote2">Note</label>
                <input type="text" class="form-control" id="txtnote2" name="txtnote2" placeholder="Enter your note2  ">
    
            </div>
            <div class="form-group">
                <label for="txtphilosophy">Philosophy</label>
                <input type="textphilosophy" class="form-control" id="textphilosophy" name="textphilosophy" placeholder="Enter your philosophy ">
    
            </div>
           
            <button type="submit" class="btn btn-primary mt-3">SUBMIT</button>
        </form>
    </div>    
    </main>
    <br></br>

    <!-- footer -->
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
