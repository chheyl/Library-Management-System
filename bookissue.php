<?php

//This script will handle login
//session_start();
//
//// check if the user is already logged in
//if(isset($_SESSION['username']))
//{
//    header("location: login.php");
//    exit;
//}


$conn = mysqli_connect("localhost", "root", "", "ashna");

// Check connection
if ($conn === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
if ($_SERVER['REQUEST_METHOD'] == "POST") {
// Prepare an insert statement
    $sql = "INSERT INTO `booktaken`( `studentname`, `bookname`.'bookcode','issuedate','remarks')VALUES(?,?.?,?.?)";
    if ($stmt = mysqli_prepare($conn, $sql)) {
// Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "sssss", $studentname, $bookname, $bookcode, $issuedate, $remarks);
        // set parameters
        $studentname = $_POST["studentname"];
        $bookname = $_POST["bookname"];
        $bookcode=$_POST["bookcode"];
        $issuedate=$_POST["issuedate"];
        $remarks =$_POST["remarks"];
        mysqli_stmt_execute($stmt);


        echo "Records inserted successfully.";
    } else {
        echo "ERROR: Could not prepare query: $sql. " . mysqli_error($conn);

    }


// Close statement
    mysqli_stmt_close($stmt);

// Close connection
    mysqli_close($conn);
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7
.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="login.css">

    <title>Book Issue</title>
</head>
<body>
<div class="container">
    <p class="login-text">BOOK ISSUE</p>
    <form class="login-email" action="bookissue.php" method="post">

        <div class="input-group">
            <input type="text" placeholder="Name of Student" name="studentname" required>
        </div>
        <div class="input-group">
            <input type="text" placeholder="Name of Book" name="bookname" required>
        </div>
        <div class="input-group">
            <input type="text" placeholder="Book Code" name="bookcode" required>
        </div>
        <div class="input-group">
            <input type="text" placeholder="issue Date " name="issuedate" required>
        </div>
        <div class="input-group">
            <input type="text" placeholder="Remarks" name="remarks" required>
        </div>
        <div class="input-group">
            <button class="btn">Submit</button>
        </div>
    </form>
</div>
</body>
</html>
