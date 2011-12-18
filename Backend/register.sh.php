#!/usr/bin/php
<?php include 'Dynadot_API.php';
	try{
	$D_api = new Dynadot_API("7R8g8R7q6Ce9I8I8H7Qv6Z6y857Z8f");
	if ($argv[1] != NULL){
		if(strpos(implode(" ",$D_api->isAvailable($argv[1])), "yes")){
			$f_ptr = fopen("/srv/www/zer0-one.net/public_/test/domain_list", "a+");
			fwrite($f_ptr, "$argv[1] is available");
			fclose($f_ptr);
		}
		else{
			$f_ptr = fopen("/srv/www/zer0-one.net/public_/test/domain_list", "a+");
			fwrite($f_ptr, "$argv[1] is not available");
			fclose($f_ptr);
		}	
		//$D_api->register(argv[1]);
	}
	}
	catch(Exception $e){
		$f_ptr = fopen("/srv/www/zer0-one.net/public_/test/error.out", "a+");
		fwrite($f_ptr, $e->getMessage());
		fclose($f_ptr);
	}
?>
