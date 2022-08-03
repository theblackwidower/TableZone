<?php
require_once '../functions.php';
session_start();
if(isset($_SESSION['username']))
{
    $sec_db = new DBcontroller();

    $stmt = mysqli_prepare($sec_db->con, "SELECT user_type FROM user WHERE username = ?;");
    mysqli_stmt_bind_param($stmt, 's', $_SESSION['username']);
    mysqli_stmt_execute($stmt);
    $data = mysqli_stmt_get_result($stmt);
    $row = mysqli_fetch_row($data);
    if ($row === null or $row === false or $row[0] !== 'a')
    {
        header("HTTP/1.0 401 Unauthorized");
        echo "ACCESS DENIED";
        //close php document
        exit;
    }
}
else
{
    header("HTTP/1.0 401 Unauthorized");
    echo "ACCESS DENIED";
    //close php document
    exit;
}