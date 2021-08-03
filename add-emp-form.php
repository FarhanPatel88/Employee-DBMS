<?php
include('connection.php');
$first_name=$_POST['f-name'];
$last_name=$_POST['l-name'];
$dob=$_POST['d-o-b'];
$join_date=$_POST['j-date'];
$email_id=$_POST['email-id'];
$location=$_POST['location'];
$pincode=$_POST['pin-code'];
$aptname=$_POST['apt-name'];
$res_floor=$_POST['res-floor'];
$dept_id=$_POST['dept-id'];
$position=$_POST['position'];
$project_id=$_POST['pro-id'];

// $password = stripcslashes($password);
// $password = mysqli_real_escape_string($con, $password);

$sql_dept = "select dept_id from department where dept_id = $dept_id";
$result = mysqli_query($con, $sql_dept);

$sql_pro = "select project_id from project where project_id = $project_id";
$result1 = mysqli_query($con, $sql_pro);

$sql= "Insert into employee (Emp_First_Name, Emp_Last_Name, Emp_DOB, Emp_Join_Date, Emp_Email, Emp_Location, Emp_Pincode, Emp_Apt_Name, Emp_Floor, Dept_ID, Project_id) values('$first_name', '$last_name', '$dob', '$join_date', '$email_id', '$location', $pincode, '$aptname', '$res_floor', $dept_id, $project_id)";

$sql_without= "Insert into employee (Emp_First_Name, Emp_Last_Name, Emp_DOB, Emp_Join_Date, Emp_Email, Emp_Location, Emp_Pincode, Emp_Apt_Name, Emp_Floor, Dept_ID) values('$first_name', '$last_name', '$dob', '$join_date', '$email_id', '$location', $pincode, '$aptname', '$res_floor', $dept_id)";

$sql1= "Insert into emp_new_position (New_Position, New_Position_Date) values('$position', '$join_date')";

$sql2= "update emp_new_position set emp_id = (select emp_id from employee where Emp_First_Name = '$first_name' and Emp_Last_Name = '$last_name' and
Emp_Email = '$email_id') where pos_id = (SELECT pos_id FROM emp_new_position ORDER BY pos_id DESC LIMIT 1)";

$sql3= "update emp_new_position set dept_id = (select dept_id from employee where Emp_First_Name = '$first_name' and Emp_Last_Name = '$last_name' and
Emp_Email = '$email_id') where pos_id = (SELECT pos_id FROM emp_new_position ORDER BY pos_id DESC LIMIT 1)";

$sql4 = "update employee set pos_id = (SELECT pos_id FROM emp_new_position ORDER BY pos_id DESC LIMIT 1) where Emp_First_Name = '$first_name' and Emp_Last_Name = '$last_name' and Emp_Email = '$email_id'";

// $result = mysqli_query($con, $sql1);
// $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
// $count = mysqli_num_rows($result);

if($result) {
        $row = mysqli_fetch_row($result);
        $dept_id_new = $row[0];

    if($result1) {
        $row1 = mysqli_fetch_row($result1);
        $project_id_new = $row1[0];

        if($dept_id === $dept_id_new) {
            if($project_id === $project_id_new) {
                if(mysqli_query($con, $sql) && mysqli_query($con, $sql1) && mysqli_query($con, $sql2) && mysqli_query($con, $sql3) && mysqli_query($con, $sql4)) {
                      echo '<head>
                            <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;800&display=swap" rel="stylesheet">
                            </head>
                            <body style="display: flex; justify-content: center; align-items: center; height: 100vh; width: 100%; font-family: Montserrat, sans-serif;">
                            <h1 style="font-size: 44px; font-weight: 400; text-transform: uppercase;">Redirecting you to the form page!</h1>
                            </body>';
                            echo '<script type="text/javascript">alert("Your data has been successfully submitted");
                                    setInterval(function () {
                                        location.replace("add-emp-form.html")
                                    }, 2000)
                                </script>';
                  }
            else {
                  echo '<head>
                  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;800&display=swap" rel="stylesheet">
                  </head>
                  <body style="display: flex; justify-content: center; align-items: center; height: 100vh; width: 100%; font-family: Montserrat, sans-serif;">
                  <h1 style="font-size: 32px; font-weight: 400; text-transform: uppercase;">Error creating record: '.mysqli_error($con).'</h1>
                  </body>';
                  echo '<script type="text/javascript">
                          setInterval(function () {
                          location.replace("add-emp-form.html")
                      }, 3000)
                      </script>';
                  }
          }
          else {
              echo '<head>
              <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;800&display=swap" rel="stylesheet">
              </head>
              <body style="display: flex; justify-content: center; align-items: center; height: 100vh; width: 100%; font-family: Montserrat, sans-serif;">
              <h1 style="font-size: 32px; font-weight: 400; text-transform: uppercase;">Project with ID: '.$project_id.' does not exist!</h1>
              </body>';
              echo '<script type="text/javascript">
                      setInterval(function () {
                      location.replace("add-emp-form.html")
                  }, 3000)
                  </script>';
          }
      }
      else {
          echo '<head>
          <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;800&display=swap" rel="stylesheet">
          </head>
          <body style="display: flex; justify-content: center; align-items: center; height: 100vh; width: 100%; font-family: Montserrat, sans-serif;">
          <h1 style="font-size: 32px; font-weight: 400; text-transform: uppercase;">Department with ID: '.$dept_id.' does not exist!</h1>
          </body>';
          echo '<script type="text/javascript">
                  setInterval(function () {
                  location.replace("add-emp-form.html")
              }, 3000)
              </script>';
      }
    }
    else {
        if($dept_id === $dept_id_new) {
                if(mysqli_query($con, $sql_without) && mysqli_query($con, $sql1) && mysqli_query($con, $sql2) && mysqli_query($con, $sql3) && mysqli_query($con, $sql4)) {
                      echo '<head>
                            <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;800&display=swap" rel="stylesheet">
                            </head>
                            <body style="display: flex; justify-content: center; align-items: center; height: 100vh; width: 100%; font-family: Montserrat, sans-serif;">
                            <h1 style="font-size: 44px; font-weight: 400; text-transform: uppercase;">Redirecting you to the form page!</h1>
                            </body>';
                            echo '<script type="text/javascript">alert("Your data has been successfully submitted");
                                    setInterval(function () {
                                        location.replace("add-emp-form.html")
                                    }, 2000)
                                </script>';
                  }
            else {
                  echo '<head>
                  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;800&display=swap" rel="stylesheet">
                  </head>
                  <body style="display: flex; justify-content: center; align-items: center; height: 100vh; width: 100%; font-family: Montserrat, sans-serif;">
                  <h1 style="font-size: 32px; font-weight: 400; text-transform: uppercase;">Error creating record: '.mysqli_error($con).'</h1>
                  </body>';
                  echo '<script type="text/javascript">
                          setInterval(function () {
                          location.replace("add-emp-form.html")
                      }, 3000)
                      </script>';
                  }
      }
      else {
          echo '<head>
          <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;800&display=swap" rel="stylesheet">
          </head>
          <body style="display: flex; justify-content: center; align-items: center; height: 100vh; width: 100%; font-family: Montserrat, sans-serif;">
          <h1 style="font-size: 32px; font-weight: 400; text-transform: uppercase;">Department with ID: '.$dept_id.' does not exist!</h1>
          </body>';
          echo '<script type="text/javascript">
                  setInterval(function () {
                  location.replace("add-emp-form.html")
              }, 3000)
              </script>';
          }
    }
}
mysqli_close($con);
?>
