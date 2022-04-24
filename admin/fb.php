<?php
include ("../php/config.php");
$title = $_POST['title'];
$category = $_POST['category'];
$content = $_POST['content'];
$punish = $_POST['punish'];




$sql = "INSERT INTO  wz(`id` ,`title`,`category`,`content`,`punish`)value(null,' $title' ,'$category','$content','$punish')";

$query = mysqli_query($conn, $sql);

if ($query) {
    echo "<script>alert('发布成功！！');window.location.assign('../index.php')</script>";
} else {
    echo  $conn->error;
}