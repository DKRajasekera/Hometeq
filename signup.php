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
echo "<td style='border: 0px'><input type=text id=fname name=fname size = 30 placeholder='Enter your First Name'Required></td>";
echo "</tr>";
echo "<tr><td style='border: 0px'><label class=lname>Last name</label></td>";
echo "<td style='border: 0px'><input type=text id=lname name=lname size = 30 placeholder='Enter your Last name' Required></td>";
echo "</tr>";
echo "<tr><td style='border: 0px'><label class='Address'>Address</label></td>";
echo "<td style='border: 0px'><input type=text id=Address name=Address size = 30 placeholder='Enter your Address' Required></td>";
echo "</tr>";
echo "<tr><td style='border: 0px'><label class=PostCode>PostCode</label></td>";
echo "<td style='border: 0px'><input type=text id=PostCode name=PostCode size = 30 placeholder='Enter your valid PostCode' Required></td>";
echo "</tr>";
echo "<tr><td style='border: 0px'><label class=TelNo>TelNo</label></td>";
echo "<td style='border: 0px'><input type=text id=TelNo name=TelNo size = 30 placeholder='Enter your TelNo' Required></td>";
echo "</tr>";
echo "<tr><td style='border: 0px'><label class=Email>Email</label></td>";
echo "<td style='border: 0px'><input type=Email id=Email name=Email size = 30 placeholder='Enter your valid Email' Required></td>";
echo "</tr>";
echo "<tr><td style='border: 0px'><label class=pass1>Password</label></td>";
echo "<td style='border: 0px'><input type=password id=pass1 name=pass1 size = 30 placeholder='Enter a password' Required></td>";
echo "</tr>";
echo "<tr><td style='border: 0px'><label class=pass2>Confirm Password</label></td>";
echo "<td style='border: 0px'><input type=password id=pass2 name=pass2 size = 30 placeholder='Enter Confirm Password' Required></td>";
echo "</tr>";
echo "<tr><input type=hidden name=cru_req value=signup>";
echo "<td style='border: 0px'><button class=but type=submit onclick = checkPassword()>Sign Up</button></td>";
echo "<td style='border: 0px'><button class=Clear onclick=clearForm()>Clear</button></td></tr>";

echo " </form>";
echo "</body>";
echo "<script> 
function checkPassword() {
  var pass1 = document.getElementById('pass1').value;
  var pass2 = document.getElementById('pass2').value;
  
  if (pass1 != pass2) {
    alert('Passwords do not match');
    return false;
  }
  return true;
}

function clearForm() {
    var form = document.querySelector('form'); // get the form element
    var inputs = form.querySelectorAll('input'); // get all the input elements in the form
    for (var i = 0; i < inputs.length; i++) {
      inputs[i].value = ''; // reset the value of each input to an empty string
    }
  }
 </script>"
  ?>