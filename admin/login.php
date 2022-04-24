<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>童年博客登入</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.staticfile.org/twitter-bootstrap/5.1.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.staticfile.org/twitter-bootstrap/5.1.1/js/bootstrap.bundle.min.js"></script>
</head>
<body>


<div class="container mx-auto shadow p-10 mb-5 bg-white rounded-10 " style="width: 500px;margin-top:10%;border: 1px solid black;padding: 40px;border-radius: 20px">
    <div class="row">
    <h2 class="text-center">博客登陆</h2>

    <form action="a.php" method="post" class="was-validated col">
        <div class="form-group">
            <label for="uname">用户名:</label>
            <input type="text" class="form-control" id="uname"  name="user" required>

        </div><br>
        <div class="form-group">
            <label for="pwd">密码:</label>
            <input type="password" class="form-control" id="pwd" name="pass" required>

        </div>
        <br>
        <div class="row">
        <button type="submit" class="btn btn-primary " style="margin: 0 auto;" name="login">登陆</button>
        </div>
    </form>
</div>
</div>
</body>
</html>