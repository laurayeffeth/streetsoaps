<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<!-- DON'T FORGET TO REMOVE THIS META TAG WHEN DONE TESTING -->
	<meta name="ROBOTS" content="NOINDEX" />

    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<meta http-equiv="content-language" content="en" />
    <meta name="language" content="English" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
    <link rel="stylesheet" type="text/css" media="all" href="styles/reset.css" title="default" />
    <link rel="stylesheet" type="text/css" media="all" href="styles/screen.css" title="default" />
    <link rel="stylesheet" type="text/css" media="all" href="styles/cyclelite.css" title="default" />
	<script type="text/javascript" src="scripts/jquery.js"></script>
	<script type="text/javascript" src="scripts/cycle.lite.js"></script>
<script type="text/javascript">
$(function() {
    
    $('#slideshow').cycle({
        prev:   '.prev',
        next:   '.next',
        timeout: 0
    });    
    
});
</script>
	
	<!--[if IE 6]>
	<![endif]-->    
    
	<!--[if lte IE 7]>
	<![endif]-->
	<?php 
	$companyName = 'Street Soaps'; //enter COMPANY NAME here
	$pageName = basename($_SERVER['SCRIPT_NAME'], '.php');
	if ($pageName == 'index') {
		$pageName = 'home';
		}
	
	$title = $companyName.' | '.$pageName;
	$title = ucwords($title);
	?>
	<title><?php echo $title; ?></title>
