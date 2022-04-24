<?php
session_start();
include ("../php/config.php");
if (isset($_SESSION['dr']) && $_SESSION['dr']== true && $_SESSION['user'] && $_SESSION['pass'])://判断Session的值是不是为空！
$sqla = "SELECT * FROM admin WHERE user='" . $_SESSION['user'] . "'";
$resulta = $conn->query($sqla);
$rowa = mysqli_fetch_assoc($resulta);
?>


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

<div class="top mb-5 ">

    <div class="container">
        <div class="row">

            <div class="col-xs-12 " style="float: left">


            </div>

        </div>


    </div>


</div>

<div class="main ">

    <div class="container">
        <div class="row">
            <div class="cox-xs-12">
                <h1 class="mt-5 mb-3  ml-10" style="margin-left: 15px">发布文章</h1>
                <div class="alert alert-success p-5" role="alert">
                    <form action="fb.php" method="post">
                        <div class="row">
                            <div class="col-xm-5">
                                <input type="text" class="form-control" placeholder="文章标题" name="title">

                                <br>
                                <input type="text" class="form-control" placeholder="文章分类" name="category">

                                <br>
                                <textarea class="form-control" rows="5"  name="content" placeholder="文章内容"></textarea>
                                <br>
                                <div class="row mb-3" >
                                    <div class="col-xs-12">
                                        <label for="sel1" class="form-label">是否发布</label>

                                        <select class="form-select" name="punish"  >
                                            <option value="1" >是</option>
                                            <option value="2" >否</option>

                                        </select>

                                    </div>
                                </div>
                                <br>
                                <div class="row mb-3" >
                                    <div class="col-xs-12 text-center">
                                        <button class="btn btn-info " style="width: 300px">发布</button>
                                    </div>
                                </div>
                    </form>
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
</html>
<?php
else:
    echo "<script>alert('未登入')
window.location.href = 'login.php'
</script>";
endif;
