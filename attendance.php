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
            <div class="row mt-4">
                <div class="col-md-10 mt-1">
                    <button type="button" class="btn btn-dark btn-sm">view</button>
                </div>
                <div class="col-md-2 mt-1">
                    <a class="btn btn-dark btn-sm" href="add.php" role="button">Add Employee</a></button>
                </div>
            </div>
            <div class="table-responsive"><!---table starts-->
            <table class="table table-light table-borderless table-stripped mt-3">
                <thead>
                    <tr>
                        <th scope="col">EmployeeID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Father Name</th>
                        <th scope="col">email</th>
                        <th scope="col">Attendance</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query="SELECT * FROM emp";
                    $result=$conn->query($query);
                    while($show=$result->fetch_assoc()){
                    ?>

                    <tr>
                        <td><?php echo $show["emp_id"]?></td>
                        <td><?php echo $show["name"]?></td>
                        <td><?php echo $show["fname"]?></td>
                        <td><?php echo $show["email"]?></td>
                        <td>
                            Present<input type="radio" name="attendance[<?php echo $show['emp_id'] ?>]" value="present">Absent<input type="radio" name="attendance[<?php echo $show['emp_id']; ?>]" value="present">
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
            </div>
        
        </div>
</body>
</html>