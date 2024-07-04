<?php
    session_start();
    if(!isset($_SESSION['user'])){
        header('location:index.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form </title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="./css/register.css">
</head>
<body>
    <div class="register">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="./img/sliit.png" alt=""/>
                        <h2>Welcome <?php echo $_SESSION['user']; ?></h2>
                    </div>
                    <form class="col-md-9 register-right" action="./process.php" method="post">
                        <ul class="nav nav-tabs nav-justified">
                            
                            <li class="nav-item">
                                <a class="nav-link btn-success mr-2" href="./dashboard.php">Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link btn-warning" href="logout.php">Log Out</a>
                            </li>
                            
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading text-dark">Register Student Details</h3>
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="nic" class="form-label">NIC</label>
                                            <input type="text" class="form-control border border-success" placeholder="NIC *" value="" name="nic" required/>
                                        </div>

                                        <div class="form-group">
                                            <label for="name" class="form-label">Full Name</label>
                                            <input type="text" class="form-control border border-success" placeholder="Full Name *" value="" name="name" required/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label class="form-label" for="gender">Gender</label>
                                            <div class="maxl">
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="Male" checked>
                                                    <span> Male </span> 
                                                </label>
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="Female">
                                                    <span>Female </span> 
                                                </label>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="email" class="form-control border border-success" name="email" placeholder="Email *" required/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="phone" class="form-label">Contact Number</label>
                                            <input type="text" minlength="10" maxlength="10" name="phone" class="form-control border border-success" placeholder="Phone *" required/>
                                        </div>

                                        <div class="form-group">
                                            <label for="district">District</label>
                                            <select name="district" class="form-control border border-success" required>
                                                <option selected disabled>Select District: *</option>
                                                <option value="Kandy">Kandy</option>
                                                <option value="Matale">Matale</option>
                                                <option value="Kurunegala">Kurunegala</option>
                                                <option value="Kegalle">Kegalle</option>
                                                <option value="Badulla">Badulla</option>
                                                <option value="Nuwara Eliya">Nuwara Eliye</option>
                                                <option value="Jaffna">Jaffna</option>
                                                <option value="Kilinochchi">Kilinochchi</option>
                                                <option value="Mannar">Mannar</option>
                                                <option value="Mullaitivu">Mullaitivu</option>
                                                <option value="Vavuniya">Vavuniya</option>
                                                <option value="Puttalam">Puttalam</option>
                                                <option value="Gampaha">Gampaha</option>
                                                <option value="Colombo">Colombo</option>
                                                <option value="Kalutara">Kalutara</option>
                                                <option value="Anuradhapura">Anuradhapura</option>
                                                <option value="Polonnaruwa">Polonnaruwa</option>
                                                <option value="Ratnapura">Ratnapura</option>
                                                <option value="Trincomalee">Trincomalee</option>
                                                <option value="Batticaloa">Batticaloa</option>
                                                <option value="Ampara">Ampara</option>
                                                <option value="Monaragala">Monaragala</option>
                                                <option value="Hambantota">Hambantota</option>
                                                <option value="Matara">Matara</option>
                                                <option value="Galle">Galle</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        
                                        <div class="form-group">
                                            <label for="degree" class="form-label">Preferred Pathway: </label>
                                            <select class="form-control border border-success" onchange="changeScheme(event)" name="path" required>
                                                <option class="hidden"  selected disabled>Select one: *</option>
                                                <option value="Foundation">Foundation Programm</option>
                                                <option value="FAB">SLIIT Business School</option>
                                                <option value="FOC">Faculty of Computing</option>
                                            </select>
                                        </div>
                                        
                                        <div class="form-group" id="programme"></div>
                                        <div class="form-group" id="education"></div>
                                        <div class="form-group" id="resultData"></div>
                                        <div class="form-group" id="intake"></div>

                                        <div class="form-group">
                                            <label class="form-label">Source</label>
                                            <select class="form-control border border-success" name="source" required>
                                                <option class="hidden" selected disabled>Select one: *</option>
                                                <option value="Walking">Walking</option>
                                                <option value="Inbound">Inbound</option>
                                                <option value="Outbound">Outbound</option>
                                                <option value="Exhibition">Exhibition</option>
                                                <option value="Facebook">Facebook</option>
                                            </select>
                                        </div>
                                        
                                        <input type="submit" class="btn btn-primary btn-md w-100"  value="Register" name="register"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="./script/registerScript.js"></script>
</body>
</html>