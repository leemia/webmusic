<?php require_once "./mvc/views/block/header.php"; ?>
<h1>Login</h1>
<link rel="stylesheet" href="public/css/login.css">
<?php
if (isset($data['result'])) {
    // var_dump($data['result']);
?>
<p style=" margin-top: 40px; text-align: center; font-size: 20px; font-weight: bold;">
    <?php if ($data['result'] == '1') {
        echo "Wrong password, please login again!";
    }else if ($data['result'] == '2') {
        echo "Username is wrong, please login again!";
    }
    ?>
<?php } ?>
</p>

<form action="./Login/DangNhap" method="post">

    <div class="container">
        <label><b>Username</b></label>
        <input class="input" type="text" placeholder="Enter username" name="username" required>
        <label><b>Password</b></label>
        <input class="input" type="password" id="myInput" placeholder="Enter password" name="pass" required>
        <input type="checkbox" onclick="myFunction()"> Show Password
        <button type="submit" name="btnLogin" class="btn btn-primary">Login</button>
        <a href="Login/ForgotPassword">Forgot Password ?</a>
        <a href="Login/Register">Sign up</a>

    </div>
</form>


