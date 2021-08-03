<?php
    session_start();
    include('connection.php');

    $emp_id = $_POST['emp_id'];
    $sal_id = $_POST['sal_id'];
    $sal_amt = $_POST['sal_amt'];
    $sal_date = $_POST['sal_date'];

    if(isset($_POST['submit'])) {

        $sql = "select emp_id from employee where emp_id = $emp_id limit 1";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_row($result);
        $emp_id_new = $row[0];

            if($emp_id_new == $emp_id) {
                $sql1 = "insert into salary(Emp_id, sal_id, Sal_Amount, Sal_Pay_Date) values($emp_id_new, $sal_id, $sal_amt, '$sal_date')";

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
                                    location.replace("sal_update.html")
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
                                location.replace("sal_update.html")
                            }, 3000)
                            </script>';
                    }
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
                        location.replace("sal_update.html")
                        }, 2000)
                    </script>';
            }
    }

    mysqli_close($con);
?>
