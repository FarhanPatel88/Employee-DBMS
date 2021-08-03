<?php
include('connection.php');
$query = "select
employee.Emp_id,
employee.Emp_First_Name,
employee.Emp_Last_Name,
DATE_FORMAT(employee.emp_dob, '%d/%m/%Y') as Emp_DOB,
DATE_FORMAT(employee.emp_join_date, '%d/%m/%Y') as Emp_Join_Date,
employee.Emp_Email,
employee.Emp_Location,
employee.Emp_Pincode,
employee.Dept_ID,
department.Dept_Name,
salary.sal_id,
salary.sal_amount,
DATE_FORMAT(salary.sal_pay_date, '%d/%m/%Y') as PayDate,
employee.Project_id,
project.project_name,
DATE_FORMAT(project.project_start_date, '%d/%m/%Y') as StartDate,
DATE_FORMAT(project.project_end_date, '%d/%m/%Y') as EndDate,
employee.Pos_ID,
emp_new_position.new_position,
DATE_FORMAT(emp_new_position.new_position_date, '%d/%m/%Y') as PosDate
from employee
inner join department on employee.Dept_ID = department.Dept_ID
left join salary on employee.emp_id = salary.Emp_id
left join project on employee.Project_id = project.Project_id
left join emp_new_position on employee.Pos_ID = emp_new_position.Pos_ID
order by employee.emp_id";


echo '<head>
      <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;800&display=swap" rel="stylesheet">
      </head>
      <body style= "background-image: linear-gradient(to left, #780206, #061161); text-align: center; font-family: Montserrat, sans-serif;")
      <center>
      <h1 style="border-bottom: 1px solid; padding-bottom: 10px; padding-top: 10px; background-image: linear-gradient(to right, #000428, #004e92); color: white; border-radius: 10px; box-shadow: 0 0 10px white; margin-bottom: 30px;">Employee Details</h1>
      <table border="1" cellspacing="5" cellpadding="4" rules="none" style="width: 100%; box-shadow: 0 0 5px white;">
      <tr>
          <td style="border: 2px solid; font-size: 18px; color:white; padding-top:10px; padding-bottom:10px"><strong><center>Emp ID</center></strong> </td>
          <td style="border: 2px solid; font-size: 18px; color:white; padding-top:10px; padding-bottom:10px"><strong><center>First Name</center></strong> </td>
          <td style="border: 2px solid; font-size: 18px; color:white; padding-top:10px; padding-bottom:10px"><strong><center>Last Name</center></strong> </td>
          <td style="border: 2px solid; font-size: 18px; color:white; padding-top:10px; padding-bottom:10px"><strong><center>DOB</center></strong> </td>
          <td style="border: 2px solid; font-size: 18px; color:white; padding-top:10px; padding-bottom:10px"><strong><center>Join Date</center></strong> </td>
          <td style="border: 2px solid; font-size: 18px; color:white; padding-top:10px; padding-bottom:10px"><strong><center>Email</center></strong> </td>
          <td style="border: 2px solid; font-size: 18px; color:white; padding-top:10px; padding-bottom:10px"><strong><center>Location</center></strong> </td>
          <td style="border: 2px solid; font-size: 18px; color:white; padding-top:10px; padding-bottom:10px"><strong><center>Pincode</center></strong> </td>
          <td style="border: 2px solid; font-size: 18px; color:white; padding-top:10px; padding-bottom:10px"><strong><center>Dept ID</center></strong> </td>
          <td style="border: 2px solid; font-size: 18px; color:white; padding-top:10px; padding-bottom:10px"><strong><center>Dept Name</center></strong> </td>
          <td style="border: 2px solid; font-size: 18px; color:white; padding-top:10px; padding-bottom:10px"><strong><center>Salary ID</center></strong> </td>
          <td style="border: 2px solid; font-size: 18px; color:white; padding-top:10px; padding-bottom:10px"><strong><center>Salary Amount</center></strong> </td>
          <td style="border: 2px solid; font-size: 18px; color:white; padding-top:10px; padding-bottom:10px"><strong><center>Salary Date</center></strong> </td>
          <td style="border: 2px solid; font-size: 18px; color:white; padding-top:10px; padding-bottom:10px"><strong><center>Project ID</center></strong> </td>
          <td style="border: 2px solid; font-size: 18px; color:white; padding-top:10px; padding-bottom:10px"><strong><center>Project Name</center></strong> </td>
          <td style="border: 2px solid; font-size: 18px; color:white; padding-top:10px; padding-bottom:10px"><strong><center>Project Start</center></strong> </td>
          <td style="border: 2px solid; font-size: 18px; color:white; padding-top:10px; padding-bottom:10px"><strong><center>Project End</center></strong> </td>
          <td style="border: 2px solid; font-size: 18px; color:white; padding-top:10px; padding-bottom:10px"><strong><center>Position ID</center></strong> </td>
          <td style="border: 2px solid; font-size: 18px; color:white; padding-top:10px; padding-bottom:10px"><strong><center>Position</center></strong> </td>
          <td style="border: 2px solid; font-size: 18px; color:white; padding-top:10px; padding-bottom:10px"><strong><center>Position Date</center></strong> </td>
      </tr>';

if ($result = $con->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["Emp_id"];
        $field2name = $row["Emp_First_Name"];
        $field3name = $row["Emp_Last_Name"];
        $field4name = $row["Emp_DOB"];
        $field5name = $row["Emp_Join_Date"];
        $field6name = $row["Emp_Email"];
        $field7name = $row["Emp_Location"];
        $field8name = $row["Emp_Pincode"];
        $field9name = $row["Dept_ID"];
        $field10name = $row["Dept_Name"];
        $field11name = $row["sal_id"];
        $field12name = $row["sal_amount"];
        $field13name = $row["PayDate"];
        $field14name = $row["Project_id"];
        $field15name = $row["project_name"];
        $field16name = $row["StartDate"];
        $field17name = $row["EndDate"];
        $field18name = $row["Pos_ID"];
        $field19name = $row["new_position"];
        $field20name = $row["PosDate"];

        echo '<tr>
                  <td style="border-bottom: 1px solid; border-right: 2px solid; border-left: 2px solid; font-size: 16px; text-align: center; color: #E1E1E1; padding-top:10px; padding-bottom:10px;">'.$field1name.'</td>
                  <td style="border-bottom: 1px solid; border-right: 2px solid; font-size: 16px; text-align: center; color: #E1E1E1; padding-top:10px; padding-bottom:10px;">'.$field2name.'</td>
                  <td style="border-bottom: 1px solid; border-right: 2px solid; font-size: 16px; text-align: center; color: #E1E1E1; padding-top:10px; padding-bottom:10px;">'.$field3name.'</td>
                  <td style="border-bottom: 1px solid; border-right: 2px solid; font-size: 16px; text-align: center; color: #E1E1E1; padding-top:10px; padding-bottom:10px;">'.$field4name.'</td>
                  <td style="border-bottom: 1px solid; border-right: 2px solid; font-size: 16px; text-align: center; color: #E1E1E1; padding-top:10px; padding-bottom:10px;">'.$field5name.'</td>
                  <td style="border-bottom: 1px solid; border-right: 2px solid; font-size: 16px; text-align: center; color: #E1E1E1; padding-top:10px; padding-bottom:10px;">'.$field6name.'</td>
                  <td style="border-bottom: 1px solid; border-right: 2px solid; font-size: 16px; text-align: center; color: #E1E1E1; padding-top:10px; padding-bottom:10px;">'.$field7name.'</td>
                  <td style="border-bottom: 1px solid; border-right: 2px solid; font-size: 16px; text-align: center; color: #E1E1E1; padding-top:10px; padding-bottom:10px;">'.$field8name.'</td>
                  <td style="border-bottom: 1px solid; border-right: 2px solid; font-size: 16px; text-align: center; color: #E1E1E1; padding-top:10px; padding-bottom:10px;">'.$field9name.'</td>
                  <td style="border-bottom: 1px solid; border-right: 2px solid; font-size: 16px; text-align: center; color: #E1E1E1; padding-top:10px; padding-bottom:10px;">'.$field10name.'</td>
                  <td style="border-bottom: 1px solid; border-right: 2px solid; font-size: 16px; text-align: center; color: #E1E1E1; padding-top:10px; padding-bottom:10px;">'.$field11name.'</td>
                  <td style="border-bottom: 1px solid; border-right: 2px solid; font-size: 16px; text-align: center; color: #E1E1E1; padding-top:10px; padding-bottom:10px;">'.$field12name.'</td>
                  <td style="border-bottom: 1px solid; border-right: 2px solid; font-size: 16px; text-align: center; color: #E1E1E1; padding-top:10px; padding-bottom:10px;">'.$field13name.'</td>
                  <td style="border-bottom: 1px solid; border-right: 2px solid; font-size: 16px; text-align: center; color: #E1E1E1; padding-top:10px; padding-bottom:10px;">'.$field14name.'</td>
                  <td style="border-bottom: 1px solid; border-right: 2px solid; font-size: 16px; text-align: center; color: #E1E1E1; padding-top:10px; padding-bottom:10px;">'.$field15name.'</td>
                  <td style="border-bottom: 1px solid; border-right: 2px solid; font-size: 16px; text-align: center; color: #E1E1E1; padding-top:10px; padding-bottom:10px;">'.$field16name.'</td>
                  <td style="border-bottom: 1px solid; border-right: 2px solid; font-size: 16px; text-align: center; color: #E1E1E1; padding-top:10px; padding-bottom:10px;">'.$field17name.'</td>
                  <td style="border-bottom: 1px solid; border-right: 2px solid; font-size: 16px; text-align: center; color: #E1E1E1; padding-top:10px; padding-bottom:10px;">'.$field18name.'</td>
                  <td style="border-bottom: 1px solid; border-right: 2px solid; font-size: 16px; text-align: center; color: #E1E1E1; padding-top:10px; padding-bottom:10px;">'.$field19name.'</td>
                  <td style="border-bottom: 1px solid; border-right: 2px solid; font-size: 16px; text-align: center; color: #E1E1E1; padding-top:10px; padding-bottom:10px;">'.$field20name.'</td>
              </tr>';
    }
    $result->free();
}
?>
