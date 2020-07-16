<?php
$pages = scandir('./_bx_mob_pg_/');
$default_page = $_GET['page'] ?? 'home';
if (isset($_GET['page']) && !empty($_GET['page']) && in_array($_GET['page'].'.php', $pages)) {
    $page = $_GET['page'];
}else header("location:index.php?page=".$default_page);
?>