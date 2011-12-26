<?php 
	include 'Timer.php';
	$new_job = true;
	$file = realpath("domains/")."/".$_POST['b_month'].$_POST['b_day'].$_POST['b_hour'].$_POST['e_hour'];
	if(file_exists($file)){$new_job = false;}
	$f_ptr = fopen($file, "a+");
	foreach(explode(",", $_POST['domains']) as $domain){fwrite($f_ptr, $domain."\n");}
	fclose($f_ptr);
	$e_min;
	if(strlen($_POST['e_minute']) == 1){$e_min = "0".$_POST['e_minute'];}
	else{$e_min = $_POST['e_minute'];}
	if($new_job == true){
		add_job("crontab.list", $_POST['b_month'], $_POST['b_day'], $_POST['b_hour'], $_POST['e_hour'], $_POST['b_minute'], $e_min, getcwd()."/register.sh.php $file");
	}
?>
