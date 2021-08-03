<?php
    session_start();
    include('connection.php');

    if(isset($_POST['submit-1'])) {

        $emp_id = $_POST['emp-id'];

        $emp_id = stripcslashes($emp_id);
        $emp_id = mysqli_real_escape_string($con, $emp_id);

        $sql1 = "select emp_id from employee where emp_id = $emp_id limit 1";

        $result = mysqli_query($con, $sql1);
        $row = mysqli_fetch_row($result);
        $emp_id_new = $row[0];

        $sql = "delete from employee where emp_id = $emp_id_new";
        $alert = "Employee details of ID: $emp_id have been deleted!";

        if(mysqli_query($con, $sql)) {
            echo '<head>
                  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;800&display=swap" rel="stylesheet">
                  </head>
                  <body style="display: flex; justify-content: center; align-items: center; height: 100vh; width: 100%; font-family: Montserrat, sans-serif;">
                  <h1 style="font-size: 44px; font-weight: 400; text-transform: uppercase;">Redirecting you to the form page!</h1>
                  </body>';
            echo '<script type="text/javascript">
                    alert("'.$alert.'");
                    setInterval(function () {
                        location.replace("remove_emp.html")
                    }, 2000)
                </script>';
        }
        else {
            echo '<head>
                  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;800&display=swap" rel="stylesheet">
                  </head>
                  <body style="display: flex; justify-content: center; align-items: center; height: 100vh; width: 100%; font-family: Montserrat, sans-serif;">
                  <h1 style="font-size: 44px; font-weight: 400; text-transform: uppercase;">Employee '.$emp_id.' does not Exist!</h1>
                  </body>';
            echo '<script type="text/javascript">
                    setInterval(function () {
                    location.replace("remove_emp.html")
                    }, 2000)
                </script>';
        }
    }

    if(isset($_POST['submit-2'])) {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email-id'];

        $fname = stripcslashes($fname);
        $lname = stripcslashes($lname);
        $email = stripcslashes($email);
        $fname = mysqli_real_escape_string($con, $fname);
        $lname = mysqli_real_escape_string($con, $lname);
        $email = mysqli_real_escape_string($con, $email);

        $sql1 = "select emp_id from employee where Emp_First_Name = '$fname' and Emp_Last_Name = '$lname' and Emp_Email = '$email' limit 1";

        $result = mysqli_query($con, $sql1);
        $row = mysqli_fetch_row($result);
        $emp_id_1 = $row[0];

        $sql = "delete from employee where emp_id = $emp_id_1";

        $alert = "Employee details of ID: $emp_id_1 have been deleted!";

        if(mysqli_query($con, $sql)) {
            echo '<head>
                  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;800&display=swap" rel="stylesheet">
                  </head>
                  <body style="display: flex; justify-content: center; align-items: center; height: 100vh; width: 100%; font-family: Montserrat, sans-serif;">
                  <h1 style="font-size: 44px; font-weight: 400; text-transform: uppercase;">Redirecting you to the form page!</h1>
                  </body>';
            echo '<script type="text/javascript">
                    alert("'.$alert.'");
                    setInterval(function () {
                        location.replace("remove_emp.html")
                    }, 2000)
                </script>';
        }
        else {
            echo '<head>
                  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;800&display=swap" rel="stylesheet">
                  </head>
                  <body style="display: flex; justify-content: center; align-items: center; height: 100vh; width: 100%; font-family: Montserrat, sans-serif;">
                  <h1 style="font-size: 44px; font-weight: 400; text-transform: uppercase;">Employee "'.$fname.' '.$lname.'" does not Exist!</h1>
                  </body>';
            echo '<script type="text/javascript">
                    setInterval(function () {
                    location.replace("remove_emp.html")
                    }, 2000)
                </script>';
        }
    }

mysqli_close($con);
?>
