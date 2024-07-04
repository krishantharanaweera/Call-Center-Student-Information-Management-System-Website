<?php
    session_start();
    include('./dbcon.php');


    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];


        $query = "SELECT * FROM staff WHERE un='$username' AND pw='$password'";
        $res = mysqli_query($con, $query);

        if(mysqli_num_rows($res)>0){
            $_SESSION['user']=$username;
            header('location:studentRegister.php');
        }else{
            echo "Wrong Credentials";
        }
    }

    if(isset($_POST['register'])){
        $nic = $_POST['nic'];
        $name = $_POST['name'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $district = $_POST['district'];
        $path = $_POST['path'];

        $programm = $_POST['programm'];
        $scheme = $_POST['scheme'];
        $scheme_status = $_POST['scheme_status'];
        $intake = $_POST['intake'];

        $user = $_SESSION['user'];
        $time = date('Y-m-d');
        $followUpCount = 0;
        $apptitudeFee = "Not Paid";
        $apptitudeStatus = "Pending";
        $semesterFee = "Not paid";
        $status = "Open";
        $remarks = "added to system";
        $source = $_POST['source'];

        

        $query2 = "SELECT * FROM st_details WHERE nic='$nic'";
        $res2=mysqli_query($con,$query2);

        if(mysqli_num_rows($res2)>0){
            $_SESSION['user_check']="User already registered.";
            header('location:dashboard.php');
        }else{
            $query = "INSERT INTO st_details(nic,fullname,gender,email,phone,district,pathway,programm,scheme,scheme_status,intake,submittedUser,submittedTime,followUpCount,apptitued_fee,apptituede_status,semester_fee,info_source,remarks,current_status) VALUES('$nic','$name','$gender','$email','$phone','$district','$path','$programm','$scheme','$scheme_status','$intake','$user','$time','$followUpCount','$apptitudeFee','$apptitudeStatus','$semesterFee','$source','$remarks','$status')";

            $res = mysqli_query($con, $query);
            if($res){
                $_SESSION['msg']="Successfull inserted!";
                header('location:dashboard.php');
            }
        }

        

    }