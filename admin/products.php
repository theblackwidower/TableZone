<?php
$pagename = "Product Listing";
require 'header.php';
$db = new DBcontroller();
$stmt = mysqli_prepare($db->con, "SELECT * FROM product;");
mysqli_stmt_execute($stmt);
$data = mysqli_stmt_get_result($stmt);
$products = mysqli_fetch_all($data);

echo '<table>';
echo "<tr><th>image</th><th>name</th><th>price</th><th>register</th></tr>";
foreach ($products as $thisProduct)
{
    echo "<tr>";
    echo "<td><img class='thumbnail' src='../";
    echo $thisProduct[3];
    echo "' /></td>";
    echo "<td>";
    echo "<a href=\"view_product.php?id=".$thisProduct[0]."\">";
    echo $thisProduct[1];
    echo "</a>";
    echo "</td>";
    echo "<td>$";
    echo number_format($thisProduct[2],2);
    echo "</td>";
    echo "<td>";
    echo $thisProduct[4];
    echo "</td>";
    echo "</tr>";


}



echo '</table>';

require 'footer.php';
