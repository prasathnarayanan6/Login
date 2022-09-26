<?php 
    include_once("attendancecon.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Attendance</title>
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet"/>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
        <div class="table-heading mt-5">
            <center><h2 style="font-weight: bolder;">Attendance</h2><center>
        </div>
        <div class="container mt-4" style="border-radius:5px;">
        <?php
            error_reporting(0);
            if($_SERVER['REQUEST_METHOD']=='POST'){
                $emp=$_POST['emp'];
                $name=$_POST['name'];
                $fname=$_POST['fname'];
                $email=$_POST['email'];
                if($emp=="" || $name=="" ||$fname==""||$email==""){
                    echo "<div class='alert alert-danger'>
                        Fields must not be empty;
                    </div>";
                }
                else if(filter_var($email,FILTER_VALIDATE_EMAIL)){
                    echo "<div class='alert alert-danger'>
                    Invalid email format!!
                 </div>";
                }
                $query = "insert into emp(emp_id,name,fname,email) values('$emp','$name','$fname','$email')";
                $result=$conn->query($query);
                if($result){
                    echo "<div class='alert alert-success'>
                    Data inserted successfully;
                    </div>";
                }   
            }

        ?>
           
            <form class="mt-2" method="post">
                <div class="row mt-4">
                    <div class="col-md-10 mt-1">
                        <button type="button" class="btn btn-dark btn-sm">view</button>
                    </div>
                    <div class="col-md-2 mt-1">
                        <a class="btn btn-dark btn-sm" href="attendance.php" role="button">back</a>
                    </div>
                </div>


                <div class="form-group">
                        <label for="exampleInputEmail1" style="font-weight:600px;"><b>EMPID</b></label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="id" name="emp">
                </div>
                 <div class="form-group">
                        <label for="exampleInputEmail1" style="font-weight:600px;"><b>Name</b></label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name" name="name">
                 </div>
                 <div class="form-group mt-1">
                         <label for="exampleInputPassword1"><b>Father Name</b></label>
                         <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Father name" name="fname">
                 </div>
                 <div class="form-group mt-1">
                         <label for="exampleInputPassword1"><b>Email</b></label>
                         <input type="text" class="form-control" id="exampleInputPassword1" placeholder="email" name="email">
                 </div>
                 <button type="submit" class="btn btn-dark mt-2">Submit</button>
            </form>
  
        </div>
</body>
</html>