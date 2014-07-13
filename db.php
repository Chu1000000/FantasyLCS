<?php

/***
	Database Interface

	@project LoL Fantasy LCS
	@author A.Chu
	@date July-2014
**/
$root = (isset($root)) ? $root : '';

// Connect to knowledge source
include_once($root . 'constants.php');
include_once($root .'db/db_cfg.php');
$db = new mysqli(DB_HOST, DB_USER, DB_PASSWORD);

if ($db->connect_errno) {
    echo "Failed to connect to MySQL: (" . $db->connect_errno . ") " . $db->connect_error;
}

$db->select_db('fantasy');

/***
	pseudo-API

	@project Don't kill jimmy's server
**/

// Query onto the database
function query ($query)
{
	global $db, $db_string_fields;

	$result = $db->query($query);

	if ($result == false)
	{
		echo "No data found for: \n" . $query;
		return false;
	}

	$rows = array();

	while ($row = $result->fetch_assoc())
	{
		foreach ($row as $field => $value)
		{
			// Let's make numbers actually numbers
			if (!in_array($field, $db_string_fields))
			{
				$row[$field] = intval($value);
			}
		}

		$rows[] = $row;
	}

	return $rows;
}

/***********************************************************************************************************************
	Lookup Functions
**/
function search_names($search = null)
{
	$query = 'SELECT id, name, 1 as type
				FROM player';

	if (isset($search))
	{
		$query .= " WHERE name LIKE '" . $search . "%'";
	}

	$query .= ' UNION
				SELECT id, name, 2 as type
				FROM team';

	if (isset($search))
	{
		$query .= " WHERE (name LIKE '" . $search . "%'
					OR acronym LIKE '" . $search . "%')";
	}

	$query .= '	ORDER BY name';


	return query($query);
}

// Who do i play for?
function player_team ($id)
{
	// Let's lookup all matchups that this player has played in. Get the two teams involved. 
	// Now clearly we can't distinguish which of the team the player played for
	// So let's run through all of the matches they have been involved with starting from the latest
	// Return once (threshold) matches have been found involving both this player and this team
	// Note: increase threshold if playoffs are occuring where multiple matches will be played between the same teams

	// Problems: 1 game sub can never be recognised, Changes take (threshold) games to register

	$threshold = 2;
	$query = 'SELECT team.id, team.name
				FROM `playerGame`

				INNER JOIN `game` ON game.id = playerGame.gameId 
				INNER JOIN `match` ON match.id = game.matchId
				INNER JOIN `team` ON (team.id = match.blueId OR team.id = match.redId)

				WHERE playerGame.playerId = ' . $id . '
				AND match.dateTime >= ' . SPLIT_START . '

				ORDER BY match.dateTime DESC
				LIMIT ' . ($threshold * 2);

	$search = query($query);
	$possible = array();

	foreach ($search as $no => $data)
	{
		if (!isset($possible[$data['id']]))
		{
			$possible[$data['id']] = 1;
		}
		else
		{
			$possible[$data['id']]++;

			if ( $possible[$data['id']] >= $threshold)
			{
				$id = $data['id'];
				break;
			}
		}

	}

	return (isset($id)) ? $id : false;
}

function player ($id)
{
	$query = 'SELECT * FROM player WHERE id=' . $id;
	$return = query($query);

	return $return[0];
}

function team ($id)
{
	$query = 'SELECT * FROM team WHERE id=' . $id;
	$return = query($query);

	return $return[0];
}

/***********************************************************************************************************************
	Data Processing
**/
// Get matchups for this week
function matchups ($home)
{
	$query = 'SELECT IF(match.blueId = ' . $home . ', match.redId, match.blueId) as `opponentId`,
				team.name

				FROM `match`
				INNER JOIN `team` ON  ((team.id = match.redId AND team.id <> ' . $home . ')
									OR ( team.id = match.blueId AND team.id <> ' . $home . '))
				WHERE 
				(
					match.blueId = ' . $home . '
					OR match.redId = ' . $home . '
				)
				AND match.dateTime BETWEEN ' . WEEK_START . ' AND ' . WEEK_END . '

				ORDER BY match.dateTime ASC';

	return query($query);
}


// Get match data between home and away - for teams
function previous_team_matches($home, $away = null)
{

	$query = 'SELECT match.dateTime as `dateTime`,
					IF (game.winnerId = ' . $home . ', 1, 0) as `victory`,
					teamGame.*
				FROM `teamGame`
				INNER JOIN `game` ON game.id = teamGame.gameId
				INNER JOIN `match` ON match.Id = game.matchId 

				WHERE teamGame.teamId = ' . $home;

	if (isset($away))
	{
		$query .= '
				AND 
				( 
					(match.blueId = ' . $home . ' AND match.redId = ' . $away . ')
					OR 
					(match.redId = ' . $home . ' AND match.blueId = ' . $away . ')
				)';
	
	}
	else
	{
		$query .= '
				AND 
				( 
					(match.blueId = ' . $home . ')
					OR 
					(match.redId = ' . $home . ')
				)';
	}
		$query .= '
				AND match.dateTime >= ' . SPLIT_START . '

				ORDER BY match.dateTime DESC

				LIMIT 10';

	return query($query);
}

// Get match data between home and away - for players
function previous_player_matches($player, $home, $away = null)
{

	$query = 'SELECT match.dateTime as `dateTime`,
					playerGame.*,
					IF (game.winnerId = ' . $home . ', 1, 0) as `victory`
					
				FROM `playerGame`
				INNER JOIN `game` ON game.id = playerGame.gameId
				INNER JOIN `match` ON match.Id = game.matchId 

				WHERE playerGame.playerId = ' . $player;

	if (isset($away))
	{
		$query .= '
				AND 
				( 
					(match.blueId = ' . $home . ' AND match.redId = ' . $away . ')
					OR 
					(match.redId = ' . $home . ' AND match.blueId = ' . $away . ')
				)';
	}
	else
	{
		$query .= '
				AND 
				( 
					(match.blueId = ' . $home . ')
					OR 
					(match.redId = ' . $home . ')
				)';
	}

		$query .= '
				AND match.dateTime >= ' . SPLIT_START . '

				ORDER BY match.dateTime DESC
				LIMIT 10';

	return query($query);
}



/*
echo '<pre>';

$team = player_team(281);
$matchups = matchups ($team);
foreach ($matchups as $id => $opp)
{
	var_dump(previous_player_matches(281, $team, $opp['opponentId']));
}

echo '</pre>';
*/
?>