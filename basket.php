<?php
include("db.php");
$pagename = "Basket"; //Create and populate a variable called $pagename
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; //Call in stylesheet
echo "<title>" . $pagename . "</title>"; //display name of the page as window title
echo "<body>";
include("headfile.html"); //include header layout file
echo "<h4>" . $pagename . "</h4>"; //display name of the page on the web page
//capture the ID of selected product using the POST method and the $_POST superglobal variable
if (isset($_POST['h_prodid'])) {
    $newprodid = $_POST['h_prodid'];
    $reququantity = $_POST['p_prodQuantity'];

    $_SESSION['basket'] [$newprodid] = $reququantity;
    echo "<p> 1 item added to the basket</p>";
} else {
    echo "<p> Basket unchanged </p>";
}

if(isset($_SESSION['basket'])){
    foreach($_SESSION['basket'] as $index => $value ){
        $SQL = "select prodId, prodName, prodPrice from Products WHERE prodId = $index";
        $exeSQL = mysqli_query($conn, $SQL) or die(mysqli_error($conn));
        $select = mysqli_fetch_array($exeSQL);

        echo "<tr>";
            echo "<td>".$select['prodName']."</td>";
            echo "<td>&pound".number_format($select['prodPrice'],2)."</td>";
            echo "<td style ='text-align:center;'>".$value."</td>";
            $subtotal = $select['prodPrice']*$value;
            echo "<td>&pound".number_format($subtotal ,2)."</td>";
            echo "<form action=basket.php method=post>";
                echo "<td> ";
                    echo "<input type=submit  value='Remove' id='submitbtn'>";
                echo"</td>";
                echo "<input type=hidden name=del_prodid value=".$prodinbasketarray['prodId'].">";
            echo "</form>";
        echo "</tr>";

        $total=$total+$subtotal;

        
    }
} else {
echo "<p> Empty Basket </p>";
    }

include("footfile.html"); //include head layout
echo "</body>";
?>