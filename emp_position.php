<?php
    session_start();
    include('connection.php');

    $emp_id = $_POST['emp-id'];
    $dept_id = $_POST['dept-id'];
    $position = $_POST['position'];
    $pos_date = $_POST['pos-date'];

    $sql = "select Emp_id, Dept_ID from employee where Emp_id = $emp_id and Dept_ID = $dept_id limit 1";
    $sql1 = "select Emp_id, Dept_ID from emp_new_position where Emp_id = $emp_id and Dept_ID = $dept_id limit 1";
    // $sql1 = "select Dept_ID from department where Dept_ID = $dept_id limit 1";
    // $sql1 = "select Dept_Name from department where Dept_Name = '$dept_name' limit 1";

    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_row($result);
    $emp_id_new = $row[0];
    $dept_id_new = $row[1];

    $result1 = mysqli_query($con, $sql1);
    $row1 = mysqli_fetch_row($result1);
    $emp_id_new1 = $row1[0];
    $dept_id_new1 = $row1[1];

    $sql_new1 = "update emp_new_position set New_Position = '$position', New_Position_Date = '$pos_date' where Emp_id = $emp_id_new1 and Dept_ID = $dept_id_new1";

    $sql_new = "insert into emp_new_position(Emp_id, Dept_ID, New_Position, New_Position_Date) values($emp_id_new, $dept_id_new, '$position', '$pos_date')";

    $sql_new2 = "update employee set pos_id = (SELECT pos_id FROM emp_new_position ORDER BY pos_id DESC LIMIT 1) where Emp_id = $emp_id_new and Dept_ID = $dept_id_new";

    $alert = "Position details of Employee-ID: $emp_id_new and Department_ID: $dept_id_new have been updated!";
    $alert1 = "Position details of Employee-ID: $emp_id_new and Department_ID: $dept_id_new have been inserted!";

    // echo $dept_id_new;
    // echo $dept_name_new;
    if($emp_id_new1 == $emp_id) {
        if($dept_id_new1 == $dept_id) {
            if(mysqli_query($con, $sql_new1)) {
                echo '<head>
                      <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;800&display=swap" rel="stylesheet">
                      </head>
                      <body style="display: flex; justify-content: center; align-items: center; height: 100vh; width: 100%; font-family: Montserrat, sans-serif;">
                      <h1 style="font-size: 44px; font-weight: 400; text-transform: uppercase;">Redirecting you to the form page!</h1>
                      </body>';
                echo '<script type="text/javascript">
                        alert("'.$alert.'");
                        setInterval(function () {
                            location.replace("emp_position.html")
                        }, 2000)
                    </script>';
            }
            else {
                echo '<head>
                      <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;800&display=swap" rel="stylesheet">
                      </head>
                      <body style="display: flex; justify-content: center; align-items: center; height: 100vh; width: 100%; font-family: Montserrat, sans-serif;">
                      <h1 style="font-size: 44px; font-weight: 400; text-transform: uppercase;">Error creating a record: '.mysqli_error($con).'</h1>
                      </body>';
                echo '<script type="text/javascript">
                        setInterval(function () {
                        location.replace("emp_position.html")
                        }, 2000)
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
            echo '<script type="text/javascript">alert("Employee with ID: '.$emp_id.' cannot be found or He/She is not in the department with ID: '.$dept_id.'!");
                    setInterval(function () {
                        location.replace("emp_position.html")
                    }, 2000)
                    </script>';
        }
    }
    else {
        // if($dept_id_new != $dept_id) {
        //     echo '<head>
        //           <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;800&display=swap" rel="stylesheet">
        //           </head>
        //           <body style="display: flex; justify-content: center; align-items: center; height: 100vh; width: 100%; font-family: Montserrat, sans-serif;">
        //           <h1 style="font-size: 44px; font-weight: 400; text-transform: uppercase;">Department '.$dept_id.' does not Exist!</h1>
        //           </body>';
        //     echo '<script type="text/javascript">
        //             setInterval(function () {
        //             location.replace("emp_position.html")
        //             }, 2000)
        //         </script>';
        // }
        // else {
            // echo '<head>
            //       <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;800&display=swap" rel="stylesheet">
            //       </head>
            //       <body style="display: flex; justify-content: center; align-items: center; height: 100vh; width: 100%; font-family: Montserrat, sans-serif;">
            //       <h1 style="font-size: 44px; font-weight: 400; text-transform: uppercase;">Redirecting you to the form page!</h1>
            //       </body>';
            //   echo '<script type="text/javascript">alert("Employee with ID: '.$emp_id.' cannot be found or He/She is not in the department with ID: '.$dept_id.'!");
            //         setInterval(function () {
            //             location.replace("emp_position.html")
            //         }, 2000)
            //         </script>';
            // }
            if($emp_id_new == $emp_id) {
                if($dept_id_new == $dept_id) {
                    if(mysqli_query($con, $sql_new)) {
                        mysqli_query($con, $sql_new2);
                        echo '<head>
                              <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;800&display=swap" rel="stylesheet">
                              </head>
                              <body style="display: flex; justify-content: center; align-items: center; height: 100vh; width: 100%; font-family: Montserrat, sans-serif;">
                              <h1 style="font-size: 44px; font-weight: 400; text-transform: uppercase;">Redirecting you to the form page!</h1>
                              </body>';
                        echo '<script type="text/javascript">
                                alert("'.$alert1.'");
                                setInterval(function () {
                                    location.replace("emp_position.html")
                                }, 2000)
                            </script>';
                    }
                    else {
                        echo '<head>
                              <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;800&display=swap" rel="stylesheet">
                              </head>
                              <body style="display: flex; justify-content: center; align-items: center; height: 100vh; width: 100%; font-family: Montserrat, sans-serif;">
                              <h1 style="font-size: 44px; font-weight: 400; text-transform: uppercase;">Error creating a record: '.mysqli_error($con).'</h1>
                              </body>';
                        echo '<script type="text/javascript">
                                setInterval(function () {
                                location.replace("emp_position.html")
                                }, 2000)
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
                    echo '<script type="text/javascript">alert("Employee with ID: '.$emp_id.' cannot be found or He/She is not in the department with ID: '.$dept_id.'!");
                            setInterval(function () {
                                location.replace("emp_position.html")
                            }, 2000)
                            </script>';
                }
            }
            else {
                // if($dept_id_new != $dept_id) {
                //     echo '<head>
                //           <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;800&display=swap" rel="stylesheet">
                //           </head>
                //           <body style="display: flex; justify-content: center; align-items: center; height: 100vh; width: 100%; font-family: Montserrat, sans-serif;">
                //           <h1 style="font-size: 44px; font-weight: 400; text-transform: uppercase;">Department '.$dept_id.' does not Exist!</h1>
                //           </body>';
                //     echo '<script type="text/javascript">
                //             setInterval(function () {
                //             location.replace("emp_position.html")
                //             }, 2000)
                //         </script>';
                // }
                // else {
                    echo '<head>
                          <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;800&display=swap" rel="stylesheet">
                          </head>
                          <body style="display: flex; justify-content: center; align-items: center; height: 100vh; width: 100%; font-family: Montserrat, sans-serif;">
                          <h1 style="font-size: 44px; font-weight: 400; text-transform: uppercase;">Redirecting you to the form page!</h1>
                          </body>';
                      echo '<script type="text/javascript">alert("Employee with ID: '.$emp_id.' cannot be found or He/She is not in the department with ID: '.$dept_id.'!");
                            setInterval(function () {
                                location.replace("emp_position.html")
                            }, 2000)
                            </script>';
                    // }
    }
}
mysqli_close($con);
?>
