<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>黑色童年blog</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/5.1.1/css/bootstrap.min.css">

    <!-- 最新的 Bootstrap5 核心 JavaScript 文件 -->
    <script src="https://cdn.staticfile.org/twitter-bootstrap/5.1.1/js/bootstrap.bundle.min.js"></script>
    <link rel="shortcut icon" href="images/a.ico" >
    <script src="js/js.js" ></script>
    <link rel="stylesheet" href="css/css.css">
</head>
<body>
<?php  include "header.php"?>
<div class="main ">
    <div class="container">
        <div class="row">
            <div class="cox-xs-12">
                <div class="alert alert-success p-5" role="alert">
                    <div class="card text-center">
                        <div class="card-header">
                           关于自己
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">职业：在校大学生</h5>
                            <p class="card-text">努力成为一名全栈的开发工程师！</p>
                            <p class="card-text " style="font-size: 10px;color: gray ">技能：H5/CS3/Javascript/PHP/Mysql/jQuery/Ajax</p>
                            <a href="https://03html.com/index.html" class="btn btn-primary">联系他吧</a>
                        </div>
                        <div class="card-footer text-muted">
                            贵在坚持，持之以恒
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="foot">
    <div class="container">
        <div class="row">
            <div class="cox-xs-12">
                <h6 class="text-center">&copy;<?php echo date("Y")?>黑色童年</h6>
            </div>
        </div>
    </div>
</div>
</body>
<script>
    const nav = document.querySelector('.nav-link ');
    nav.onclick = function(){

        nav.classList.add("active")
    }


</script>
</html>