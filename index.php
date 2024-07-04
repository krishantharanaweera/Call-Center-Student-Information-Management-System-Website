<?php
    session_start();
    if(isset($_SESSION['user'])){
        header('location:studentRegister.php');
    }else{
        ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Student Registration Details - Krishantha Ranaweera</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="./css/login.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    </head>
    <body>
        
    <section class="gradient-form main">
        <div class="container py-5">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-xl-10">
              <div class="card rounded-3 text-black">
                <div class="row g-0">
                  <div class="col-lg-6">
                    <div class="card-body p-md-5 mx-md-4">
      
                      <div class="text-center">
                        <img src="./img/sliit.png" class="logoImage w-25" alt="logo">
                        <h4 class="mt-1 mb-5 pb-1">SLIIT Kandy Uni Student Registration System</h4>
                      </div>
      
                      <form action="./process.php" method="post">
                        <p>Please login to your account</p>
      
                        <div data-mdb-input-init class="form-outline mb-4">
                          <label class="form-label" for="form2Example11" style="font-weight: bold;">Username</label>
                          <input type="text" id="form2Example11" class="form-control border border-primary"
                            placeholder="Username" required name="username"/>
                        </div>
      
                        <div data-mdb-input-init class="form-outline mb-4">
                          <label class="form-label" style="font-weight: bold;" for="form2Example22">Password</label>
                          <input type="password" id="form2Example22" class="form-control border border-primary" required name="password"/>
                        </div>
      
                        <div class="text-center pt-1 mb-5 pb-1">
                          <input data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3 px-5 h1" type="submit" value="Log In" name="login">
                        </div>
                      </form>
      
                    </div>
                  </div>
                  <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                    <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                      <h4 class="mb-4">Welcome to SLIIT Kandy Uni</h4>
                      <p class="small mb-0">SLIIT KANDY UNI, an expansion of the Sri Lanka Institute of Information Technology (SLIIT), is part of the institution's commitment to advancing education in Sri Lanka. Established in 1999, SLIIT initially aimed to address the growing demand for IT professionals in the country, evolving into a degree-awarding institute in 2000 with notable developments and expansions island wide..</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    </body>
    </html>

<?php
    }
?>