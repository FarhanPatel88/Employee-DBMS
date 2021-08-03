<?php
    session_start();
    include('connection.php');

    $dept_id = $_POST['dept-id'];
    $dept_name = $_POST['dept-name'];

    $sql = "select Dept_ID from department where Dept_ID = $dept_id limit 1";
    $sql1 = "select Dept_Name from department where Dept_Name = '$dept_name' limit 1";

    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_row($result);
    $dept_id_new = $row[0];

    $result1 = mysqli_query($con, $sql1);
    $row1 = mysqli_fetch_row($result1);
    $dept_name_new = $row1[0];

    $sql2 = "select Dept_ID, Dept_Name from department where Dept_ID = $dept_id and Dept_Name = '$dept_name' limit 1";
    $result2 = mysqli_query($con, $sql2);
    $row2 = mysqli_fetch_row($result2);
    $dept_id_new1 = $row2[0];
    $dept_name_new1 = $row2[1];

    $sql_new = "delete from department where Dept_ID = $dept_id_new1 and Dept_Name = '$dept_name_new1'";
    $alert = "Department details of ID: $dept_id and Name: $dept_name have been deleted!";

    // echo $dept_id_new;
    // echo $dept_name_new;
    if($dept_id_new == $dept_id) {
        if($dept_name_new == $dept_name) {
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
                            location.replace("remove_dept.html")
                        }, 2000)
                    </script>';
            }
            else {
                echo '<head>
                      <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;800&display=swap" rel="stylesheet">
                      </head>
                      <body style="display: flex; justify-content: center; align-items: center; height: 100vh; width: 100%; font-family: Montserrat, sans-serif;">
                      <h1 style="font-size: 44px; font-weight: 400; text-transform: uppercase;">Department ID: '.$dept_id.' having Name: '.$dept_name.' does not Exist!</h1>
                      </body>';
                echo '<script type="text/javascript">
                        setInterval(function () {
                        location.replace("remove_dept.html")
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
            echo '<script type="text/javascript">alert("Department Name does not match with Department ID!");
                    setInterval(function () {
                        location.replace("remove_dept.html")
                    }, 2000)
                    </script>';
        }
    }
    else {
        if($dept_name_new != $dept_name) {
            echo '<head>
                  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;800&display=swap" rel="stylesheet">
                  </head>
                  <body style="display: flex; justify-content: center; align-items: center; height: 100vh; width: 100%; font-family: Montserrat, sans-serif;">
                  <h1 style="font-size: 44px; font-weight: 400; text-transform: uppercase;">Department with ID: '.$dept_id.' and Name: '.$dept_name.' does not Exist!</h1>
                  </body>';
            echo '<script type="text/javascript">
                    setInterval(function () {
                    location.replace("remove_dept.html")
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
              echo '<script type="text/javascript">alert("Department ID does not match with the Department Name!");
                    setInterval(function () {
                        location.replace("remove_dept.html")
                    }, 2000)
                    </script>';
            }
    }
mysqli_close($con);
?>
