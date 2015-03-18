<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login Form</title>
    <script src="js/jquery.min.js"></script>
    <script src="js/main.js"></script>


<style>
body{
    height: 100vh;
    width: 100vw;
    position: relative;
}
.login_form{
    width: 40%;
    height: 40%;
    margin: 0 auto;
    position: relative;
    top: 50%;
    transform: translateY(-50%);
    background-color: lightgray;
    border: 2px double gray;
}
</style>
</head>
<body>
    
<div class="login_form">
    <div id="showing_name"></div>
    <form action="login.php" method="post">
        <input class="usrnm"type="text" name="username" placeholder="Username">
        <input class="usrnm"type="text" name="password" placeholder="Password">
        <button type="submit" id="usrlgn" class="btn">Login</button>
    </form>
</div>



</body>
</html>