<?php
    require_once "db_connect.php";
    $sql = "DELETE FROM `dishes` WHERE `dishes`.`dish_id` = $_GET[dish_id]";
    mysqli_query($connect, $sql);
    header('Location: day8-adv.php');