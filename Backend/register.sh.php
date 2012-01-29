#!/usr/bin/php
<?php include 'Dynadot_API.php';
	if($argv[2] == NULL){exit(1);}
	$D_api = new Dynadot_API("7R8g8R7q6Ce9I8I8H7Qv6Z6y857Z8f");
	$file = file($argv[1], FILE_IGNORE_NEW_LINES);
	while(true){
		if((count($file) == 0) || (date("Gi") == $argv[2])){break;}
		for($i = 0; $i < count($file); $i++){
			if($D_api->isAvailable($file[$i])){
				$response = $D_api->register($file[$i], "1");
				$f_ptr = fopen(dirname(__FILE__)."/reg.txt", "a+");
				$temp = count($file);
				fwrite($f_ptr, date("r")." $file[$i] was checked and is available"." Index:$i  count(file):$temp \n");
				if($response == "true"){
					fwrite($f_ptr, date("r")." $file[$i] was registered"." Index:$i  count(file):$temp \n");
				}
				else{
					fwrite($f_ptr, date("r")." $file[$i] was not registered: ".$response." Index:$i  count(file):$temp \n");
				}
				fclose($f_ptr);
				unset($file[$i]);
				$file = array_values($file);
			}
			else{
				$f_ptr = fopen(dirname(__FILE__)."/reg.txt", "a+");
				$temp = count($file);
				fwrite($f_ptr, "$file[$i] was checked and is not available"." Index:$i  count(file):$temp \n");
				fclose($f_ptr);
			}
			sleep(10);
		}
	}
	$f_ptr = fopen(dirname(__FILE__)."/reg.txt", "a+");
	fwrite($f_ptr, "=================END OF JOB====================\n\n\n");
	fclose($f_ptr);
?>
