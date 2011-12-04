#!/usr/bin/php
<?php include 'Dynadot_API.php';
	$D_api = new Dynadot_API(9999999);
	if (argv[1] != NULL){
		if($D_api->isAvailable(argv[1])){
			$D_api->register(argv[1]);
		}
	}
?>
