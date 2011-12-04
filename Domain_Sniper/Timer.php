<?php function add_job($user, $start_month, $start_day, $start_hour, $end_month, $end_day, $end_hour, $command){
	$f_ptr = fopen("crontab.list", "a+") or die("File could not be opened/created.");
	fwrite($f_ptr, "* ".$start_hour."-".$end_hour." ".$start_day."-".$end_day." ".$start_month."-".$end_month." * ".$user." ".$command);
	
	}
	function remove_job($line_number){
	
	}
	function copy_jobs(){
	
	}
?>
