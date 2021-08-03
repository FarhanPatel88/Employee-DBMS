<?php
    session_start();
    include('connection.php');

    $emp_id = $_POST['emp-id'];
    $pro_id = $_POST['pro-id'];

    $sql = "select emp_id from employee where emp_id = $emp_id limit 1";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_row($result);
    $emp_id_new = $row[0];

    $sql1= "select project_id from project where project_id = $pro_id limit 1";
    $result1 = mysqli_query($con, $sql1);
    $row1 = mysqli_fetch_row($result1);
    $pro_id_new = $row1[0];

    $sql_new = "update employee set project_id = $pro_id_new where emp_id = $emp_id_new";
    $alert = "Project with ID: $pro_id has been alloted to the Employee with ID: $emp_id";

    if($emp_id === $emp_id_new) {
        if($pro_id === $pro_id_new) {
            if(mysqli_query($con, $sql_new)) {
                echo '<head>
                      <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;800&display=swap" rel="stylesheet">
                      </head>
                      <body style="display: flex; justify-content: center; align-items: center; height: 100vh; width: 100%; font-family: Montserrat, sans-serif;">
                      <h1 style="font-size: 44px; font-weight: 400; text-transform: uppercase;">Redirecting you to the form page!</h1>
                      </body>';
                echo '<script type="text/javascript">
                        alert("'.$alert.'");
                        setInterval(function () {
                            location.replace("add_emp_project.html")
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
                        location.replace("add_emp_project.html")
                    }, 3000)
                    </script>';
            }
        }
        else {
            echo '<head>
                  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;800&display=swap" rel="stylesheet">
                  </head>
                  <body style="display: flex; justify-content: center; align-items: center; height: 100vh; width: 100%; font-family: Montserrat, sans-serif;">
                  <h1 style="font-size: 44px; font-weight: 400; text-transform: uppercase;">Redirecting you to the form page!</h1>
                  </body>';
            echo '<script type="text/javascript">alert("Project with ID: '.$pro_id.' does not exist!");
                    setInterval(function () {
                        location.replace("add_emp_project.html")
                    }, 2000)
                    </script>';
        }
    }
    else {
        if($pro_id_new != $pro_id) {
            echo '<head>
                  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;800&display=swap" rel="stylesheet">
                  </head>
                  <body style="display: flex; justify-content: center; align-items: center; height: 100vh; width: 100%; font-family: Montserrat, sans-serif;">
                  <h1 style="font-size: 44px; font-weight: 400; text-transform: uppercase;">Employee with ID: '.$emp_id.' and Project with ID: '.$pro_id.' does not Exist!</h1>
                  </body>';
            echo '<script type="text/javascript">
                    setInterval(function () {
                    location.replace("add_emp_project.html")
                    }, 2000)
                </script>';
        }
        else {
            echo '<head>
                  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;800&display=swap" rel="stylesheet">
                  </head>
                  <body style="display: flex; justify-content: center; align-items: center; height: 100vh; width: 100%; font-family: Montserrat, sans-serif;">
                  <h1 style="font-size: 44px; font-weight: 400; text-transform: uppercase;">Redirecting you to the form page!</h1>
                  </body>';
              echo '<script type="text/javascript">alert("Employee with ID: '.$emp_id.' does not exist!");
                    setInterval(function () {
                        location.replace("add_emp_project.html")
                    }, 2000)
                    </script>';
            }
    }

    mysqli_close($con);
?>
