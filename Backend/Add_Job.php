<?php 
	include 'Timer.php';
	$new_job = true;
	$b_hour;
	$e_hour;
	if ($_POST['b_am_pm'] == "PM"){$b_hour = $_POST['b_hour'] + 12;}
	else{$b_hour = $_POST['b_hour'];}
	if ($_POST['e_am_pm'] == "PM"){$e_hour = $_POST['e_hour'] + 12;}
	else{$e_hour = $_POST['e_hour'];}
	$file = realpath("domains/")."/".$_POST['b_month'].$_POST['b_day'].$b_hour.$e_hour;
	if(file_exists($file)){$new_job = false;}
	$f_ptr = fopen($file, "a+");
	foreach(explode(",", $_POST['domains']) as $domain){fwrite($f_ptr, $domain."\n");}
	fclose($f_ptr);
	$e_min;
	if(strlen($_POST['e_minute']) == 1){$e_min = "0".$_POST['e_minute'];}
	else{$e_min = $_POST['e_minute'];}
	if($new_job == true){
		add_job("crontab.list", $_POST['b_month'], $_POST['b_day'], $b_hour, $e_hour, $_POST['b_minute'], $e_min, getcwd()."/register.sh.php $file");
	}
	copy_jobs("crontab.list");
?>
