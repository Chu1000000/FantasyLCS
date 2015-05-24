<?php

/***
	JowJow Fantasy LCS Table

	@project LoL Fantasy LCS
	@author A.Chu
	@date July-2014
**/

// Name Lookup
$names = array('Chu', 'Sam', 'Cody', 'Toj', 'Scott', 'Jimmy', 'Chris', 'Bot');
$split_names = array('All Splits', 'Summer 2014', 'Spring 2015'); //, 'Summer 2015');

//
// Result Data
//
// Split 1, Summer 14 ---------------------------------------------------------------------------------
$data[1] = array(
		// Week	 	Chu(0) 	Sam(1) 	Cody(2)	Toj(3) 	Scott(4)Jimmy(5)
		1 => array(40587,	45859,	38142,	49675,	42904,	47063),
		2 => array(20046,	18588,	20454,	21894,	19686,	20143),
		3 => array(28682,	23949,	21192,	24389,	21700,	20109),
		4 => array(21516,	12335,	12420,	23668,	21305,	20872),
		5 => array(21350,	19940,	20726,	24814,	26848,	25722),
		6 => array(21310,	23847,	25705,	21199,	18013,	23426),
		7 => array(46707,	51551,	50009,	45065,	39867,	47613),
		8 => array(18962,	27597,	16447,	15878,	16880,	26574),
		9 => array(26574,	28748,	16074,	25980,	25690,	24504),
		10 => array(19703,	21846,	28948,	14042,	23661,	20377),
		11 => array(58586,	55691,	54840,	26294,	41391,	53379)
		);

$matchups[1] = array(
		// Week 	Matchup1	Matchup2	Matchup3
		1 => array(	'0-2',		'1-5',		'3-4'),
		2 => array(	'0-1',		'4-5',		'2-3'),
		3 => array(	'0-3',		'1-4',		'2-5'),
		4 => array(	'0-5',		'1-3',		'2-4'),
		5 => array(	'0-4',		'1-2',		'3-5'),
		6 => array(	'0-1',		'4-5',		'2-3'),
		7 => array(	'0-4',		'1-3',		'2-5'),
		8 => array(	'0-3',		'2-4',		'1-5'),
		9 => array(	'0-2',		'3-5',		'1-4'),
		10 =>array(	'0-5',		'1-2',		'3-4'),
		11 =>array(	'0-4',		'1-3',		'2-5'),
		);

$pro_matches[1] = array (
		1 => 4,
		2 => 2,
		3 => 2,
		4 => 2,
		5 => 2,
		6 => 2,
		7 => 4,
		8 => 2,
		9 => 2,
		10=> 2,
		11=> 4);

// Split 2, Spring 15 ---------------------------------------------------------------------------------
$data[2] = array(
		// Week	 	Chu(0) 	Sam(1) 	Cody(2)	Toj(3) 	Scott(4)Jimmy(5)
		1 => array(23398,	22896,	15289,	24576,	22896,	20272),
		2 => array(17160,	23351,	26527,	20351,	26196,	31108),
		3 => array(26163,	28774,	28585,	21111,	27716,	32329),
		4 => array(23470,	20646,	23921,	26511,	30164,	28930),
		5 => array(28076,	21640,	22020,	27142,	24326,	26899),
		6 => array(20347,	24577,	23349,	25069,	22427,	28972),
		7 => array(25649,	21173,	21877,	19477,	26003,	19859),
		8 => array(23505,	22962,	21188,	26029,	28668,	29484),
		9 => array(26433,	17402,	26569,	29738,	33333,	23302)
		);

$matchups[2] = array(
		// Week 	Matchup1	Matchup2	Matchup3
		1 => array(	'0-4',		'1-3',		'2-5'),
		2 => array(	'0-5',		'1-4',		'2-3'),
		3 => array(	'0-2',		'3-4',		'1-5'),
		4 => array(	'0-1',		'3-5',		'2-4'),
		5 => array(	'0-3',		'1-2',		'4-5'),
		6 => array(	'0-5',		'1-4',		'2-3'),
		7 => array(	'0-3',		'2-4',		'1-5'),
		8 => array(	'0-1',		'3-4',		'2-5'),
		9 => array(	'0-2',		'1-3',		'4-5')
		);

$pro_matches[2] = array (
		1 => 2,
		2 => 2,
		3 => 2,
		4 => 2,
		5 => 2,
		6 => 2,
		7 => 2,
		8 => 2,
		9 => 2,
);

// Split 3, Summer 15 ---------------------------------------------------------------------------------

$data[3] = array(/*
		// Week	 	Chu(0) 	Sam(1) 	Cody(2)	Toj(3) 	Scott(4)Jimmy(5)
		1 => array(23398,	22896,	15289,	24576,	22896,	20272),
		2 => array(17160,	23351,	26527,	20351,	26196,	31108),
		3 => array(26163,	28774,	28585,	21111,	27716,	32329),
		4 => array(23470,	20646,	23921,	26511,	30164,	28930),
		5 => array(28076,	21640,	22020,	27142,	24326,	26899),
		6 => array(20347,	24577,	23349,	25069,	22427,	28972),
		7 => array(25649,	21173,	21877,	19477,	26003,	19859),
		8 => array(23505,	22962,	21188,	26029,	28668,	29484),
		9 => array(26433,	17402,	26569,	29738,	33333,	23302)*/
		);

$matchups[3] = array(
		// Week 	Matchup1	Matchup2	Matchup3	Matchup4
		1 => array(	'0-6',		'4-5',		'1-3',		'2-7'),
		2 => array(	'0-2',		'4-6',		'3-5',		'1-7'),
		3 => array(	'0-1',		'3-4',		'2-6',		'5-7'),
		4 => array(	'0-5',		'2-4',		'3-7',		'1-6'),
		5 => array(	'0-3',		'4-7',		'1-2',		'5-6'),
		6 => array(	'0-7',		'1-4',		'2-5',		'3-6'),
		7 => array(	'0-4',		'1-5',		'6-7',		'2-3'),
		8 => array(	'0-2',		'4-6',		'3-5',		'1-6'),
		9 => array(	'0-1',		'3-6',		'2-4',		'5-7')
		);

$pro_matches[3] = array (
		1 => 2,
		2 => 2,
		3 => 2,
		4 => 2,
		5 => 2,
		6 => 2,
		7 => 2,
		8 => 2,
		9 => 2,
);

$finished_splits = array(2, 2, 2, 2, 2, 2, 0, 0);

// END OF DATA ============================================================================================

define('ASC', 1);
define('DESC', 2);
$current_split = count($data);
$current_week = count($data[$current_split]);

/* Function for generating a table for a split
		Inputs:
		$split, split number
		$add_data, data not defined in the data section to be considered in the table week => player => score

		Outputs:
		$table, tabulated data field => player => value
*/
function generate_table ($split, $add_data = array())
{
	global $names,$data, $matchups, $pro_matches;

	// Merge data together
	$new_data = $data[$split];
	foreach ($add_data as $week=>$scores)
	{
		foreach ($scores as $player => $score)
		{
			$new_data[$week][$player] = $score;
		}
	}

	// Prepare table
	$table = array();
	foreach (array('splits', 'lasts', 'pos', 'rank', 'played', 'pro_played', 'wins', 'losses', 'draws', 'for', 'against') as $field)
	{
		for ($i=0; $i<8; $i++)
		{
			$table[$field][$i] = 0;
		}
	}

	foreach ($matchups[$split] as $week => $matches)
	{
		if (isset($new_data[$week]))
		{
			// Yay data
			$active_players = count($new_data[$week]);

			// Find out how many other people you would've beaten
			$flip = array_flip($new_data[$week]);	// Flip as ID's are what we need
			ksort($flip);							// Sort by keys
			
			$count = 0;
			foreach ($flip as $player)
			{
				$table['rank'][$player] += intval(round($count * 10000 / $active_players)); // Make a % as active players can change
				$count++;
			}

			// Matchup Info
			foreach ($matches as $match)
			{
				$people = explode('-', $match);

				// Victory/Tie conditions
				if ($new_data[$week][$people[0]] > $new_data[$week][$people[1]])
				{
					$table['wins'][$people[0]]++;
					$table['losses'][$people[1]]++;
				}
				elseif ($new_data[$week][$people[0]] == $new_data[$week][$people[1]])
				{
					$table['draws'][$people[0]]++;
					$table['draws'][$people[0]]++;
				}
				else
				{
					$table['losses'][$people[0]]++;
					$table['wins'][$people[1]]++;
				}

				// Accumulating points for/against
				$table['for'][$people[0]] += $new_data[$week][$people[0]];
				$table['for'][$people[1]] += $new_data[$week][$people[1]];
				$table['against'][$people[0]] += $new_data[$week][$people[1]];
				$table['against'][$people[1]] += $new_data[$week][$people[0]];

				// Accumulate matches played count
				$table['played'][$people[0]]++;
				$table['played'][$people[1]]++;
				$table['pro_played'][$people[0]] += $pro_matches[$split][$week];
				$table['pro_played'][$people[1]] += $pro_matches[$split][$week];
			}
		}
	}

	return $table;
}

/* Function to roll back data
		Inputs:
		$split, relevant split
		$week, last week to be included

		Output:
		$remove_data, data to be put into $add_data
*/
function generate_rollback($split, $week)
{
	global $pro_matches;

	$total = count($pro_matches[$split]);

	for ($i = $week+1; $i <= $total; $i++)
	{
		$remove_data[$i] = array(0, 0, 0, 0, 0, 0, 0, 0);
	}

	return (isset($remove_data)) ? $remove_data : array();
}

/* Function for sorting a provided table
		Inputs:
		$table, tabulated data from generate_table()
		$order_by, ordered array of the sorting criteria

		Outputs:
		$positions, new positions of each member player => position
*/
function sort_table ($table, $order_by=array('splits' => DESC, 'wins' => DESC, 'draws' => DESC, 'for' => DESC, 'against' => DESC, 'id' => ASC))
{
	// Sort out rankings
	$positions = array(0, 0, 0, 0, 0, 0, 0, 0);		// Highest position that can be obtained

	foreach ($order_by as $field => $ord)
	{
		$tied_num = array_count_values($positions);	// How many are tied for each position
		$tied = array_unique($positions);			// Each position
		foreach ($tied as $tie)
		{
			if ($tied_num[$tie] > 1)
			{
				// Still a tie to sort out

				// Grab relevant data from tied individuals
				$data = array();
				foreach ($positions as $player=>$position)
				{
					if ($position == $tie)
					{
						if ($field == 'id')
						{
							$data[$player] = $player;
						}
						elseif ($field != 'diff')
						{
							$data[$player] = $table[$field][$player];
						}
						else
						{
							$data[$player] = $table['for'][$player] - $table['against'][$player];
						}
					}
				}

				// Sort relevant data - one of those times SQL is so much prettier
				if ($ord == ASC)
				{
					asort($data);
				}
				else
				{
					arsort($data);
				}

				// Increase position counters based on this iteraction of search
				$same_data = array_count_values($data);
				$unique_data = array_unique($data);
				
				$counter = 0;
				
				foreach ($unique_data as $unique)
				{
					$players = array_keys($data, $unique);
					foreach ($players as $player)
					{
						$positions[$player] += $counter;
					}

					$counter += $same_data[$unique];
				}
			}
		}
	}

	return $positions;
}

/* Function for finding the rank of a player by a field
		Inputs:
		$table, tabulated data
		$player, player number
		$field, relevant field
		$order, which way to sort - is high or low good
*/
function find_rank($table, $player, $field, $order)
{
	$positions = sort_table($table, array($field => $order));
	return $positions[$player] + 1;
}

/* Locate all matchups
		Inputs
		$player1, $player2, relevant players

		Output
		$matchups, matchup arrays id => 1-player1 2-player2 3-promatches => score
*/
function get_matchups ($split, $player1, $player2) 
{
	global $data, $matchups, $pro_matches;

	$count = 0;

	$match_string1 = $player1 . "-" . $player2;
	$match_string2 = $player2 . "-" . $player1;

	$new_matchups = ($split == 0) ? $matchups : array($split => $matchups[$split]);

	foreach ($new_matchups as $split => $split_matchups)
	{
		foreach ($split_matchups as $week => $week_matchups)
		{
			foreach ($week_matchups as $key => $matchup)
			{
				if (($matchup == $match_string1) || ($matchup == $match_string2))
				{
					if (isset($data[$split][$week][$player1]) && isset($data[$split][$week][$player2]))
					{
						$g_matchups[$count][1] = $data[$split][$week][$player1];
						$g_matchups[$count][2] = $data[$split][$week][$player2];
						$g_matchups[$count][3] = $pro_matches[$split][$week];

						$count++;
					}
				}
			}
		}
	}

	return ((isset($g_matchups)) ? $g_matchups : FALSE);
}

/* Find matchup wins
		Inputs 
		$g_matchups, from get_matchups

		Outputs
		$results, wins for player 1, ties, wins for player 2
*/
function matchup_wins ($g_matchups)
{
	$wins = 0;
	$ties = 0;
	$loss = 0;

	foreach ($g_matchups as $matchup)
	{
		if ($matchup[1] > $matchup[2])
		{
			$wins++;
		}
		elseif ($matchup[1] == $matchup[2])
		{
			$ties++;
		}
		else
		{
			$loss++;
		}
	}

	return array($wins, $ties, $loss);
}

/* Function to change number base
		Inputs:
		$number, number to change
		$from, current base system
		$to, new base system
		$length, length of string

		Output:
		converted string
*/
function change_base($number, $from, $to, $length)
{
	$new_string = strval(base_convert($number, $from, $to));
	$numbers = strlen($new_string);
	for ($a = 0; $a < ($length - $numbers); $a++)
	{
		$new_string = "0" . $new_string;
	}

	return $new_string;
}

/* Function to find the probability of finishing in each position
*/
function finishing_probability ($s_split = 0, $s_week = 0)
{
	global $matchups, $pro_matches, $current_week, $current_split;

	$s_week = ($s_week == 0) ? $current_week : $s_week;
	$s_split = ($s_split == 0) ? $current_split : $s_split;
	$weeks = count($pro_matches[$current_split]) - $s_week;

	// Find current table
	$table = generate_table($s_split, generate_rollback($s_split, $s_week));

	$wins = array();
	for ($i = 0; $i < 8; $i++)
	{
		for ($j = 0; $j <8; $j++)
		{
			$sum[$i][$j] = 0;
		}
	}

	$matchups_involved = count($matchups[$s_split][$s_week]);
	
	if ($weeks > 0)
	{	
		$w = $s_week;
		for ($total = 0; $total < pow(pow(2, $matchups_involved), $weeks); $total++)
		{
			for ($i = 0; $i < 8; $i++)
			{
				$wins[$i] = $table['wins'][$i];
				if ($matchups_involved*2 <= $i)
				{
					$wins[$i] = -1;
				}
			}

			if (($i % 3) == 0)
			{
				$w++;
			}
			$total2 = $total;
			for ($i = 0; $i < ($matchups_involved * $weeks); $i++)
			{
				$winner = ($total2 & 1) ? 0 : 1;

				$players = explode('-', $matchups[$s_split][$w][$i % 3]);
				$wins[$players[$winner]]++;

				$total2 = floor($total2 / 2);
			}
			
			arsort($wins);
			$counts = array_count_values($wins);
			$unique = array_unique($wins);
			$pos = 0;
			foreach ($unique as $win)
			{
				$found = array_keys($wins, $win);
				for ($j = 0; $j < count($found); $j++)
				{
					for ($i = 0; $i < $counts[$win]; $i++)
					{
						$sum[$found[$j]][$pos+$i] += 1 / $counts[$win];
					}
				}
				$pos += $counts[$win];
			}
		}

		if ($total > 0)
		{
			foreach ($sum as $id1 => $key1)
			{
				foreach ($key1 as $id2 => $key2)
				{
					$sum[$id1][$id2] = round($key2 / $total * 100, 2);
				}
			}
		}
	}
	else
	{
		$positions = sort_table(generate_table($s_split));
		foreach ($positions as $player => $position)
		{
			$sum[$player][$position] = 100;
		}
	}
	return $sum;
}

function find_elo()
{
	global $data, $matchups, $names;

	$elo = array();

	$default = 1200;

	$K = 25;

	$correct_prediction = 0;


	foreach ($names as $id => $name)
	{
			$elo[$id] = $default;
	}

	foreach ($matchups as $split => $s_matchup)
	{
		foreach ($s_matchup as $week => $w_matchup)
		{
			foreach ($w_matchup as $id => $matchup)
			{
				$people = split('-', $matchup);

				$expectation = 1 / (1 + pow(10, ($elo[$people[1]] - $elo[$people[0]])/400));

				if (isset($data[$split][$week][$people[0]]) && isset($data[$split][$week][$people[1]]))
				{
					$score = array($data[$split][$week][$people[0]], $data[$split][$week][$people[1]]);

					if (($score[0] > 0) && ($score[1] > 0))
					{
						// Match played
						$result = ($score[0] > $score[1]) ? array(1, 0) : (($score[0] < $score[1]) ? array(0,1) : array(0.5, 0.5));

						$elo[$people[0]] += intval($K * ($result[0] - $expectation));
						$elo[$people[1]] += intval($K * ($result[1] - (1 - $expectation)));
					}	
				}
			}
		}
	}	

	return $elo;
}

// Output Page


$ui_split = (isset($_GET['split'])) ? $_GET['split'] : 0;

$display = array('table', 'matchups', '#', 'fc', 'percent', 'match', 'for', 'against', 'pd');
$display_text = array('Table', 'Matchups', 'Title Race', 'Finishing Combinations', 'Percentiles', 'Match Percentiles', 'Points For Chart', 'Points Against Chart', 'Points Difference Chart');

$ui_display = (isset($_GET['display'])) ? (in_array($_GET['display'], $display) ? $_GET['display'] : 'table') : 'table';


?>

<html>
<head>
	<title>Fantasy LCS - Salt Factory</title>

	<style>
		html, body {
			width:99%;
			height: 100%;
			margin: 0px;
			border: 0px;
			padding: 0px;	
		}
		.menu {
			width:100%;
			margin: 2px;
			display:block;
			float:left;
		}
		.menu_desc {
			width: 100px;
			font-weight: bold;
			float:left;
			padding: 3px;
			padding-left: 10px;
			padding-right: 10px;
			display: block;
			border: 1px none black;
		}
		.menu_option, .menu_option_selected {
			padding: 3px;
			float:left;
			display: block;
			border: 1px none black;
			padding-left: 10px;
			padding-right: 10px;
		}
		a:link, a:visited, a:active {
			color: #000000;
			text-decoration: none;
		}
		a:hover {
			color: #000000;
			text-decoration:underline;
		}
		.menu_option_selected {
			border: 1px solid black;
		}
		.detail {
			font-size: 80%;
		}
		p {
			margin: 0px;
			border: 0px;
			padding: 0px;
			padding-left: 10px;
		}

		.split {
			width: 30%;
			padding: 3px;
			float:left;
			display: block;
			border: 1px none black;
			padding-left: 10px;
			padding-right: 10px;
		}
	</style>

	<script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
		google.load('visualization', '1', {packages: ['corechart', 'line']});
		google.setOnLoadCallback(drawCurveTypes);

		function drawCurveTypes() 
		{
				<?php
				if (($ui_display == 'for') || ($ui_display == 'against') || ($ui_display == 'pd'))
				{
					echo '		var data = google.visualization.arrayToDataTable([
					          	["Week", "Chu", "Sam", "Cody", "Toj", "Scott", "Jimmy", "Chris", "Bot"],';
					$draw = true;
					if ($ui_split == 0)
					{
						$new_data = array();
						$new_matchups = array();
						$count = 0;
						foreach ($data as $split => $week)
						{
							foreach ($week as $num => $scores)
							{
								foreach ($scores as $person => $score)
								{
									$new_data[$count][$person] = $score;
								}

								foreach ($matchups[$split][$num] as $id => $match)
								{
									$new_matchups[$count][$id] = $match;
								}

								$new_label[$count] = "S" . $split . " W" . $num;

								$count++;
							}
						}
					}
					else
					{
						$new_data = $data[$ui_split];
						$new_matchups = $matchups[$ui_split];
						$count = count($new_data);
					}

					$cumul = array(0, 0, 0, 0, 0, 0, 0, 0);

					foreach ($new_data as $id => $info)
					{
						$sign = 1;
						if ($ui_display == 'for')	
						{
							foreach ($info as $pid => $score)
							{
								$cumul[$pid] += $score / 100;
							}
						}
						else
						{
							foreach ($new_matchups[$id] as $mid => $match)
							{
								$people = explode("-", $match);

								$cumul[$people[0]] += $new_data[$id][$people[1]] / 100;
								$cumul[$people[1]] += $new_data[$id][$people[0]] / 100;
								
								if ($ui_display == 'pd')
								{
									$cumul[$people[0]] -= $new_data[$id][$people[0]] / 100;
									$cumul[$people[1]] -= $new_data[$id][$people[1]] / 100;
									$sign = -1;
								}
							}
						}

						echo '[';

						if ($ui_split == 0)
						{
							echo '"' . $new_label[$id] . '"';
						}
						else
						{
							echo '"'. $id . '"';
						}

						foreach ($cumul as $pid => $score)
						{
							if (($ui_split < 3) || ($ui_split == 0 && $id <= 20))
							{
								$cumul[6] = 0;
								$cumul[7] = 0;

								$cumul[6] = array_sum($cumul) / 6;
								$cumul[7] = array_sum($cumul) / 7;
							}
							
							echo ',' . $sign * round($cumul[$pid] - array_sum($cumul) / 8,2);
						}

						echo ']';

						if ($id < $count)
						{
							echo ',';
							echo "\n";
						}
					}
				}
				else
				{
					$draw = false;
				}

				$scatter = false;
			    if ($ui_display == 'percent' || $ui_display == 'match')
				{
					$scatter = true;

					if ($ui_split == 0)
					{
						$data2 = $data;
					}
					else
					{
						$data2 = array($ui_split => $data[$ui_split]);
					}

					foreach ($data2 as $split => $splitdata)
					{
						foreach ($splitdata as $week => $playerdata)
						{

							if ($ui_display == 'percent')
							{
								foreach ($playerdata as $player => $score)
								{
									$points[] = $score / $pro_matches[$split][$week];
								}
							}
							else
							{
								foreach ($matchups[$split][$week] as $id => $match)
								{
									$people = explode("-", $match);
									$points[] = abs($playerdata[$people[0]] - $playerdata[$people[1]]) / $pro_matches[$split][$week];
								}
							}
						}
					}

					$mean = array_sum($points) / count($points);

					$distance = array();
					foreach ($points as $id => $point)
					{
						$distance[$id] = pow($point - $mean,2);
					}

					$variance = array_sum($distance) / count($points);
					$max_distance = ceil(sqrt(max($distance)/$variance)*100)/100;

					sort($points);
					echo 'var data = new google.visualization.DataTable();';
					echo "data.addColumn('number', 'Score');\n";

					if ($ui_display == 'percent')
					{
						echo "data.addColumn('number', 'Chu');\n";
						echo "data.addColumn('number', 'Sam');\n";
						echo "data.addColumn('number', 'Cody');\n";
						echo "data.addColumn('number', 'Toj');\n";
						echo "data.addColumn('number', 'Scott');\n";
						echo "data.addColumn('number', 'Jimmy');\n";
						echo "data.addColumn('number', 'Chris');\n";
						echo "data.addColumn('number', 'Bot');\n";
						$col = 8;
					}
					else
					{
						$col = 0;
						foreach ($names as $id => $player)
						{
							foreach ($names as $id2 => $player2)
							{
								if ($id < $id2)
								{
									echo "data.addColumn('number', '" . $player . "-" . $player2 . "');\n";
									$col++;
								}
							}
						}
					}

					echo "\n";
					echo 'data.addRows([';

					$counter = 0;

					function print_point ($id, $x, $y, $normalise_x = true)
					{
						global $col, $mean, $variance, $points, $counter;

						$text = array();
						for ($i = 0; $i < $col; $i++)
						{
							$text[$i] = 'undefined';
						}
						
						$text[$id] = round($y, 5);
						
						echo '[';

						if ($normalise_x)
						{
							echo round(($x - $mean) / sqrt($variance), 2);
						}
						else
						{
							echo round($x)/100;
						}

						foreach ($text as $word)
						{
							echo ',' . $word;
						}

						echo ']';

						$counter++;

						if ($counter < count($points))
						{
							echo ',';
						}
					}

					foreach ($data2 as $split => $splitdata)
					{
						foreach ($splitdata as $week => $playerdata)
						{
							if ($ui_display == 'percent')
							{
								foreach ($playerdata as $player => $score)
								{
									print_point($player, $score/$pro_matches[$split][$week], array_search($score / $pro_matches[$split][$week], $points) / (count($points)-1));
								}
							}
							else
							{
								foreach ($matchups[$split][$week] as $id => $match)
								{
									$people = explode("-", $match);
									sort($people);

									$x = 0;
									for ($i = 0; $i < $people[0]; $i++)
									{
										$x = $x + 7 - $i;
									}
									$x = $x + $people[1] - $people[0] - 1;

									$score = abs($playerdata[$people[0]] - $playerdata[$people[1]]);

									print_point($x, $score/$pro_matches[$split][$week], array_search($score / $pro_matches[$split][$week], $points) / (count($points)-1), false);
								}
							}
						}
					}				
				}	
			echo '			]);';

			if ($draw)
			{
				echo "
				var options = {
				legend: {
					position: 'bottom'
				},
				hAxis: {
					title: 'Week'
				},
				vAxis: {
					title: 'Relative Score to Moving Average'
				},


				};

			
				var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
				chart.draw(data, options);
				";
			}
			elseif ($scatter)
			{

				echo "var options = {";

				if ($ui_display == 'percent')
				{
			    	echo " 	
			          	hAxis: {title: 'Standard Deviation: " . round(sqrt($variance),2) . " (Normalised Mean: " . round(sqrt($mean),2) . ")', viewWindowMode: 'explicit', viewWindow: {min: " . -$max_distance . ", max: " . $max_distance . "}},";
				}
				else
				{
					echo " 	
			          	hAxis: {title: 'Normalised Win Margin', viewWindowMode: 'explicit', viewWindow: {min: 0}},";
				}				          	

				echo "
			          	vAxis: {title: 'CDF'},
			          	legend: 'bottom',
       	               'chartArea': {'width': '90%', 'height': '60%'}

			       		};

			        	var chart = new google.visualization.ScatterChart(document.getElementById('chart_div'));

			        	chart.draw(data, options);";
			}
			?>
      	}

    </script>

</head>

<body>
	<h1><?php echo ($split_names[$ui_split] . ' - ' . $display_text[array_search($ui_display, $display)]); ?> </h1>
	<div class="menu">
		<span class="menu_desc">Split:</span>

		<?php

		foreach ($split_names as $id=>$split_name)
		{
			if ($id == $ui_split)
			{
				$selected = '_selected';
			}
			else
			{
				$selected = '';
			}
			echo ('		<span class="menu_option' . $selected . '"><a href="?split=' . $id . '&display=' . $ui_display . '">' . $split_name . '</a></span>');
			echo ("\n");
		}

		?>

	</div>

	<div class="menu">
		<div class="menu_desc">Display:</div>

		<?php


		foreach ($display as $id=>$display_link)
		{
			if ($display_link == $ui_display)
			{
				$selected = '_selected';
			}
			else
			{
				$selected = '';
			}
			echo ('		<div class="menu_option' . $selected . '"><a href="?split=' . $ui_split . '&display=' . $display_link . '">' . $display_text[$id] . '</a></div>');
			echo ("\n");
		}

		?>
	</div>

	<div class="menu">

	<?php

	if ($ui_display == 'table')
	{
		if ($ui_split > 0)
		{
			$table = generate_table($ui_split);
			$positions = sort_table($table);
			$tot_splits = 1;
			$table['splits'][array_search(0, $positions)]++;

			$last = ($ui_split <= 2) ? 6 : 8;
			$table['lasts'][array_search($last - 1, $positions)]++;

			foreach ($positions as $player => $pos)
			{
				if (($ui_split <= 2 && $player <= 6) || $ui_split >= 3)
				{
					$table['pos'][$player] = $pos + 1;
				}
			}
		}
		else
		{
			$table = generate_table(1);
			$positions = sort_table($table);

			$table['splits'][array_search(0, $positions)]++;
			$last = 6;
			$table['lasts'][array_search($last - 1, $positions)]++;		

			foreach ($positions as $player => $pos)
			{
				if ($player <= 6)
				{
					$table['pos'][$player] = $pos + 1;
				}
			}

			$i = 2;
			for ($i = 2; ($i <= count($split_names)-1); $i++)
			{
				$table_i = generate_table($i);
				$positions = sort_table($table_i);
				$table_i['splits'][array_search(0, $positions)]++;

				$last = ($i <= 2) ? 6 : 8;
				$table_i['lasts'][array_search($last - 1, $positions)]++;		

				foreach ($positions as $player => $pos)
				{
					if (($i == 2 && $player <= 6) || $i >= 3)
					{
						$table_i['pos'][$player] = $pos + 1;
					}
				}

				// Combine
				foreach ($table_i as $field => $player)
				{
					foreach ($player as $id => $value)
					{
						$table[$field][$id] = $table[$field][$id] + $value;
					}
				}
			}
			$tot_splits = count($split_names) - 1;
		}

		foreach ($names as $id => $name)
		{
			if ($table['wins'][$id] > 0)
			{
				$table['win_ratio'][$id] = intval(round($table['wins'][$id] * 10000 / ($table['draws'][$id] + $table['losses'][$id] + $table['wins'][$id])));
			}
			else
			{
				$table['win_ratio'][$id] = 0;
			}

			if ($table['played'][$id] > 0)
			{
				$table['rank'][$id] = intval(round($table['rank'][$id] / $table['played'][$id]));
			}
			else
			{
				$table['rank'][$id] = 0;
			}

			if ($finished_splits[$id] > 0)
			{
				if ($ui_split == 0)
				{
					$table['pos'][$id] = intval(round($table['pos'][$id] / $finished_splits[$id] * 100));
				}
				else
				{
					$table['pos'][$id] = intval($table['pos'][$id]*100);
				}
			}
			else
			{
				$table['pos'][$id] = 700;
			}

			$table['for'][$id] = intval(round($table['for'][$id] / $tot_splits));
			$table['against'][$id] = intval(round($table['against'][$id] / $tot_splits));

		}

		$table['elo'] = find_elo();
		$positions = sort_table($table, array('splits' => DESC, 'win_ratio' => DESC, 'draws' => DESC, 'for' => DESC, 'against' => DESC, 'id' => ASC));

		// Draw
		echo '<table style="width:100%; text-align: center;">';
		asort($positions);

		$positions = array_flip($positions);

		echo "\n";
		echo '<tr><td style="width:15%">Name</td>';
		echo ($ui_split == 0) ? '<td style="width:5%">Splits</td><td style="width:5%">Lasts</td>' : '';
		echo ($ui_split == 0) ? '<td style="width:5%">Avg.Finish</td>' : '<td style="width:5%">Pos</td>';
		echo '<td style="width:5%">Win %</td><td style="width:5%">W-T-L</td><td style="width:5%">F</td><td style="width:5%">A</td><td style="width:5%">PD</td><td style="width:5%">Rank (%)</td><td style="width:5%">ELO</td></tr>';
		echo "\n";

		foreach ($positions as $position=>$player)
		{
			echo sprintf("<tr><td>%s</td>", $names[$player]);
			echo ($ui_split == 0) ? sprintf("<td>%d (%d)</td>", $table['splits'][$player], find_rank($table, $player, 'splits', DESC)) : '';
			echo ($ui_split == 0) ? sprintf("<td>%d (%d)</td>", $table['lasts'][$player], find_rank($table, $player, 'lasts', ASC)) : '';
			echo sprintf("<td>%s (%d)</td>", $table['pos'][$player]/100, find_rank($table, $player, 'pos', ASC));
			echo sprintf("<td>%s (%d)</td>", $table['win_ratio'][$player]/100, find_rank($table, $player, 'win_ratio', DESC));
			echo sprintf("<td>%d-%d-%d (%d)</td>", $table['wins'][$player], $table['draws'][$player], $table['losses'][$player], find_rank($table, $player, 'wins', DESC));
			echo sprintf("<td>%s (%d)</td>",  $table['for'][$player] / 100, find_rank($table, $player, 'for', DESC));
			echo sprintf("<td>%s (%d)</td>",$table['against'][$player]/100, find_rank($table, $player, 'against', DESC));
			echo sprintf("<td>%s (%d)</td>", ($table['for'][$player] - $table['against'][$player])/100, find_rank($table, $player, 'diff', DESC));
			echo sprintf("<td>%s (%d)</td>", $table['rank'][$player] / 100, find_rank($table, $player, 'rank', DESC));
			echo sprintf("<td>%s (%d)</td></tr>", $table['elo'][$player], find_rank($table, $player, 'elo', DESC));
			echo "\n";
		}

		echo '</table>';

		echo "\n<br /><p><b>W-T-L</b> Wins, Ties and Losses\n<br />
				<b>F</b> Points Scored (For) /Split\n<br />
				<b>A</b> Points Scored by matchup opponents (Against) /Split\n<br />
				<b>PD</b> Difference between points for and against\n<br />
				<b>Rank</b> % of teams you would have beaten each week (i.e. 100 for highest score, 0 for lower score)\n<br />
				<b>(No)</b> Indicates team's ranking in table if measured by this field\n";

	}
	elseif ($ui_display == 'matchups')
	{
		echo '<p>Each box shows the matchup record between the player on the left against the player above the box. <br />The top line is the Win-Tie-Loss record and below is each individual record. <br />Bold indicates the winner. (4) indicates 4 pro matches were played by each team<br></br>';
		echo '<table style="width:100%; text-align:center">';
		echo '<tr><td style="width:11%"> Home \ Away</td>';
		foreach ($names as $id => $name)
		{
			echo '<td style="width:11%">' . $name . '</td>';
		}
		echo '</tr';

		echo "\n";

		foreach ($names as $id1 => $name1)
		{
			echo '<tr><td style="width:11%">' . $name1 . '</td>';

			foreach ($names as $id2 => $name2)
			{
				$g_matchups = get_matchups($ui_split, $id1, $id2);
				if ($g_matchups != FALSE)
				{
					$g_scores = matchup_wins($g_matchups);

					echo '<td style="width:11%">';
					echo '<p>';
					echo sprintf('%d, %d, %d', $g_scores[0], $g_scores[1], $g_scores[2]);
					echo '</p>';
					echo '<p class="detail">';
					foreach ($g_matchups as $i => $matchup)
					{
						if ($matchup[1] > $matchup[2])
						{
							echo sprintf('<b>%s</b> - %s (%d)<br />', $matchup[1] / 100, $matchup[2] / 100, $matchup[3]);
						}
						elseif ($matchup[1] < $matchup[2])
						{
							echo sprintf('%s - <b>%s</b> (%d)<br />', $matchup[1] / 100, $matchup[2] / 100, $matchup[3]);
						}
						else
						{
							echo sprintf('%s - %s (%d)<br />', $matchup[1] / 100, $matchup[2] / 100, $matchup[3]);
						}
					}
					echo '</p></td>';
				}
				else
				{
					echo '<td></td>';
				}
			}

			echo '</tr>';
			echo "\n";
		}

		echo '</table>';
	}
	elseif ($ui_display == 'fc')
	{
		$sum = finishing_probability($ui_split, 0);
		echo '<table style="width: 100%; text-align: center"><tr><td style="width:15%">Name</td><td style="width:5%">1st</td><td style="width:5%">2nd</td><td style="width:5%">3rd</td><td style="width:5%">4th</td><td style="width:5%">5th</td><td style="width:5%">6th</td><td style="width:5%">7th</td><td style="width:5%">8th</td></tr>';

		foreach ($sum as $player => $position_a)
		{
			echo '<tr><td>' . $names[$player] . '</td>';
			foreach ($position_a as $position => $count)
			{
				echo '<td>' . $count . '</td>';
			}
			echo '</tr>';
		}
	}
	?>

	</div>

	<?php
	if ($draw || $scatter)
	{
		$height = ($draw) ? 70 : 50;
		echo '
	<div class="menu" style="width:100%; height:' . $height . '%; padding: 0px; margin: 0px; text-align:center;" id="chart_div"></div>
	';
	}


	if ($ui_display == 'percent' || $ui_display == 'match')
	{
		$top = array("", "", "", "", "", "", "", "");
		$bottom = array("", "", "", "", "", "", "", "");

		function add_text($id, $split, $week, $name, $score)
		{
			global $top, $bottom, $pro_matches, $points;

			if (($id < 8))
			{
				$bottom[$id] = "<td>" . ($score/100) . "</td><td><i>(x" . $pro_matches[$split][$week] . ")</i></td><td>" . $name . "</td><td><i>S" . $split . " W" . $week . "</i></td>";
			}
			elseif (count($points) - $id - 1 < 8)
			{
				$top[count($points)- $id - 1] = "<td>" . ($score/100) . "</td><td><i>(x" . $pro_matches[$split][$week] . ")</i></td><td>" . $name . "</td><td><i>S" . $split . " W" . $week . "</i></td>";
			}
		}

		$cdf = array(0, 0, 0, 0, 0, 0, 0, 0);
		$cdf_sum = array(0, 0, 0, 0, 0, 0, 0, 0);

		if ($ui_split == 0)
		{
			$data2 = $data;
		}
		else
		{
			$data2 = array($ui_split => $data[$ui_split]);
		}

		foreach ($data2 as $split => $splitdata)
		{
			foreach ($splitdata as $week => $playerdata)
			{

				if ($ui_display == 'percent')
				{
					foreach ($playerdata as $player => $scorea)
					{
						$score = $scorea / $pro_matches[$split][$week];
						$id = array_search($score, $points);
						$name = $names[$player];

						add_text($id, $split, $week, $name, $score);

						$cdf[$player] += $id / (count($points) - 1);
						$cdf_sum[$player]++;
					}
				}
				else
				{
					foreach ($matchups[$split][$week] as $id => $match)
					{
						$people = explode("-", $match);
						$score = abs($playerdata[$people[0]] - $playerdata[$people[1]]) / $pro_matches[$split][$week];

						$id = array_search($score, $points);

						if ($playerdata[$people[0]] >= $playerdata[$people[1]])
						{
							$name = "<b>" . $names[$people[0]] . "</b> - " . $names[$people[1]];
						}
						else
						{
							$name = "<b>" . $names[$people[1]] . "</b> - " . $names[$people[0]];
						}

						add_text($id, $split, $week, $name, $score);
					}
				}


			}
		}

		echo '<div class="split"><b>';

		if ($ui_display == 'percent')
		{
			echo 'Best 8:<br />';
		}
		else
		{
			echo 'Biggest 8 Wins:<br />';
		}
		echo '</b><table>';

		foreach ($top as $rank => $text)
		{
			echo "<tr><td>(" . ($rank+1) . ")</td>" . $text . "</tr>";
		}

		echo '</table></div>';

		echo '<div class="split"><b>';

		if ($ui_display == 'percent')
		{
			echo 'Worst 8:<br />';
		}
		else
		{
			echo 'Closest 8 Wins:<br />';
		}
		echo '</b><table>';

		foreach ($bottom as $rank => $text)
		{
			echo "<tr><td>(" . ($rank+1) . ")</td>" . $text . "</tr>";
		}

		echo '</table></div>';

		if ($ui_display == 'percent')
		{
			echo '<div class="split">';
			echo '<b>Average Percentile:</b><br /><table>';

			foreach ($names as $pid => $player)
			{
				if ($cdf_sum[$pid] > 0)
				{
					$cdf[$pid] = $cdf[$pid] / $cdf_sum[$pid];
				}
			}

			arsort($cdf);

			$count = 1;
			foreach ($cdf as $pid => $exp)
			{
				echo '<tr><td>(' . $count . ')</td><td>' . (round($exp,4)*100) . ' ' . $names[$pid] . '</td></tr>';
				$count++;
			}
			echo '</table></div>';
		}
	}
	?>

</body>
</html>

