<?php
    session_start();
    include('./dbcon.php');

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
    <link rel="stylesheet" href="./css/update.css">
</head>
<body>
    <div class="register">
                <div class="row">
                    <form class="register-right" action="./process.php" method="post">
                        <ul class="nav nav-tabs nav-justified mr-2">
                            <li class="nav-item">
                                <a class="nav-link btn-success mr-2" href="./dashboard.php">Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link btn-warning" href="logout.php">Log Out</a>
                            </li>
                        </ul>

                        <?php
                            $stId = $_GET['id'];
                            $query = "SELECT * FROM st_details WHERE id='$stId'";
                            $res = mysqli_query($con, $query);
                            $row = mysqli_fetch_assoc($res);

                            

                        ?>

                        <div>
                            <div>
                                <h3 class="register-heading text-primary">Update Student <span class="text-danger"><?php echo $row['fullname'];?></span> Details</h3>
                                <div class="row register-form">

                                    
                                </div>
                                <div class="row p-2">
                                <div class="col-sm">
                                        <div class="form-group">
                                            <label for="nic" class="form-label">NIC</label>
                                            <input type="text" class="form-control border border-success" placeholder="NIC *" value="<?php echo $row['nic']; ?>" name="nic" readonly/>
                                        </div>

                                        <div class="form-group">
                                            <label for="name" class="form-label">Full Name</label>
                                            <input type="text" class="form-control border border-success" placeholder="Full Name *" value="<?php echo $row['fullname']; ?>" name="name" readonly/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label class="form-label" for="gender">Gender</label>
                                            <div class="maxl">
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="<?php echo $row['gender']; ?>" checked>
                                                    <span> <?php echo $row['gender']; ?> </span> 
                                                </label>
                                                
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="email" class="form-control border border-success" name="email" value="<?php echo $row['email']; ?>" required/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="phone" class="form-label">Contact Number</label>
                                            <input type="text" minlength="10" maxlength="10" name="phone" class="form-control border border-success" value="<?php echo $row['phone']; ?>" required/>
                                        </div>

                                        <div class="form-group">
                                            <label for="district">District</label>
                                            <select name="district" class="form-control border border-success" required>
                                                <option selected disabled><?php echo $row['district']; ?></option>
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
                                    <div class="col-sm">
                                        
                                        <div class="form-group">
                                            <label for="degree" class="form-label">Selected Pathway: </label>
                                            <select class="form-control border border-success" name="path" required>
                                                <option class="hidden"  selected disabled><?php echo $row['pathway']; ?></option>
                                                <option value="Foundation">Foundation Programm</option>
                                                <option value="FAB">SLIIT Business School</option>
                                                <option value="FOC">Faculty of Computing</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="degree" class="form-label">Selected Programm: </label>
                                            <input type="text" value="<?php echo $row['programm']; ?>" name="programm" class="form-control border border-success">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="degree" class="form-label">Stream: </label>
                                            <input type="text" value="<?php echo $row['scheme']; ?>" name="stream" class="form-control border border-success">
                                        </div>

                                        <div class="form-group">
                                            <label class="form-label">Result Status</label>
                                            <select class="form-control border border-success" name="scheme_status" required>
                                                <option class="hidden"  selected disabled value="<?php echo $row['scheme_status']; ?>"><?php echo $row['scheme_status']; ?></option>
                                                <option value="Passed">Pass</option>
                                                <option value="Pending">Result Pending</option>
                                            </select>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label class="form-label">Selected Intake</label>
                                            <select class="form-control border border-success" name="intake" required>
                                                <option class="hidden"  selected disabled value="<?php echo $row['intake']; ?>"><?php echo $row['intake']; ?></option>
                                                <option value="2025 - January">2025 - January</option>
                                                <option value="2025 - June">2025 - June</option>
                                                <option value="2025 - September">2025 - September</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="degree" class="form-label">Submitted User </label>
                                            <input type="text" value="<?php echo $row['submittedUser']; ?>" readonly name="submittedUser" class="form-control border border-success">
                                        </div>
                                        
                                    </div>

                                    <div class="col-sm">
                                        <div class="form-group">
                                            <label for="degree" class="form-label">Submitted Time </label>
                                            <input type="text" value="<?php echo $row['submittedTime']; ?>" readonly name="submittedTime" class="form-control border border-success">
                                        </div>

                                        <div class="form-group">
                                            <label for="followUpCount" class="form-label">Followup Count </label>
                                            <input type="number" value="<?php echo $row['followUpCount']; ?>" name="followUpCount" class="form-control border border-success">
                                        </div>

                                        <div class="form-group">
                                            <label class="form-label">Apptitude Fee Status</label>
                                            <select class="form-control border border-primary" name="apptitued_fee" required>
                                                <option class="hidden"  selected disabled><?php echo $row['apptitued_fee']; ?></option>
                                                <option value="Paid">Paid</option>
                                                <option value="Not Paid">Not Paid</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label class="form-label">Apptitude Exam Status</label>
                                            <select class="form-control border border-primary" name="apptituede_status" required>
                                                <option class="hidden"  selected disabled value="<?php echo $row['apptituede_status']; ?>"><?php echo $row['apptituede_status']; ?></option>
                                                <option value="Pass">Pass</option>
                                                <option value="Fail">Fail</option>
                                                <option value="Result Pending">Result Pending</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label class="form-label">Semester Fee</label>
                                            <select class="form-control border border-primary" name="semester_fee" required>
                                                <option class="hidden"  selected disabled value="<?php echo $row['semester_fee']; ?>"><?php echo $row['semester_fee']; ?></option>
                                                <option value="Paid">Paid</option>
                                                <option value="Not Paid">Not Paid</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label class="form-label">Source</label>
                                            <input type="text" readonly class="form-control border border-success" value="<?php echo $row['info_source']; ?>">
                                        </div>
                                        
                                    </div>
                                    <div class="col-sm">
                                        <div class="form-group">
                                            <label class="form-label">Remarks</label>
                                            <textarea class="form-control border border-success" name="remarks" rows="10"><?php echo $row['remarks'];?></textarea>
                                        </div>

                                        <div class="form-group">
                                            <label class="form-label">Status</label>
                                            <select class="form-control border border-success" name="status" required>
                                                <option class="hidden"  selected disabled value="<?php echo $row['current_status']; ?>"><?php echo $row['current_status']; ?></option>
                                                <option value="Open">Open</option>
                                                <option value="Closed">Closed</option>
                                            </select>
                                        </div>
                                        
                                        <input type="submit" class="btn btn-primary btn-md mt-4 w-100 hover-zoom"  value="Update" name="update"/>

                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </form>
                </div>

            </div>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="./script/updateScript.js"></script>
</body>
</html>