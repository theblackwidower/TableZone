<?php
$pagename = "Admin Documentation";
require "header.php";?>
<h3>
    Products
</h3>
<p>
    The Products page lists all the products sold.
    Clicking on the name would redirect you to a detailed view.
    From there you can edit or remove the product.
</p>
<p>
    On the edit screen, price and name should be self-explanatory.
    But please note, the image filepath is the location on the
    webserver the product's image is stored.
</p>
<h3>
    Add Products
</h3>
<p>
    On the add products page, you can add a new product to the database.
    This follows the same structure as the product edit page, as described above.
</p>
<h3>
    User Management
</h3>
<p>
    On the user management screen, there is a complete list of every user in the database.
    By clicking on the username, you can edit all necessary information about the user,
    including their username, their email, and their first and last name.
    You can also change their account type between customer and admin.
</p>
<?php require "footer.php";
