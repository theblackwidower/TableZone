<?php
require_once '../functions.php';
if(isset($_SESSION['username']))
{
    $sec_db = new DBcontroller();

    $stmt = mysqli_prepare($db->con, "SELECT user_type FROM user WHERE user_id = ?;");
    mysqli_stmt_bind_param($stmt, 's', $_SESSION['username']);
    mysqli_stmt_execute($stmt);
    $data = mysqli_stmt_get_result($stmt);
    $row = mysqli_fetch_row($data);
    if ($row === null or $row === false or $row['user_type'] !== 'a')
    {
        header("HTTP/1.0 401 Unauthorized");
        //close php document
        exit;
    }
}