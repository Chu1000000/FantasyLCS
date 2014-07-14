<?php

/***
	JowJow Fantasy LCS Table

	@project LoL Fantasy LCS
	@author A.Chu
	@date July-2014
**/

$weeks_complete = 8;
$data = array(
		// Week	 	Chu(0) 	Sam(1) 	Cody(2)	Toj(3) 	Scott(4)Jimmy(5)
		1 => array(40587,	45859,	38142,	49675,	42904,	47063),
		2 => array(20046,	18588,	20454,	21894,	19686,	20143),
		3 => array(28682,	23949,	21192,	24389,	21700,	20109),
		4 => array(21516,	12335,	12420,	23668,	21305,	20872),
		5 => array(21350,	19940,	20726,	24814,	26848,	25722),
		6 => array(21310,	23847,	25705,	21199,	18013,	23426),
		7 => array(46707,	51551,	50009,	45065,	39867,	47613),
		8 => array(18962,	27597,	16447,	15878,	16880,	26574)/*,
		9 => array(17035,	19960,	16447,	12320,	15358,	21075),
		10 => array(17035,	19960,	13463,	12320,	15358,	21075),
		11 => array(17035,	19960,	13463,	12320,	15358,	21075)*/
		);

$weeks_remaining = 11 - $weeks_complete;

// Fixed
$names = array('Chu', 'Sam', 'Cody', 'Toj', 'Scott', 'Jimmy');

$pro_matches = array (
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

$matchups = array(
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

// -------END OF DATA ---------------------------------------------------

// Function for generating the table
function generate_table ($add_data = array())
{
	global $data, $matchups;

	$new_data = $data;
	foreach ($add_data as $week=>$scores)
	{
		$new_data[$week] = $scores;
	}

	$table = array();
	foreach (array('rank', 'wins', 'losses', 'draws', 'for', 'against', 'rank') as $field)
	{
		for ($i=0; $i<6; $i++)
		{
			$table[$field][$i] = 0;
		}
	}
	$ranking = array();

	foreach ($matchups as $week => $matches)
	{
		if (isset($new_data[$week]))
		{
			// Yay data

			// Find out how many other people you would've beaten
			$flip = array_flip($new_data[$week]);	// Flip as ID's are what we need
			ksort($flip);							// Sort by keys
			$count = 0;
			foreach ($flip as $player)
			{
				$ranking[$week][$count] = $player;
				$table['rank'][$player] += $count;
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
			}
		}
	}

	return $table;
}

define('ASC', 1);
define('DESC', 2);

function sort_table ($table, $order_by=array('wins' => DESC, 'draws' => DESC, 'for' => DESC, 'against' => DESC))
{
	// Sort out rankings
	$positions = array(0, 0, 0, 0, 0, 0);		// Highest position that can be obtained

	foreach ($order_by as $field => $ord)
	{
		$tied_num = array_count_values($positions);	// How many are tied for each position
		$tied = array_unique($positions);
		foreach ($tied as $tie)
		{
			if ($tied_num[$tie] > 1)
			{
				// Still a tie to sort out
				$data = array();
				foreach ($positions as $player=>$position)
				{
					if ($position == $tie)
					{
						if ($field != 'diff')
						{
							$data[$player] = $table[$field][$player];
						}
						else
						{
							$data[$player] = $table['for'][$player] - $table['against'][$player];
						}
					}
				}

				// Sort data - one of those times SQL is so much prettier
				if ($ord == ASC)
				{
					asort($data);
				}
				else
				{
					arsort($data);
				}

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

// Yh... should've used oop
function find_rank($table, $player, $field, $order)
{
	$positions = sort_table($table, array($field => $order));
	return $positions[$player] + 1;
}

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

function draw_table($table)
{
	global $names;
	$positions = sort_table($table);

	// Draw
	echo '<table style="width:100%">';
	asort($positions);
	$positions = array_flip($positions);
	echo '<tr><td style="width:15%">Name</td><td style="width:5%">Pos</td><td style="width:5%">W-L</td><td style="width:5%">T</td><td style="width:5%">F</td><td style="width:5%">A</td><td style="width:5%">PD</td><td style="width:5%">Rank</td></tr>';
	foreach ($positions as $position=>$player)
	{
		echo sprintf("<tr><td>%s</td>", $names[$player]);
		echo sprintf("<td>%d</td>", $position+1);
		echo sprintf("<td>%d-%d (%d)</td>", $table['wins'][$player], $table['losses'][$player], find_rank($table, $player, 'wins', DESC));
		echo sprintf("<td>%d (%d)</td>", $table['draws'][$player], find_rank($table, $player, 'draws', DESC));
		echo sprintf("<td>%s (%d)</td>",  $table['for'][$player] / 100, find_rank($table, $player, 'for', DESC));
		echo sprintf("<td>%s (%d)</td>",$table['against'][$player]/100, find_rank($table, $player, 'against', ASC));
		echo sprintf("<td>%s (%d)</td>", ($table['for'][$player] - $table['against'][$player])/100, find_rank($table, $player, 'diff', DESC));
		echo sprintf("<td>%d (%d)</td></tr>", $table['rank'][$player], find_rank($table, $player, 'rank', DESC));
	}

	echo '</table>';
}
// ----------------------- PAGE -----------------------------
?>
<html>
<head>
	<title>Fantasy LCS</title>
</head>

<body>
<h2>Finishing Standings</h2>

<p>Walking through all possible combinations of the remaining matchups, the % probability of finishing in each position is given below (combinations that result in given position/all possible combinations):</p>

<p>
<?php

// Process all perturmations... 8^(weeks remaining)
$perms = array();
$total = pow(8, 11 - $weeks_complete);
for ($i = 0; $i < $total; $i++)
{
	$all_results = change_base($i, 10, 8, 11 - $weeks_complete);

	for ($week = 0; $week < strlen($all_results); $week++)
	{
		$perms[$i][$week + $weeks_complete + 1] = array(0,0,0,0,0,0);

		$week_results = change_base(substr($all_results, $week, 1), 8, 2, 3);
		$winner = array();
		for ($match = 0; $match < 3; $match++)
		{
			$winner[$match] = intval(substr($week_results, $match, 1));
			$players = explode('-', $matchups[$week+1][$match]);
			$perms[$i][$week + $weeks_complete + 1][$players[$winner[$match]]] = 100;
		}
	}
}
$total = count($perms);
for ($i = 0; $i < 6; $i++)
{
	for ($j = 0; $j <6; $j++)
	{
		$sum[$i][$j] = 0;
	}
}

foreach ($perms as $perm)
{
	$positions = sort_table(generate_table($perm), array('wins' => DESC));
	$counts = array_count_values($positions);
	$unique = array_unique($positions);
	foreach ($unique as $position)
	{
		$found = array_keys($positions, $position);
		for ($j = 0; $j < count($found); $j++)
		{
			for ($i = 0; $i < $counts[$position]; $i++)
			{
				$sum[$found[$j]][$position+$i] += 1 / $counts[$position];
			}
		}
	}
}

echo '<table style="width: 100%"><tr><td style="width:20%">Name</td><td style="width:5%">1st</td><td style="width:5%">2nd</td><td style="width:5%">3rd</td><td style="width:5%">4th</td><td style="width:5%">5th</td><td style="width:5%">6th</td></tr>';

foreach ($sum as $player => $position_a)
{
	echo '<tr><td>' . $names[$player] . '</td>';
	foreach ($position_a as $position => $count)
	{
		echo '<td>' . round($count / $total * 100, 2) . '</td>';
	}
	echo '</tr>';
}
?>

</table></p>

<h2>Fantasy LCS Table</h2>

<p>
<?php draw_table(generate_table()); ?>
</p>

<p>
<b>W-L</b> Wins and Losses<br />
<b>T</b> Ties<br />
<b>F</b> Total Points Scored (For)<br />
<b>A</b> Total points scored by matchup opponents (Against)<br />
<b>PD</b> Difference between points for and against<br />
<b>Rank</b> Number of teams you would have beaten each week (i.e. 5 for highest score, 0 for lower score)<br />
<b>(No)</b> Indicates team's ranking in table if measured by this field<br />
</p>

<?php
function graph($type, $data, $precision, $legend = '', $colours = '') // Min, Max, Step
{
	global $weeks_complete;

	$point = '';
	$min = 100;
	$max = 0;
	foreach ($data as $row)
	{
		$min = ($min >= min($row)) ? min($row) : $min;
		$max = ($max <= max($row)) ? max($row) : $max;
	}

	$bot = floor($min - $precision);
	$max = ceil($max + $precision);
	foreach ($data as $id=>$row) {
		$point .= ($id == 0) ? '' : '|';
	foreach ($row as $id=>$new)
	{
		$new = round(100 * ($new - $bot) / ($max - $bot),1);
		$point = ($id == 0) ? $point . $new : $point . ',' . $new;
	}}

	$legend = ($legend == '') ? '' : '&chdlp=b&chdl=' . $legend;
	$colours = ($colours == '') ? '' : '&chco=' . $colours;

	$x_axis = '1,' . $weeks_complete . ',1';
	$y_axis = $bot . ',' . $max . ',' . $precision;
	
	echo '<img src="https://chart.googleapis.com/chart?cht=' . $type . '&chg=' . round((100 / 6),1) . ',' . round((100/($max - $bot) * $precision * 2),1) . '&chs=400x250&chd=t:' . $point . '&chxt=x,y'  . $colours . $legend . '&chxr=0,' . $x_axis . '|1,' . $y_axis . '" />';
}
?>

<h2>Graphs</h2>
<?php 	

foreach ($data as $week=>$scores)
{
	$new = round(array_sum($scores) / (100 * 7 * 6 * $pro_matches[$week]),2);
	$avg_array[] = $new;
}

echo '<div><h3>Average Points per matches played (Avg:' . (array_sum($avg_array) / $weeks_complete) . ')</h3>';

graph('lc', array($avg_array), 0.25);

echo '</div>';

$total = 0;
$matches = 0;
foreach ($data as $week=>$scores)
{
	$matches += $pro_matches[$week];
	$total += array_sum($scores);

	for ($i=0; $i < 6; $i++)
	{
	$pts_array[$i][$week-1] = 0;
	for ($j=0; $j < $week; $j++)
	{
		$pts_array[$i][$week - 1] += $data[$j+1][$i];
	}
	$go_array[$i][$week - 1] = round(($pts_array[$i][$week - 1] - ($total / 6)) / $matches / 7 / 100, 2);

	}
}
echo '<div><h3>Total Point Comparison to Average</h3>';

graph('lc', $go_array, 0.5, 'Chu|Sam|Cody|Toj|Scott|Jimmy', 'FF0000,00FF00,0000FF,FFFF00,FF00FF,00FFFF');

echo '</div>';



?>
</body>
</html>