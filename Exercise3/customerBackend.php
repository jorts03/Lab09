<style><?php include "style.css"; ?></style>

<?php
$item1 = $_POST["1"];
$item2 = $_POST["2"];
$item3 = $_POST["3"];
$email = $_POST["email"];
$password = $_POST["Password"];
$shipping = $_POST["shipping"];

echo "<div class='pheader'>";
echo "<h2>Welcome " . $email . "<br> Your password is " . $password . "<br> </h2>";
echo "<br>";
echo "Your purchase has been processed <br>";
echo "Here is a copy of your receipt<br>";

echo "<table class='table' border =\"1\">";
echo "<tr>";
echo "<th> </th>";
echo "<th>Quantity</th>";
echo "<th>Cost Per Item</th>";
echo "<th>Sub Total</th>";
echo "</tr>";

echo "<tr>";
echo "<td>Item 1</td>";
echo "<td>" . $item1 . "</td>";
echo "<td>$1</td>";
echo "<td>$" . $item1 . "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>Item 2</td>";
echo "<td>" . $item2 . "</td>";
echo "<td>$2</td>";
$x = $item2 * 2;
echo "<td>$" . $x . "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>Item 3</td>";
echo "<td>" . $item3 . "</td>";
echo "<td>$3</td>";
$y = $item3 * 3;
echo "<td>$" . $y . "</td>";
echo "</tr>";

if($shipping == 0){
    $z = "Free 7 day";
} else if($shipping == 5){
    $z = "$5.00 three day";
} else{
    $z = "$50.00 over night";
}
echo "<tr>";
echo "<td>Shipping</td>";
echo "<td>" . $z . "</td>";
echo "<td></td>";
echo "<td>$" . $shipping . "</td>";
echo "</tr>";

echo "<tr>";
echo "<th>Total Cost</th>";
echo "<td></td>";
echo "<td></td>";
$cost = $item1 + $x + $y + $shipping;
echo "<th>$" . $cost . "</th>";
echo "</tr>";
echo"</div>";
?>