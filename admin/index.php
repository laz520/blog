<?php
session_start();
include ("../php/config.php");
if (isset($_SESSION['dr']) && $_SESSION['dr']== true && $_SESSION['user'] && $_SESSION['pass'])://判断Session的值是不是为空！
$sqla = "SELECT * FROM admin WHERE user='" . $_SESSION['user'] . "'";
$resulta = $conn->query($sqla);
$rowa = mysqli_fetch_assoc($resulta);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Bootstrap5 实例</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.staticfile.org/twitter-bootstrap/5.1.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.staticfile.org/twitter-bootstrap/5.1.1/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="card bg-primary text-white">


<div class="container mt-5 ml-10">

    <h2  class="mb-5">博客首页</h2>


</div>
</div>

<div class="card text-center" >
    <div class="card-header alert alert-success">
         <a href="release.php" class="btn btn-primary">发布文章</a>
        <a href="../index.php" class="btn btn-dark">返回首页</a>
        </div>

    <div class="card-body">
        <div class="card p-3" >
            <div class="card-body">
                <h4 class="card-title">管理员：<?php echo $_SESSION['user'] ?></h4>
                <div class="row">
                    <a>当前PHP版本号<?php echo PHP_VERSION; ?>  &nbsp;当前时间：<?php echo date("Y-m-d")?></a></div>
                <p class="card-text">今日又是美好的一天呢～</p>

            </div>
    </div>
    <div class="card-footer"><a href="../php/tc.php" class="btn btn-secondary"> 退出登陆</a></div>
</div>
</body>
</html><?php
else:
    echo "<script>alert('未登入')
window.location.href = 'login.php'
</script>";
endif;
