<?php
session_start();
include ("../php/config.php");
$user =trim($_POST['user']);
$pass = trim($_POST['pass']);
$sql = "SELECT * FROM admin WHERE user = '$user' and pass = '$pass'";
$result = $conn->query($sql);//处理$sql变量

$row = $result->fetch_assoc(); //从结果集中取得一行作为关联数组

if (isset($_POST['login'])){
  if ($row['user'] == $user && $row['pass'] == $pass){
        $_SESSION['dr'] = true;
        $_SESSION['user'] = $user;
        $_SESSION['pass'] = $pass;
      echo "<script>alert('登入成功！')</script>";
      header('refresh:0.1; url=index.php');

    }else{
      echo "<script>alert('账号密码输入错误')</script>";
      header('refresh:0.1; url=login.php');
  }


}else{
    echo "<script>alert('未输入账号密码')</script>";
    header('refresh:0.1; url=login.php');
}