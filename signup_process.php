<?php
session_start();
include("db.php");
$pagename = "Sign Up Results"; //Create and populate a variable called $pagename
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; //Call in stylesheet
echo "<title>" . $pagename . "</title>"; //display name of the page as window title
echo "<body>";
include("headfile.html"); //include header layout file
echo "<h4>" . $pagename . "</h4>"; //display name of the page on the web page
// $userid = $_REQUEST['userid'];
// $usertype = $_REQUEST['usertype'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$address = $_POST['Address'];
$postcode = $_POST['PostCode'];
$telno = $_POST['TelNo'];
$email = $_POST['Email'];
$password = $_POST['pass1'];
$sql = "INSERT INTO users (userFName, userSName, userAddress, userPostCode, userTelNo, userEmail, userPassword) VALUES ('$fname', '$lname', '$address', '$postcode', '$telno', '$email', '$password')";

if (mysqli_query($conn, $sql)) {
    echo "<p>Sign up successful.</p>";
    
} else {
    echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($conn);
}
// Close connection
mysqli_close($conn);
echo "</body>";
?>