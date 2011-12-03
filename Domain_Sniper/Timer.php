<?php function add_job($crontab_list, $user, $start_month, $start_day, $start_hour, $end_month, $end_day, $end_hour, $command){
	$f_ptr = fopen($crontab_list, "a+") or die("File could not be opened/created.");
	fwrite($f_ptr, "* ".$start_hour."-".$end_hour." ".$start_day."-".$end_day." ".$start_month."-".$end_month." * ".$user." ".$command);
	fclose($f_ptr);
	}
	function remove_job($crontab_list, $line_number){
	$fileArray = file($crontab_list);
	unset($fileArray[$line_number]);
	file_put_contents($crontab_list, implode('', $fileArray), LOCK_EX);
	}
	function copy_jobs(){
	
	}
?>
