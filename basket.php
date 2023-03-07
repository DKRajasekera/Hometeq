<?php
session_start();
include("db.php");
$pagename = "Smart Basket"; //Create and populate a variable called $pagename
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; //Call in stylesheet
echo "<title>" . $pagename . "</title>"; //display name of the page as window title
echo "<body>";
include("headfile.html"); //include header layout file
echo "<h4>" . $pagename . "</h4>"; //display name of the page on the web page
//capture the ID of selected product using the POST method and the $_POST superglobal variable
if (isset($_POST['del_prodid'])) {
    $delprodid = $_POST['del_prodid'];
    unset($_SESSION['basket'][$delprodid]);
    echo "<p> 1 item removed from the basket</p>";
}
;
if (isset($_POST['h_prodid'])) {
    $newprodid = $_POST['h_prodid'];
    $reququantity = $_POST['p_prodQuantity'];

    $_SESSION['basket'][$newprodid] = $reququantity;
    echo "<p> 1 item added to the basket</p>";
} else {
    echo "<p> Basket is empty </p>";
}
echo "<table style='border: 1px'>";
echo "<tr>";
echo "<th> Product Name </th>";
echo "<th> Price </th>";
echo "<th> Quantity </th>";
echo "<th> Subtotal </th>";
if (isset($_POST['h_prodid'])) {
    echo "<th> Reomve Product </th>";
}
echo "</tr>";
$total = 0;
if (isset($_SESSION['basket'])) {
    foreach ($_SESSION['basket'] as $index => $value) {
        $SQL = "select prodId, prodName, prodPrice from Products WHERE prodId = $index";
        $exeSQL = mysqli_query($conn, $SQL) or die(mysqli_error($conn));
        $select = mysqli_fetch_array($exeSQL);

        echo "<tr>";
        echo "<td>" . $select['prodName'] . "</td>";
        echo "<td>&pound" . number_format($select['prodPrice'], 2) . "</td>";
        echo "<td style ='text-align:center;'>" . $value . "</td>";
        $subtotal = $select['prodPrice'] * $value;
        echo "<td>&pound" . number_format($subtotal, 2) . "</td>";
        $total += $subtotal;
        echo "<form action=basket.php method=post>";
        echo "<td> ";
        echo "<input type='submit'  value='Remove' id='submitbtn'>";
        echo "<input type='hidden' name='del_prodid' value=" . $select['prodId'] . ">";

        echo "</td>";
        echo "</tr>";
        echo "</form>";

    }
} else {
    echo "<p> Empty Basket </p>";
}
echo "<tr>";
echo "<td colspan= '3'> <p> Total </p> </td>";
echo "<td colspan= '2'>&pound" . number_format($total, 2) . "</td>";
echo "</tr>";
echo "</table>";
echo "<br><br>";
echo "<a href = clearbasket.php> Clear Basket </a>";
echo "<br><br>";
echo "<p> New hometeq cutomer : <a href = signup.php> Sign Up </a>";
echo "<br><br>";
echo "<p> Returing hometeq cutomers : <a href = login.php> Log In </a>";
include("footfile.html"); //include head layout
echo "</body>";
?>