<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
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
                  <a class="nav-link active fs-6 text-primary " aria-current="page" href="#">ABOUT ME </a>
                  <a class="nav-link fs-6 text-primary" href="#">EXPERIENCE</a>
                  <a class="nav-link fs-6 text-primary" href="#">TESTIMONIALS</a>
                  <a class="nav-link fs-6 text-primary">CONTACTS</a>         
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
            <form class="form-signin" action="process_signup_cv.php" method="post">
            
            <h1 class="h3 mb-3 font-weight-normal">Sign Up</h1>
            <label for="inputUsername" class="sr-only">User name</label>
            <input type="text" id="inputUser" name="txtUser" class="form-control" placeholder="Username" required autofocus>
            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="email" id="inputEmail" name="txtEmail" class="form-control" placeholder="Email address" required autofocus>
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="inputPassword" name="txtPass1" class="form-control" placeholder="Password" required>
            <label for="inputPassword" class="sr-only">Retype Password</label>
            <input type="password" id="inputRetypePassword" name="txtPass2" class="form-control" placeholder="Retype password" required>
            <div class="checkbox mb-3">
                <?php
                    if(isset($_GET['error'])){
                        echo "<h5 style='color:red'> {$_GET['error']} </h5>";
                    }

                ?>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit" name="btnSignUp" >Sign Up</button>
            <p class="mt-5 mb-3 text-muted">&copy; 2021 - 2022 </p>
            </form>
        </div>    
    </main>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>