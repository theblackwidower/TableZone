<?php
require('functions.php');
?>
<?php
session_start();
$db = new DBcontroller();
$login = new login($db);
?>


<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="author" content="TableZone">
    <meta name="viewport" content="width=device-width, initial-scale=1.0s" />
    <title>Task 1</title>
    <link rel="stylesheet" href="task1CSS.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $log = $login->login($_POST['username'],$_POST['password']);
}
?>
<body>
<h1 class="text-center py-5 ">Table Zone</h1>
<div class = "d-flex justify-content-around">
    <div class = "row">
        <div class ="card">
            <form method = "post">
                <div class = "card-header">
                    <h2 class = "text-center">Sign In</h2>
                </div>
                <div class = "card-body">
                    <label for="username" class="font" >*Username</label>
                    <input type="username" id="username" placeholder="Enter username" name="username" required><br><br>

                    <label for="pwd" class="font">*Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters and one special character" required><br>                    <br>
                </div>
                <div class = "card-footer">
                    <input type="submit"  value="Login" name = "submit" class="bg-success text-white" data-inline="true">
                    <input type="reset" value="Cancel" class="bg-success text-white" data-inline="true" >
                </div>
                <span class="fw-bold mt-2 pt-1">New to TableZone ? <a href ="regis.php">Create an Account</a></span>
        </div>
        </form>
    </div>
</body>


</html>

