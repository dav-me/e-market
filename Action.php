<?php 

	$pages = scandir('_bx_pages_/');

	$default_page = 'home';

	if ($_GET['page'] && !empty($_GET['page']) && in_array($_GET['page'].'.php', $pages)) {
	
		if (isset($_GET['_dvd_me_get_1000s_'])) {
			header("location:../_DashBoard_/");
		}else{
			$page = $_GET['page'];
			_conpterUser($page,$bdd);
		}

	}else{

		header("location:index.php?page=".$default_page);
	} 

?>