<?php

$section='-1';//default variable value
if(isset($_GET['section'])){ //does the 'section' URL parameter exist
	$section=$_GET['section']; //reassigned variable value
	
}

if($section=='home'){ //if we're on the home page
	include('home_content.php');
	
	}else if($section=='about' || $section== 'modified' || $section== 'mk1' || $section== 'mk2' || $section== 'mk3' || $section== 'mk4' || $section== 'mk5' || $section== 'mk6' || $section== 'beetle'){ // if we're on the about, mk1, mk2, mk3, mk4, mk5, mk6, beetle, or modified page
		include('section_content.php');
	
	
	}else if($section== 'exclusives'){ // if we're on the exclusives page
		include('gallery_content.php');
		
	}else{ //if we need a default page (or URL parameter doesn't match)
		include('home_content.php');
}










?>