<?php
$id = $_GET['id'];
$ida = $_GET['id'];
include ("config.php");
$sql = "SELECT * FROM wz  WHERE id = '$id'";
$result = $conn->query($sql);//处理$sql变量

$rw = $result->fetch_assoc(); //从结果集中取得一行作为关联数组


if (isset($_POST['xg']) && $_POST['xg'] == null) {

    $title = $_POST['title'];
    $category = $_POST['category'];
    $content =$_POST['content'];
    $punish =$_POST['punish'];
    $sqla = "UPDATE wz SET title ='$title' , content='$content' , category = '$category' , punish = '$punish' WHERE id = '$ida'";
    if ($conn->query($sqla) === true) {
        echo "<script>alert('修改成功')
window.location.href = '../admin/dele.php';
</script>";
    } else {
        echo "<script>alert('修改失败')
window.location.href = '../admin/index.php';</script>";
    }

}
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
                    <h1 class="mt-5 mb-3  ml-10" style="margin-left: 15px">修改文章</h1>
                    <div class="alert alert-success p-5" role="alert">
                        <form action="bj.php" method="post">
                            <div class="row">
                                <div class="col-xm-5">

                                    <input type="text" class="form-control" placeholder="文章标题"  value="<?php echo $rw['title']?>" name="title">

                                    <br>
                                    <input type="text" class="form-control" placeholder="文章分类"  value="<?php echo $rw['category']?> " name="category">

                                    <br>
                                    <textarea class="form-control" rows="5"  name="content"   placeholder="文章内容" ><?php echo $rw['content']?></textarea>
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
                                            <button class="btn btn-info " style="width: 300px" name="xg">发布</button>
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

