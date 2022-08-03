<?php
$pagename = "Edit User";
require 'header.php';
function display_text_box($id, $label, $value)
{
    echo '<label for="'.$id.'">'.$label.'</label>
		<input name="'.$id.'" id="'.$id.'" type="text" value="'.$value.'" size="30" /><br />';
}
if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
    $uid = trim($_POST["id"]);
    $username = trim($_POST["username"]);
    $type = trim($_POST["type"]);
    $fname = trim($_POST["fname"]);
    $lname = trim($_POST["lname"]);
    $email = trim($_POST["email"]);

    $result = "";
    if ($username == "")
        $result .= "Please enter a username.<br />";

    if ($fname == "")
        $result .= "Please enter a first name.<br />";

    if ($lname == "")
        $result .= "Please enter a last name.<br />";

    if ($email == "")
        $result .= "Please enter an Email.<br />";

    if ($result == "")
    {
        $db = new DBcontroller();
        $stmt = mysqli_prepare($db->con, "UPDATE user SET username = ?, user_type = ?, first_name = ?, last_name = ?, email = ? WHERE user_id = ?");
        mysqli_stmt_bind_param($stmt, "sssssi", $username, $type, $fname, $lname, $email, $uid);
        mysqli_stmt_execute($stmt);

        $result = $username." successfully updated.";
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
    $uid = $_GET['id'];

    $db = new DBcontroller();
    $stmt = mysqli_prepare($db->con, "SELECT * FROM user WHERE user_id = ?;");
    mysqli_stmt_bind_param($stmt, 'i', $uid);
    mysqli_stmt_execute($stmt);
    $data = mysqli_stmt_get_result($stmt);
    $user = mysqli_fetch_row($data);

    $result = "";
    $username = $user[5];
    $type = $user[1];
    $fname = $user[2];
    $lname = $user[3];
    $email = $user[4];
}

if ($result != "")
    echo "<h2>".$result."</h2>";

echo '<form method="post" action="edit_user.php">';
echo '<input name="id" id="id" type="hidden" value="'.$uid.'" /><br />';
display_text_box("username", "username", $username);

echo '<label for="type">Type</label>
		<select name="type" id="type">';
echo '<option value="c"';
if ($type == 'c')
    echo " selected";
echo '>Customer</option>';
echo '<option value="a"';
if ($type == 'a')
    echo " selected";
echo '>Admin</option>';
echo '</select>';
echo '<br />';

display_text_box("fname", "First Name", $fname);
display_text_box("lname", "Last Name", $lname);
display_text_box("email", "Email", $email);
echo '<input type="submit" value="Update" />';
echo '<a href="users.php"><button />Back</a>';
echo '</form>';


require 'footer.php';