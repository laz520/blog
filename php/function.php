<?php
include ("config.php");



    $sql = "SELECT * FROM wz WHERE `punish`= 1 ";
    $result = $conn->query($sql);

$sqla = "SELECT * FROM wz ";
$resulta = $conn->query($sqla);
