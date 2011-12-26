<?php function add_job($crontab_list, $start_month, $start_day, $start_hour, $end_hour, $start_minute, $end_minute, $command){
	$f_ptr = fopen($crontab_list, "a+") or die("File could not be opened/created.");
	fwrite($f_ptr, "$start_minute "."$start_hour ".$start_day." ".$start_month." * ".$command." $end_hour"."$end_minute"."\n");
	fclose($f_ptr);
	//return count(file($crontab_list));
	}
	function remove_jobs($jobs_dir){
	//$fileArray = file($crontab_list);
	//unset($fileArray[$line_number]);
	//file_put_contents($crontab_list, implode('', $fileArray), LOCK_EX);
	exec("rm $jobs_dir"."/*");
	exec("rm crontab.list");
	}
	function copy_jobs($crontab_list){
	exec("crontab -r");
	exec("crontab $crontab_list");
	}
?>
