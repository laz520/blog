<?php
session_start();
include ("../php/function.php");
include ("../php/config.php");
if (isset($_SESSION['dr']))://判断Session的值是不是为空！

    ?>
<?php
else:
    echo "<script>alert('未登入')
window.location.href = 'login.php'
</script>";
endif;?>
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

        <a href="../index.php" class="btn btn-dark">返回首页</a>
    </div>

    <table class="table">
        <thead>
        <tr>
            <th>是否显示</th>
            <th>文章标题</th>
            <th>文章内容</th>
            <th>文章分类</th>
            <th>发布时间</th>
            <th>文章操作</th>
        </tr>
        </thead>
        <tbody>

<?php         if ($result->num_rows > 0) {
    // 输出数据
    while ($rw = $result->fetch_assoc()) {


        ?>
            <?php        $absract =mb_substr($rw['content'],0,20,"UTF-8")  ?>

        <tr>
            <td><?php   if ($rw['punish'] ==1){
                echo "显示";
                }else{
                echo "隐藏";
                }?></td>
            <td><?php echo $rw['title']?></td>
            <td><?php echo $absract?></td>
            <td><?php echo $rw['category']?></td>
            <td><?php echo $rw['fbdate']?></td>
            <td>

                <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
                 操作
                </button>
                <ul class="dropdown-menu">
                    <li><a href="../php/ss.php?id=<?php echo $rw['id']?>" class="dropdown-item">删除</a></li>
                    <li>   <a href="../php/bj.php?id=<?php echo $rw['id']?>" class="dropdown-item">编辑</a></li>

                </ul>

            </td>


        </tr>
<?php
}}
?>

</tbody>
    </table>
    </div>
</body>
    </html>
