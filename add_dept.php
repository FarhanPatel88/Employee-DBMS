<?php
    session_start();
    include('connection.php');

    $dept_id = $_POST['dept-id'];
    $dept_name = $_POST['dept-name'];
    $dept_desc = $_POST['dept-desc'];

    $sql = "insert into department(Dept_ID, Dept_Name, Dept_Description) values($dept_id, '$dept_name', '$dept_desc')";

    if(mysqli_query($con, $sql)) {
        echo '<head>
              <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;800&display=swap" rel="stylesheet">
              </head>
              <body style="display: flex; justify-content: center; align-items: center; height: 100vh; width: 100%; font-family: Montserrat, sans-serif;">
              <h1 style="font-size: 44px; font-weight: 400; text-transform: uppercase;">Redirecting you to the form page!</h1>
              </body>';
              echo '<script type="text/javascript">alert("Your data has been successfully submitted");
                      setInterval(function () {
                          location.replace("add_dept.html")
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
                location.replace("add_dept.html")
            }, 3000)
            </script>';
    }
    mysqli_close($con);
?>
