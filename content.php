<?php


include ("php/config.php");
$id = $_GET['id'];
$sql = "SELECT * FROM wz WHERE `punish`= 1 AND `id` = {$id}";
$result = $conn->query($sql);
$row =$result->fetch_assoc();

// 输出数据




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $row['title']?></title>
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

            <div class="col-xs-12 text-center">
                <h1 class="mt-5 mb-5"><?php echo $row['title']?></h1>

            </div>

        </div>


    </div>


</div>
<div class="main p-5 mt-10">
    <div class="container">
        <div class="row">
            <div class="cox-xs-12">
       <h3><?php echo $row['title']?></h3>
                <hr>
                <h6><?php echo $row['content'] ?></h6>

                <div class="card-body">


                    <a style="font-size: 10px ;color:gray"><?php echo $row['fbdate']?></a>
                    <a  style="font-size: 10px ;color:gray"><?php echo $row['category']?></a>
                </div>
                <nav aria-label="breadcrumb" style="float:right">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page"><a href="all.php" style="text-decoration: none">返回上一页 </a></li>
                    </ol>
                </nav>
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