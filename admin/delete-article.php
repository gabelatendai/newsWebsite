<?php
include '../rb.php';
R::setup('mysql:host=localhost;dbname=newsDb', 'root', ''); //for both mysql or mariaDB

$id = $_GET['id'];

$init = R::findOne('news', 'id = ?', [$id]);

R::trash( $init );

print ("<script>window.alert('successfully deleted ')</script>");
print ("<script>window.location.assign('news.php')</script>");
?>
