<?php

/***
	Lookup Interface

	@project LoL Fantasy LCS
	@author A.Chu
	@date July-2014
**/

$root = (isset($root)) ? $root : '';
include_once($root . 'active_get.php');

include_once($root . 'constants.php');
include_once($root . 'db.php');

// Pre-processing 
if (!isset($player_id) && isset($_GET['p_add']))
{
	$player_id = $_GET['p_add'];
}
if (!isset($team_id) && isset($_GET['t_add']))
{
	$team_id = $_GET['t_add'];
}

if (isset($player_id))
{
	$mode = 'p';
	$team_id = '';
}
else
{
	$mode = 't';
	$player_id = '';
}

// Data party
$record = array();

if ($mode == 'p')
{
	$player = player($player_id);
	$data_name = $player['name'];
	$team = player_team($player_id);
	$blank_record = array('victory', 'kills', 'deaths', 'assists', 'minionKills', 'doubleKills', 'tripleKills', 'quadraKills', 'pentaKills');
	$form_history = previous_player_matches($player_id, $team);
}
else
{
	$team = team($team_id);
	$data_name = $team['name'];
	$blank_record = array('victory', 'towersKilled', 'dragonsKilled', 'baronsKilled','firstBlood', 'firstTower', 'firstInhibitor');
	$form_history = previous_team_matches($team_id);
}

$count['Form'] = 0;
foreach ($form_history as $match) 
{
	$count['Form']++;
	foreach ($blank_record as $field)
	{
		$record['Form'][$field] = (isset($record['Form'][$field])) ? $record['Form'][$field] + $match[$field] : $match[$field]; 
	}

	if ($mode == 'p')
	{
		$score = $match['kills'] * 2 + $match['assists'] * 1.5 - $match['deaths'] * 0.5 + 0.01 * $match['minionKills'] + 2 * $match['tripleKills'] + 5 * $match['quadraKills'] + 10 * $match['pentaKills'];
		$score += ($match['kills'] >= 10 || $match['assists'] >= 10) ? 2 : 0;
	}
	else
	{
		$score = 2 * ($match['victory'] + $match['baronsKilled'] + $match['firstBlood']) + $match['towersKilled'] + $match['dragonsKilled'];
	}

	$record['Form']['score'] = (isset($record['Form']['score'])) ? $record['Form']['score'] + $score : $score;
}

$home = ($mode == 'p') ? $team : $team_id;

$matchups = matchups ($home);
foreach ($matchups as $id => $opp)
{
	$opp_name = $opp['name'];

	if ($mode == 'p')
	{
		$matchup_history = previous_player_matches($player_id, $team, $opp['opponentId']);
	}
	else
	{
		$matchup_history = previous_team_matches($team_id, $opp['opponentId']);
	}

	$count[$opp_name] = 0;
	foreach ($matchup_history as $match) 
	{
		$count[$opp_name]++;
		foreach ($blank_record as $field)
		{
			$record[$opp_name][$field] = (isset($record[$opp_name][$field])) ? $record[$opp_name][$field] + $match[$field] : $match[$field]; 
		}
		
		if ($mode == 'p')
		{
			$score = $match['kills'] * 2 + $match['assists'] * 1.5 - $match['deaths'] * 0.5 + 0.01 * $match['minionKills'] + 2 * $match['tripleKills'] + 5 * $match['quadraKills'] + 10 * $match['pentaKills'];
			$score += ($match['kills'] >= 10 || $match['assists'] >= 10) ? 2 : 0;
		}
		else
		{
			$score = 2 * ($match['victory'] + $match['baronsKilled'] + $match['firstBlood']) + $match['towersKilled'] + $match['dragonsKilled'];
		}

		$record[$opp_name]['score'] = (isset($record[$opp_name]['score'])) ? $record[$opp_name]['score'] + $score : $score;
	}
}

// Now average
foreach ($record as $name => $data)
{
	foreach ($data as $field=>$value)
	{
		$record[$name][$field] = round($value / $count[$name], 2);
	}
}

echo sprintf ('
	<span class="data_title">%s (<a href="?%s" />Remove</a>)<span>

	<table>
	<tr>
	<td class="data_wide">Versus</td>', $data_name, active_get($player_id, $team_id));

foreach ($blank_record as $field)
{
	echo sprintf('<td class="data_narrow">%s</td>', $field);
}

echo '<td class="data_narrow">Points</td></tr>';

foreach ($record as $name => $data)
{
	echo sprintf ('
		<tr>
			<td>%s</td>
			', $name);

	foreach ($data as $field=>$value)
	{
		if ($field == 'victory')
		{
			echo sprintf('
			<td>W%d-L%d</td>', $value * $count[$name], $count[$name] * (1 - $value));
		}
		else
		{
			echo sprintf ('
			<td>%s</td>', $value);
		}
	}

	echo '</tr>';
}

echo '</table>';

// Post-processing
if ($mode = 'p')
{
	unset($player_id);
}
else
{
	unset($team_id);
}

?>
