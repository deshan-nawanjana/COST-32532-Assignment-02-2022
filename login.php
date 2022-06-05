<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <script src="source/index.js"></script>
    <link rel="stylesheet" href="source/login.css">
</head>
<body>
    <form>
        <h3 align="center">LOGIN</h3>
        <label>
            <div>User Name</div>
            <input required type="text" name="name" placeholder="User Name">
        </label>
        <label>
            <div>Password</div>
            <input required type="password" name="password" placeholder="Password">
        </label>
        <p align="right">
            <button onclick="login()">Login</button>
        </p>
    </form>
</body>
</html>