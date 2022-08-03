<?php
$pagename = "Add Product";
require 'header.php';
function display_text_box($id, $label, $value)
{
    echo '<label for="'.$id.'">'.$label.'</label>
		<input name="'.$id.'" id="'.$id.'" type="text" value="'.$value.'" size="30" /><br />';
}
if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
    $pid = trim($_POST["id"]);
    $name = trim($_POST["name"]);
    $price = trim($_POST["price"]);
    $imagepath = trim($_POST["image"]);

    $result = "";
    if ($name == "")
        $result .= "Please enter a product name.<br />";

    if ($price == "")
        $result .= "Please enter a price.<br />";
    elseif (!is_numeric($price))
        $result .= "Price must be a number.<br />";

    if ($imagepath == "")
        $result .= "Please enter an image path.<br />";

    if ($result == "")
    {
        $db = new DBcontroller();
        $stmt = mysqli_prepare($db->con, "UPDATE product SET item_name = ?, item_price = ?, item_image = ? WHERE item_id = ?");
        mysqli_stmt_bind_param($stmt, "sdsi", $name, $price, $imagepath, $pid);
        mysqli_stmt_execute($stmt);

        $result = $name." successfully updated.";
    }
}
elseif(!isset($_GET['id']))
{
    ob_clean();
    header("Location: products.php");
    //close php document
    exit;
}
else
{
    $pid = $_GET['id'];

    $db = new DBcontroller();
    $stmt = mysqli_prepare($db->con, "SELECT * FROM product WHERE item_id = ?;");
    mysqli_stmt_bind_param($stmt, 'i', $pid);
    mysqli_stmt_execute($stmt);
    $data = mysqli_stmt_get_result($stmt);
    $product = mysqli_fetch_row($data);

    $result = "";
    $name = $product[1];
    $price = $product[2];
    $imagepath = $product[3];
}

if ($result != "")
    echo "<h2>".$result."</h2>";

echo '<form method="post" action="edit_product.php">';


echo '<input name="id" id="id" type="hidden" value="'.$pid.'" /><br />';
display_text_box("name", "Name", $name);
display_text_box("price", "Price", $price);
display_text_box("image", "Image Filepath", $imagepath);
echo '<input type="submit" value="Update" />';
echo '<a href="view_product.php?id='.$pid.'"><button />Back</a>';
echo '</form>';


require 'footer.php';