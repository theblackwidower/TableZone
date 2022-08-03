<?php
require_once 'security.php';

$db = new DBcontroller();

if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
    $pagename = "Delete Product";
    require 'header.php';
    if ($_POST['confirm'])
    {
        $stmt = mysqli_prepare($db->con, "DELETE FROM product WHERE item_id = ?;");
        mysqli_stmt_bind_param($stmt, 'i', $_POST['id']);
        mysqli_stmt_execute($stmt);
        if (mysqli_affected_rows($db->con) > 0)
            echo '<h2>Product successfully deleted</h2>';
        else
            echo '<h2>Error deleting product</h2>';
        echo '<h3><a href="products.php">Return to product list</a></h3>';
    }
}
elseif(isset($_GET['id']))
{
    $stmt = mysqli_prepare($db->con, "SELECT * FROM product WHERE item_id = ?;");
    mysqli_stmt_bind_param($stmt, 'i', $_GET['id']);
    mysqli_stmt_execute($stmt);
    $data = mysqli_stmt_get_result($stmt);
    $product = mysqli_fetch_row($data);
    $pagename = "Delete Product: ".$product[1];
    require 'header.php';

    echo '<form method="post" action="remove_product.php">';
    echo '<h2>Are you sure you want to delete this item?</h2>';
    echo '<input name="id" id="id" type="hidden" value="'.$product[0].'" />';
    echo '<input name="confirm" id="confirm" type="hidden" value="true" />';
    echo '<div class="buttons">';
    echo '<input type="submit" value="Yes" />';
    echo '<button type="button" onclick="window.location.href=\'view_product.php?id='.$product[0].'\';">No</button>';
    echo '</div>';
    echo '</form>';
    echo "<img class=\"view_image\" src=\"../".$product[3]."\" />";
    echo "<div class=\"product_info\">";
    echo "<span class=\"key\">";
    echo "Name:";
    echo "</span>";
    echo "<span class=\"data\">";
    echo $product[1];
    echo "</span><br />";

    echo "<span class=\"key\">";
    echo "Price:";
    echo "</span>";
    echo "<span class=\"data\">$";
    echo number_format($product[2], 2);
    echo "</span><br />";

    echo "<span class=\"key\">";
    echo "Register:";
    echo "</span>";
    echo "<span class=\"data\">";
    echo $product[4];
    echo "</span><br />";

    echo "</div>";
}
else
{
    ob_clean();
    header("Location: products.php");
    //close php document
    exit;
}
require 'footer.php';
