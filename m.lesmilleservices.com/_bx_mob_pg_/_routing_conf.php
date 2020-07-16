<?php
$pages = scandir('./_bx_mob_pg_/');
$default_page = $_GET['_route'] ?? 'home';
if (isset($_GET['_route']) && !empty($_GET['_route']) && in_array($_GET['_route'].'.php', $pages)) {
    $page = $_GET['_route'];
}else header("location:index.php?_route=".$default_page);
?>