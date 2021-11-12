<?php
include_once "includes/functions.php";
// echo "<pre>";
// var_dump($_GET['id']);die;
// echo "</pre>";

$id = 0;
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];
}
$posts = get_posts($_GET['id']);

include_once "includes/header.php";
include_once "includes/posts.php"; 
include_once "includes/footer.php"; 

?>