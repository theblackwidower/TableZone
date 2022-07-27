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
        $stmt = mysqli_prepare($db->con, "INSERT INTO product(item_name, item_price, item_image) VALUES(?,?,?)");
        mysqli_stmt_bind_param($stmt, "sds", $name, $price, $imagepath);
        mysqli_stmt_execute($stmt);

        $result = $name." successfully added for $".number_format($price, 2);
        $name = "";
        $price = "";
        $imagepath = "";
    }
}
else
{
    $result = "";
    $name = "";
    $price = "";
    $imagepath = "";
}

if ($result != "")
    echo "<h2>".$result."</h2>";

echo '<form method="post" action="new_product.php">';
display_text_box("name", "Name", $name);
display_text_box("price", "Price", $price);
display_text_box("image", "Image Filepath", $imagepath);
echo '<input type="submit" value="Create" />';
echo '<input type="reset" value="Reset" />';
echo '</form>';


require 'footer.php';