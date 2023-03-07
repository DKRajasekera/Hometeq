<?php
$pagename = "sign up"; //Create and populate a variable called $pagename
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; //Call in stylesheet
echo "<title>" . $pagename . "</title>"; //display name of the page as window title
echo "<body>";
include("headfile.html"); //include header layout file
echo "<h4>" . $pagename . "</h4>"; //display name of the page on the web page
echo "<form action=signup_process.php method=post>";
echo "<table style='border: 0px'>";
echo "<tr><td style='border: 0px'><label class=fname>First name</label></td>";
echo "<td style='border: 0px'><input type=text id=fname name=fname placeholder=Enter your First Name Required></td>";
echo "</tr>";
echo "<tr><td style='border: 0px'><label class=lname>Last name</label></td>";
echo "<td style='border: 0px'><input type=text id=lname name=lname placeholder=Enter your Last name Required></td>";
echo "</tr>";
echo "<tr><td style='border: 0px'><label class='Address'>Address</label></td>";
echo "<td style='border: 0px'><input type=text id=Address name=Address placeholder=Create a user name (only letters and numbers) Required></td>";
echo "</tr>";
echo "<tr><td style='border: 0px'><label class=PostCode>PostCode</label></td>";
echo "<td style='border: 0px'><input type=PostCode id=PostCode name=PostCode placeholder=Enter your valid PostCode Required></td>";
echo "</tr>";
echo "<tr><td style='border: 0px'><label class=TelNo>TelNo</label></td>";
echo "<td style='border: 0px'><input type=TelNo id=TelNo name=TelNo placeholder=Enter your valid TelNo Required></td>";
echo "</tr>";
echo "<tr><td style='border: 0px'><label class=Email>Email</label></td>";
echo "<td style='border: 0px'><input type=Email id=Email name=Email placeholder=Enter your valid Email Required></td>";
echo "</tr>";
echo "<tr><td style='border: 0px'><label class=pass1>Password</label></td>";
echo "<td style='border: 0px'><input type=password id=pass1 name=pass1 placeholder=Enter a password Required></td>";
echo "</tr>";
echo "<tr><td style='border: 0px'><label class=pass2>Confirm Password</label></td>";
echo "<td style='border: 0px'><input type=password id=pass2 name=pass2 placeholder=Enter Confirm Password Required></td>";
echo "</tr>";
echo "<tr><input type=hidden name=cru_req value=signup>";
echo "<td style='border: 0px'><button class=but type=submit>Sign Up</button></td>";
echo "<td style='border: 0px'><button class=Clear>Clear</button></td></tr>";

echo " </form>";
echo "</body>";
?>