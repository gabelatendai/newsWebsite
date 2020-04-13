<?php
include '../rb.php';
R::setup('mysql:host=localhost;dbname=newsDb', 'root', ''); //for both mysql or mariaDB

$id = $_GET['id'];

$init = R::findOne('comments', 'id = ?', [$id]);

R::trash( $init );

print ("<script>window.alert('successfully deleted ')</script>");
print ("<script>window.location.assign('comments.php')</script>");
?>
