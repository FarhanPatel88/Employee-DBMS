<?php
    session_start();
    include('connection.php');

    $pro_id = $_POST['pro-id'];
    $dept_id = $_POST['dept-id'];
    $pro_name = $_POST['pro-name'];
    $pro_desc = $_POST['pro_desc'];
    $pro_start_date = $_POST['pro-start-date'];
    $pro_end_date = $_POST['pro-end-date'];

    if(isset($_POST['submit'])) {

        $sql = "select Dept_id from department where Dept_id = $dept_id limit 1";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_row($result);
        $dept_id_new = $row[0];

            if($dept_id_new == $dept_id) {
                $sql1 = "insert into project(Project_id, Dept_id, Project_Name, Project_description, Project_Start_Date, Project_End_Date) values($pro_id, $dept_id_new, '$pro_name', '$pro_desc', '$pro_start_date', '$pro_end_date')";

                    if(mysqli_query($con, $sql1)) {
                        echo '<head>
                              <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;800&display=swap" rel="stylesheet">
                              </head>
                              <body style="display: flex; justify-content: center; align-items: center; height: 100vh; width: 100%; font-family: Montserrat, sans-serif;">
                              <h1 style="font-size: 44px; font-weight: 400; text-transform: uppercase;">Redirecting you to the form page!</h1>
                              </body>';
                        echo '<script type="text/javascript">
                                alert("Your data has been successfully submitted!");
                                setInterval(function () {
                                    location.replace("add_project.html")
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
                                location.replace("add_project.html")
                            }, 3000)
                            </script>';
                    }
            }
            else {
                echo '<head>
                      <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;800&display=swap" rel="stylesheet">
                      </head>
                      <body style="display: flex; justify-content: center; align-items: center; height: 100vh; width: 100%; font-family: Montserrat, sans-serif;">
                      <h1 style="font-size: 44px; font-weight: 400; text-transform: uppercase;">Department '.$dept_id.' does not Exist!</h1>
                      </body>';
                echo '<script type="text/javascript">
                        setInterval(function () {
                        location.replace("add_project.html")
                        }, 2000)
                    </script>';
            }
    }
    mysqli_close($con);
?>
