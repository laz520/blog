<?php
include ("config.php");
$id =$_GET['id'];
$sql = "DELETE FROM  wz WHERE id = $id";

if ($conn ->query($sql)===TRUE){
    echo "<script>alert('删除成功！')</script>";
    header('refresh:0.1; url=../admin/index.php');
}else{
    echo "删除失败";

}

$conn->close();