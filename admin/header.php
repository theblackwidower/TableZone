<?php
require_once 'security.php';
?>
<!DOCTYPE html>
<html lang="en-CA">
<head>
    <title>TableZone admin</title>
    <link rel="stylesheet" href="admin.css"/>
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
        <div class="sidebar">
            <a href="../index.php">Home</a>
            <a href="index.php">Admin home</a>
            <a href="products.php">Products</a>
            <a href="new_product.php">Add Product</a>
        </div>
        <div class="content">
