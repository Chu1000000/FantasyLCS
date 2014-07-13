<?php

/***
	Constants

	@project LoL Fantasy LCS
	@author A.Chu
	@date July-2014
**/

// DB related
$db_string_fields = array('dateTime', 'name', 'acronym', 'roleName');

// Dates
function sql_date ($time)
{
	return date("'Y-m-d\T00:00:00.000'", $time);
}


define('SPLIT_START_T', strtotime("19 May 2014"));
define('SPLIT_START', sql_date(SPLIT_START_T));

$week = (isset($_GET['week'])) ? SPLIT_START_T + 7 * 24 * 3600 * ($_GET['week']-1) : strtotime('Last Monday');
define('WEEK_START', sql_date($week));
define('WEEK_END', sql_date($week + 7 * 24 * 3600));

?>