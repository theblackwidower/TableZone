<?php

session_start();
require('functions.php');
if(isset($_SESSION['username']))
{
    unset($_SESSION['username']);
}

header('Location: index.php');

?>
