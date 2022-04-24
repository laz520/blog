<?php

include ("php/function.php");


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
    <meta name="keywords" content="黑色博客,刘小铵,许佳妮">
    <meta name="description" content="黑色博客">
    <script src="js/js.js" ></script>
    <link rel="stylesheet" href="css/css.css">
</head>
<body>
<?php  include "header.php"?>
<div class="main ">
    <div class="container">
        <div class="row">


            <?php         if ($result->num_rows > 0) {
                // 输出数据
                while ($rw = $result->fetch_assoc()) {


                    ?>              <?php    // $absract =strip_tags($rw['content']);
                    $absract =mb_substr($rw['content'],0,59,"UTF-8")  ?>
                    <div class="p-4  " role="alert">
                        <div class="card">

                            <div class="card-body">
                                <a href="content.php?id=<?php echo $rw['id'];?>  " style="text-decoration: none" class="text-success"> <h1 class="card-title"><?php echo $rw['title']?></h1></a>
                                <p class="card-text"> <?php echo $absract; ?> ······</p>
                                <a style="font-size: 10px ;color:gray"><?php echo $rw['fbdate']?></a>
                                <a  style="font-size: 10px ;color:gray"><?php echo $rw['category']?></a>
                            </div>

                        </div>
                    </div>
                <?php  }
            }  ?>


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