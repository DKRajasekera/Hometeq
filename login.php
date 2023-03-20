<?php
session_start();
$pagename = "login"; //Create and populate a variable called $pagename
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; //Call in stylesheet
echo "<title>" . $pagename . "</title>"; //display name of the page as window title
echo "<body>";
include("headfile.html"); //include header layout file
echo "<h4>" . $pagename . "</h4>"; //display name of the page on the web page
echo "<form action=login_process.php method=post>";
echo "<table style='border: 0px'>";
echo "<tr><td style='border: 0px'><label class=Email>Email</label></td>";
echo "<td style='border: 0px'><input type=text id=Email name=Email size = 30 placeholder='Enter your email'Required></td>";
echo "</tr>";
echo "<tr><td style='border: 0px'><label class=Password>Password</label></td>";
echo "<td style='border: 0px'><input type=password id=Password name=Password size = 30 placeholder='Enter the password' Required></td>";
echo "</tr>";
echo "<tr>";
echo "<td style='border: 0px'><button class=but type=submit>Log in</button></td>";
echo "<td style='border: 0px'><button class=Clear onclick=clearForm()>Clear</button></td>";
echo "</tr>";
echo "</table>";
echo "</form>";
echo "</body>";
echo "<script>
function clearForm() {
    var form = document.querySelector('form'); // get the form element
    var inputs = form.querySelectorAll('input'); // get all the input elements in the form
    for (var i = 0; i < inputs.length; i++) {
      inputs[i].value = ''; // reset the value of each input to an empty string
    }
  }
  </script>";
?>