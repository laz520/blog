<?php
session_start(); //创建session
session_unset();//删除session
echo "<script>alert('登出成功 ')
window.location.href = '../admin/login.php'
</script>";