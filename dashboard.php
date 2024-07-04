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
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="author" content="Krishantha Ranaweera">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.14/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
        <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,800&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/dashboard.css">
        <title>Student Details Dashboard - SLIIT Kandy Uni</title>
    </head>
<body>
    
    <div class=" p-30 bg-primary" style="height:100vh">
        <div class="row">
            <div class="col-md-12 main-datatable" >
                <div class="card_body">
                    <div class="row d-flex bg-dark">
                        <div class="col-sm-4 createSegment"> 
                         <a class="btn dim_button create_new" href="./studentRegister.php"> <span class="glyphicon glyphicon-plus"></span> Add New Student</a>
                        </div>
                        <div class="col-sm-4 "> 
                            <a class="userClass" href="#"><?php echo $_SESSION['user']; ?></a>
                        </div>
                        <?php
                            if(isset($_SESSION['user_check'])){
                                ?>
                                    <script>
                                        alert("User already registerd in the system.");
                                    </script>
                                <?php
                                unset($_SESSION['user_check']);
                            }
                        ?>
                        <script> 
                            
                        </script>
                        <div class="col-sm-8 ">
                        <!-- 
                            <div class="form-group searchInput">
                                <label for="email">Search:</label>
                                <input type="text" class="form-control" id="searchItem" placeholder="Search using NIC" onkeyup="searchStudent()">

                            </div>
                        -->
                            <div class="input-group">
                                <div class="form-outline" data-mdb-input-init>
                                    <input id="search-input" type="search" id="form1" class="form-control" />
                                    <label class="form-label" for="form1">Search</label>
                                </div>
                                <button id="search-button" type="button" class="btn btn-primary">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                            

                            <div class="form-group logOut">
                                <a href="logout.php" class="btn btn-primary">Log Out</a> 
                            </div>
                        </div> 
                    </div>
                    <div class="table-responsive" >
                        <table class="table" id="stTable">
                            <thead>
                                <tr>
                                  <th scope="col" class="headCol sticky-col first-col">Id</th>
                                  <th scope="col" class="second-col sticky-col">NIC</th>
                                  <th scope="col" class="sticky-col third-col">Name</th>
                                  <th scope="col">Gender</th>
                                  <th scope="col">Email</th>
                                  <th scope="col">Contact Number</th>
                                  <th scope="col">District</th>
                                  <th scope="col">Pathway</th>
                                  <th scope="col">Preferred Program</th>
                                  <th scope="col">Stream</th>
                                  <th scope="col">Result Details</th>
                                  <th scope="col">Intake</th>
                                  <th scope="col">Agent Name</th>
                                  <th scope="col">Inserted Time</th>
                                  <th scope="col">Followup Count</th>
                                  <th scope="col">Apptitude Fee</th>
                                  <th scope="col">Apptitude Status</th>
                                  <th scope="col">Semester Fee</th>
                                  <th scope="col">Source</th>
                                  <th scope="col">Remarks</th>
                                  <th scope="col">Action</th>
                                </tr>
                              </thead>
                              <tbody>
                                <?php
                                    $query3 = "SELECT * FROM st_details";
                                    $res1 = mysqli_query($con, $query3);
                                    $count = mysqli_num_rows($res1);
                                    $num = ceil($count/5);

                                    if(isset($_GET['page'])){
                                        $currentPage=$_GET['page'];
                                    }else{
                                        $currentPage=1;
                                    }
                                    
                                    if($currentPage=="" || $currentPage==1){
                                        $nextPage = 0;
                                    }else{
                                        $nextPage = ($currentPage*5)-5;
                                    }
                                    $query = "SELECT * FROM st_details ORDER BY id DESC LIMIT $nextPage,6";
                                    $res = mysqli_query($con,$query);
                                    if(mysqli_num_rows($res)>0){
                                        while($row=mysqli_fetch_assoc($res)){
                                            $id = $row['id'];
                                            ?>
                                                <tr>
                                                    <td scope="row" class="sticky-col first-col"><?php echo $row['id'];?></td>
                                                    <td class="sticky-col second-col"><?php echo $row['nic']; ?></td>
                                                    <td class="sticky-col third-col row"><?php echo $row['fullname']; ?></td>
                                                    <td><?php echo $row['gender']; ?></td>
                                                    <td><?php echo $row['email']; ?></td>
                                                    <td><?php echo $row['phone']; ?></td>
                                                    <td><?php echo $row['district']; ?></td>
                                                    <td><?php echo $row['pathway']; ?></td>
                                                    <td><?php echo $row['programm']; ?></td>
                                                    <td><?php echo $row['scheme']; ?></td>
                                                    <td><?php echo $row['scheme_status']; ?></td>
                                                    <td><?php echo $row['intake'];?></td>
                                                    <td><?php echo $row['submittedUser']; ?></td>
                                                    <td><?php echo $row['submittedTime']; ?></td>
                                                    <td><?php echo $row['followUpCount']; ?></td>
                                                    <td><?php echo $row['apptitued_fee']; ?></td>
                                                    <td><?php echo $row['apptituede_status']; ?></td>
                                                    <td><?php echo $row['semester_fee'];?></td>
                                                    <td><?php echo $row['info_source'];?></td>
                                                    <td><?php echo $row['remarks']; ?></td>
                                                    <td><?php echo $row['current_status'];?></td>
                                                    <td>
                                                            <a href="updateData.php?id=<?php echo $id; ?>" class="btn btn-sm btn-success btnAction">Update</a>
                                                            <a href="#" class="btn btn-sm btn-danger mt-2">Delete</a>
                                                        
                                                    </td>
                                                </tr>
                                            <?php
                                        }
                                    }

                                ?>
                              </tbody>
                        </table>
                    </div>
                    <p style="background-color: darkcyan; color:white; text-align:center; margin-bottom:0;">
                    <?php
                    
                        for($a=1; $a<$num; $a++){
                            ?>
                                <a href="dashboard.php?page=<?php echo $a; ?>" style="text-decoration:none; color:white; font-size:2rem;">
                                    <?php echo $a; ?>
                                </a>
                            <?php
                        }
                    ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
 
    <script>
        $(document).ready(function(){
            $('#stTable').DataTable({
                "pagingType":"full_numbers"
            });
        });
    </script>

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.14/js/jquery.dataTables.min.js"></script>
<script src="script/dashboard.js"></script>
</body>
</html>

