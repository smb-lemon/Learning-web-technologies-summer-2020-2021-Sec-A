<?php
	
	$name = "";
	
	if(isset($_REQUEST['submit'])){
		
		$name = $_REQUEST['name'];
		if($name == ""){
			echo "invalid name!";
		}
	}else{
		echo 'invalid request';
	}
?>