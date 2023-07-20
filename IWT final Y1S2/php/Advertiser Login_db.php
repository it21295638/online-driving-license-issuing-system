<?php
$error='';
if(isset($_POST['submit']))
{
 if(empty($_POST['email']) || empty($_POST['password']))
    {
        $error = "Email or Password is Invalid";
    }
 else
    {

        $email=$_POST['email'];
        $password=$_POST['password'];

        $connection = mysqli_connect("localhost", "root", "", );

        $db = mysqli_select_db($connection, 'online_helpdesk');

        $query = mysqli_query($connection, "SELECT * FROM registration WHERE password='$password' AND email='$email'");
 
        $rows = mysqli_num_rows($query);
        if($rows)
            {
                echo header("Location:../HTML/Add Advertisement.html");
            }
        else
            {
                echo '<script type="text/javascript">alert("Fail to Loging!!")</script>';
            }
    }
} 
?>