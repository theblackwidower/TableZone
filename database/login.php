<?php

class login
{
    public $db = null;

    public function __construct(DBcontroller $db)
    {
        if(!isset($db->con))return null;
        $this->db = $db;
    }


    public function register($firstname,$lastname,$email,$username,$password,$table='user')
    {
        $hash = password_hash($password,PASSWORD_DEFAULT);
        $select_username = "SELECT * from `user` WHERE username = '$username' OR email = '$email'";
        $res = $this->db->con->query($select_username);
        $row = mysqli_num_rows($res);
        if($row>0)
        {
            echo "<script>alert('Username or email already exists in database')</script>";
        }
        else {
            $query    = "INSERT into `user` (first_name,last_name, email, username, password)
                     VALUES ('$firstname','$lastname', ' $email  ', '$username', '$hash')";
            $result = $this->db->con->query($query);
            $_SESSION['username'] = $username;
            if($result)
            {
                echo "<script>window.open('index.php','_self')</script>";
            }
            return $result;
        }
    }

    public function login($username,$password,$table='user')
    {

        session_start();
        if(isset($_SESSION['username']))
        {
            $_SESSION['message'] = "you are already logged in";
            header('Location:index.php');
        }
        $hash = password_hash($password,PASSWORD_DEFAULT);
        $query = "SELECT * from `user` WHERE username = '$username'";
        $res = $this->db->con->query($query);
        $row = mysqli_num_rows($res);
        $data = mysqli_fetch_assoc($res);
        if($row>0)
        {
            $_SESSION['username'] = $username;
            if(password_verify($password,$data['password'])) {
                $_SESSION['user_id'] = $data['user_id'];
                echo "<script>window.open('index.php','_self')</script>";
            }
            else{
                echo "<script>alert('Invalid Credentials2')</script>";
            }
        }

        else{
            echo "<script>alert('Invalid Credentials')</script>";
        }
    }

}
?>