<?php
include_once "ConDB.php";
function sel($sql)
{
    global $conn;
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);
    return $row;
}
function getrows($sql)
{
    global $conn;
    $result = mysqli_query($conn,$sql);
    return $result;
}
function upd($sql)
{
    $result = mysqli_query($conn,$sql);
    return $result;
}
function redirect($page)
{
	header('location:'.$page.'');
	exit;
}
?>