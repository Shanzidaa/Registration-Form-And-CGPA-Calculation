<?php include("conn.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>View Submitted Data</title>
    <style>
        body {
            background-color: #e6ccff; /* Light purple */
            font-family: Arial, sans-serif;
            color: #333333;
        }
        table {
            margin: auto;
            border-collapse: collapse;
            background-color: #ffffff; /* White table background */
            color: #333333;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
            padding: 20px;
            border-radius: 8px;
            width: 60%; /* Adjusted table width */
        }
        h1 {
            text-align: center;
            color: #800080; /* Purple text for heading */
        }
        td {
            padding: 10px;
            text-align: left; /* Align labels to the left */
        }
        th {
            background-color: #800080; /* Purple header */
            color: white;
            padding: 10px;
        }
        .navigation {
            margin-top: 20px;
            text-align: center;
        }
        .navigation a {
            text-decoration: none;
            color: white;
            background-color: #800080;
            padding: 10px 20px;
            border-radius: 5px;
            font-weight: bold;
        }
        .navigation a:hover {
            background-color: #6a006a; /* Darker purple */
        }
    </style>
</head>
<body>
    <h1>Submitted Student Data</h1>
    <table border="1">
        <tr>
            <th>Field</th>
            <th>Value</th>
        </tr>
        <?php
        if ($_POST['register']) {
            $fname = $_POST['firstname'];
            $lname = $_POST['lastname'];
            $sid = $_POST['id'];
            $mail = $_POST['email'];
            $pwd = $_POST['password'];
            $dob = $_POST['dob'];
            $gen = $_POST['gender'];
            $rel=$_POST['religion']; 
            $dept = $_POST['department'];

            echo "
                <tr><td>First Name</td><td>$fname</td></tr>
                <tr><td>Last Name</td><td>$lname</td></tr>
                <tr><td>Student ID</td><td>$sid</td></tr>
                <tr><td>Email</td><td>$mail</td></tr>
                <tr><td>Password</td><td>$pwd</td></tr>
                <tr><td>Date of Birth</td><td>$dob</td></tr>
                <tr><td>Gender</td><td>$gen</td></tr>
                <tr><td>Religion</td><td>$rel</td></tr>
                <tr><td>Department</td><td>$dept</td></tr>
            ";
        } else {
            echo "<tr><td colspan='2'>No data submitted.</td></tr>";
        }
        ?>
    </table>
    <div class="navigation">
        <a href="cgpa.html">Proceed to CGPA Calculator</a>
    </div>
</body>
</html>
