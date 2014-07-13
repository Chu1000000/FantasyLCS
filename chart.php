<?php

/***
	Stats Correlation Charts

	@project LoL Fantasy LCS
	@author A.Chu
	@date July-2014
**/
if (!isset($_GET['x'], $_GET['y']))
{
	die('Nope feed me');
}

$team_stats = array('baronsKilled', 'dragonsKilled', 'towersKilled', 'firstBlood', 'firstDragon', 'firstTower', 'firstInhibitor');
$all_team_stats = array('team_kills', 'team_assists', 'team_deaths', 'team_minionKills')
// $player_stats = array('role', 'team', 'kills', 'assists', 'deaths', 'minionKills', 'doubleKills', 'tripleKills', 'quadraKills', 'pentaKills')
$match_stats = array('side', 'victory'/*, 'week', 'continent' */);
$surplus = array('dragons', 'barons', 'towers', 'team_kills', 'team_assists', 'team_deaths', 'team_minionKills', 'kills', 'assists', 'deaths', 'minionKills');

$select = '';
$from = '';
$inner_join = '';
$where = '';

$x = $_GET['x'];
$y = $_GET['y'];

if (in_array($x, $team_stats))
{
	$select = $x;
	$from = 'teamGame';
}
elseif (in_array($x, $match_stats))
{
	if ($x == 'side')
	{
		$select = 'IF (team.id = match.blueId, 1, 2) as `side`';
	}
	elseif ($x == 'victory')
	{
		$select = 'IF (team.id = game.winnerId, 1, 0) as `victory`';
	}

	$from = 'teamGame';
	
}
elseif (in_array($x, $all_team_stats))

$where = ($where == '') ? '' : 'WHERE ' . $where;
$sql = sprintf('SELECT %s FROM %s %s %s' ,$select, $from, $inner_join, $where);

?>