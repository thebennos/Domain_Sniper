#!/usr/bin/php
<?php
//	try{
	$f_ptr = fopen("/srv/www/zer0-one.net/public_/test/testfile", "a+");
	fwrite($f_ptr, "THIS IS A TEST");
	fclose($f_ptr);
//	}
	
//	catch(Exception $e){
//	$f_ptr = fopen("/srv/www/zer0-one.net/public_/test/errors.out", "a+");
//	fwrite($f_ptr, $e->getMessage());
//	fclose($f_ptr);

//	}
?>
