<?php
    session_start();
    include('connection.php');

    $pro_id = $_POST['pro-id'];
    $pro_name = $_POST['pro-name'];

    $sql = "select Project_ID from project where Project_ID = $pro_id limit 1";
    $sql1 = "select Project_Name from project where Project_Name = '$pro_name' limit 1";

    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_row($result);
    $pro_id_new = $row[0];

    $result1 = mysqli_query($con, $sql1);
    $row1 = mysqli_fetch_row($result1);
    $pro_name_new = $row1[0];

    $sql2 = "select Project_ID, Project_Name from project where Project_ID = $pro_id and Project_Name = '$pro_name' limit 1";
    $result2 = mysqli_query($con, $sql2);
    $row2 = mysqli_fetch_row($result2);
    $pro_id_new1 = $row2[0];
    $pro_name_new1 = $row2[1];

    $sql_new = "delete from project where Project_ID = $pro_id_new1 and Project_Name = '$pro_name_new1'";
    $alert = "Project details of ID: $pro_id and Name: $pro_name have been deleted!";

    // echo $pro_id_new;
    // echo $pro_name_new;
    if($pro_id_new == $pro_id) {
        if($pro_name_new == $pro_name) {
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
                            location.replace("remove_project.html")
                        }, 2000)
                    </script>';
            }
            else {
                echo '<head>
                      <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;800&display=swap" rel="stylesheet">
                      </head>
                      <body style="display: flex; justify-content: center; align-items: center; height: 100vh; width: 100%; font-family: Montserrat, sans-serif;">
                      <h1 style="font-size: 44px; font-weight: 400; text-transform: uppercase;">Project ID: '.$pro_id.' having Name: '.$pro_name.' does not Exist!</h1>
                      </body>';
                echo '<script type="text/javascript">
                        setInterval(function () {
                        location.replace("remove_project.html")
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
            echo '<script type="text/javascript">alert("Project Name does not match with the Project ID!");
                    setInterval(function () {
                        location.replace("remove_project.html")
                    }, 2000)
                    </script>';
        }
    }
    else {
        if($pro_name_new != $pro_name) {
            echo '<head>
                  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;800&display=swap" rel="stylesheet">
                  </head>
                  <body style="display: flex; justify-content: center; align-items: center; height: 100vh; width: 100%; font-family: Montserrat, sans-serif;">
                  <h1 style="font-size: 44px; font-weight: 400; text-transform: uppercase;">Project with ID: '.$pro_id.' and Name: '.$pro_name.' does not Exist!</h1>
                  </body>';
            echo '<script type="text/javascript">
                    setInterval(function () {
                    location.replace("remove_project.html")
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
              echo '<script type="text/javascript">alert("Project ID does not match with Project Name!");
                    setInterval(function () {
                        location.replace("remove_project.html")
                    }, 2000)
                    </script>';
            }
    }
mysqli_close($con);
?>
