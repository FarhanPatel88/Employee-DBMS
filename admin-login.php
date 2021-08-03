<?php
    include('connection.php');
    $username = $_POST['email'];
    $password = $_POST['pass'];

        //to prevent from mysqli injection
        $username = stripcslashes($username);
        $password = stripcslashes($password);
        $username = mysqli_real_escape_string($con, $username);
        $password = mysqli_real_escape_string($con, $password);

        $sql = "select email_id, password from admin_login where email_id = '$username' and password = '$password'";
        // $sql1 = "select password from admin_login where password = '$password' and email-id = '$username'";

        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);

        // $result1 = mysqli_query($con, $sql1);
        // $row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC);
        // $count1 = mysqli_num_rows($result1);

        if($count == 1){
          echo '<html>';
          echo '<head>';
          echo '</head>';
          echo '<body>';
          echo '<script>alert("LOGIN SUCCESSFUL!");
                location.replace("menu.html")
                </script>';
          echo '</body>';
          echo '</html>';
        }
        else{
          echo "<html>";
          echo "<head>";
          echo "</head>";
          echo "<body>";
          echo '<script>alert("You have entered wrong credentials!");
                location.replace("home.html")
                </script>';
          echo "</body>";
          echo "</html>";
        }
mysqli_close($con);
?>
