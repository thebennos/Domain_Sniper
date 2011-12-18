<?php function add_job($crontab_list, $start_month, $start_day, $start_hour, $end_hour, $command, $frequency = 1){
	$f_ptr = fopen($crontab_list, "a+") or die("File could not be opened/created.");
	fwrite($f_ptr, "*/$frequency ".$start_hour."-"."$end_hour ".$start_day." ".$start_month." * ".$command."\n");
	fclose($f_ptr);
	return count(file($crontab_list));
	}
	function remove_job($crontab_list, $line_number){
	$fileArray = file($crontab_list);
	unset($fileArray[$line_number]);
	file_put_contents($crontab_list, implode('', $fileArray), LOCK_EX);
	}
	function copy_jobs($crontab_list){
	exec("crontab -r");
	exec("crontab $crontab_list");
	}
?>
