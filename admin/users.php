<?php
$pagename = "User Management";
require 'header.php';
$db = new DBcontroller();
$stmt = mysqli_prepare($db->con, "SELECT * FROM user;");
mysqli_stmt_execute($stmt);
$data = mysqli_stmt_get_result($stmt);
$users = mysqli_fetch_all($data);

echo '<table>';
echo "<tr><th>username</th><th>type</th><th>name</th><th>email</th></tr>";
foreach ($users as $thisUser)
{
    echo "<tr>";
    echo "<td>";
    echo "<a href=\"edit_user.php?id=".$thisUser[0]."\">";
    echo $thisUser[5];
    echo "</a>";
    echo "</td>";
    echo "<td>";
    if ($thisUser[1] == 'a')
        echo "Admin";
    elseif ($thisUser[1] == 'c')
        echo "Customer";
    echo "</td>";
    echo "<td>";
    echo $thisUser[3].", ".$thisUser[2];
    echo "</td>";
    echo "<td>";
    echo $thisUser[4];
    echo "</td>";
    echo "</tr>";
}

echo '</table>';

require 'footer.php';
