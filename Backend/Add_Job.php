<?php 
	include '/srv/www/zer0-one.net/public_/test/Timer.php';
	add_job("/srv/www/zer0-one.net/public_/test/crontab.list", $_POST['b_month'], $_POST['b_day'], $_POST['b_hour'], $_POST['e_hour'], "/srv/www/zer0-one.net/public_/test/test.sh.php ".$_POST['domain'], $_POST['freq']);
?>
