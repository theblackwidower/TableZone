<?php
require_once '../functions.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>TableZone admin</title>
    <link rel="stylesheet" href="admin.css"></link>
</head>
<body>
    <div class="head">
        <h1>TableZone admin page
            <?php
            if (isset($pagename))
                echo " - ".$pagename;
            ?>
        </h1></div>
    <div class="main">
        <div class="sidebar"><a href="products.php">Products</a></div>
        <div class="content">
