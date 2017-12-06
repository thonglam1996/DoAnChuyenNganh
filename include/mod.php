<?php
  	
  	$search = getIndex("search");
	if($search != "")
	{
		include "search/content.php";
		return;
	}
	$mod = getIndex("mod", "homepage");
	if($mod == "detail")
		include "detail/content.php"; 
	else if($mod == "category")
		include "category/content.php";
	else if($mod == "search")
		include "search/content.php";
	else if($mod == "contact")
		include "contact/contact-container.php";
	else include "homepage/content.php";