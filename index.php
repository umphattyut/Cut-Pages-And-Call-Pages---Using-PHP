<?php
// Here's what I'm gonna share with you about cutting a page into many sections and call them into the master page (home)
// You don't need to make header/styles/script/menu/sidebar in each page, so use this, you need one page only
// Set the body.php to defaul page
// Use Switch Case PHP to switch page sections
//================================================================
// Be aware of the page sections and styles
// If the page sections have different style, it won't working well
// Please take care of your css and main tags like section/ div/..
//================================================================
$page = "body.php";
if(isset($_GET['pages']) && ($_GET['pages'] ==  TRUE)){
	$pages = $_GET['pages'];
	switch($pages){
		case "home":
			$page = "body.php";
		break;
		case "page1":
			$page = "page_001.php";
		break;
		case "section1":
			$page = "section.php";
		break;
		default:
			$page = "body.php";
		break;
	}
}
?>
<?php
	// Something like style CSS script of html/css/js
	include('header.php');
?>
<?php
	// Something like open container/top frame/ top wrapper of the page
	include('top_wrapper.php');
?>
<?php
	// Something like left navbar
	include('aside.php');
?>
<?php
	// this section is where to switch page when you click page links
	// So this section will be replaced with other sections
	// You can Switch sections in other sections like sidebar
	if (isset($page)) {
		include($page);
	}
?>
<?php
	// Something like close container/end frame/ end wrapper of the page
	// Put these close tags below the replaced page as the need
	include('bottom_wrapper.php');
?>
<?php
	// this is page footer
	include('footer.php');
?>
