<?php include 'Timer.php';
	add_job("crontab.list", "mcbhost", $_POST[b_month], $_POST[b_day], $_POST[b_hour], $_POST[e_month], $_POST[e_day], $_POST[e_hour], "/home/user/register.sh.php", $_POST[freq]);
?>
