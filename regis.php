<?php
session_start();
require('functions.php');
?>
<?php
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

<body>
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST')
{

    $log = $login->register($_POST['fname'],$_POST['lname'], $_POST['email'], $_POST['username'], $_POST['password']);

}
?>

<h1 class="text-center py-5 ">Table Zone</h1>
<div class = "d-flex justify-content-around">
    <div class = "row">
        <div class ="card">
            <form method = "post">
                <div class = "card-header">
                    <h2 class = "text-center">User Registration</h2>
                </div>
                <div class = "card-body">

                    <label for="name" class="font">*First Name</label>
                    <input type="text" id="fname" name="fname" class="fields" placeholder="Enter Name" required><br> <br>
                    <label for="name" class="font">*Last Name</label>
                    <input type="text" id="lname" name="lname" class="fields" placeholder="Enter Name" required><br> <br>
                    <label for="email" class="font">*E-mail</label>
                    <input type="email" id="email" name="email" placeholder="Enter E-mail" required> <br> <br>
                    <label for="username" class="font" >*Username</label>
                    <input type="username" id="username" placeholder="Enter username" name="username" required><br><br>

                    <label for="pwd" class="font">*Password</label>
                    <input type="password" id="pwd" name="password"placeholder="Enter Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters and one special character" required><br>                    <br>
                </div>
                <div class = "card-footer">
                    <input type="submit"  value="Login" name = "submit" class="bg-success text-white" data-inline="true">
                    <input type="reset" value="Cancel" class="bg-success text-white" data-inline="true" >
                </div>
                <span class="fw-bold mt-2 pt-1">Already have an account ?<a href ="login.php"> Log In</a></span>

        </div>
        </form>
    </div>
</body>


</html>

