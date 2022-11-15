<?php

if(isset($_GET['err']))
{
    if($_GET['err'] == 'null')
    {
        echo "Must be filled all info..";
    }
    else if($_GET['err'] == 'invalid')
    {
        echo "Invalid Username or Password...";
    }
    else if($_GET['err'] == 'bad_request')
    {
        echo "Please login first...";
    }
}

?>


<html>
<head>
    <title>Login</title>
</head>
<body>
<center>
    <form action="loginC.php" method="post">
        <table border="2px">
            <tr>
                <td width="300px">
                    <img src="photo/train.jpg" width="30px">Railway E-ticket Service
                </td>
                <td align="left">
                    <a href="logout.php">Logout</a> |
                    <a href="reg.php">Registration</a>
                </td>
            </tr>
            <tr>
                <td colspan=2 align="center">
                    <fieldset>
                        <legend align="center">Category</legend>
                        <input type="radio" name="category" value="admin"/> Admin 
                        <input type="radio" name="category" value="user"/> User
                    </fieldset>
                    <fieldset>
                    Username <input type="text" name="username">
                    <br>
                    Password <input type="password" name="password"><br>
                    <input type="submit" name="btn" value="Login"/>
                    <a href="reg.php">Signup</a>
                    <a href="forgottenPass.php">Forgotten Password</a></td>
                    </fieldset>
                </td>
            </tr>
            <tr>
                <td colspan=2 align="center">
                Presented by: Nazmul, Jannat, Aditya, Uma
                </td>
            </tr>
        </table>
    </form>
</center>
</body>
</html>