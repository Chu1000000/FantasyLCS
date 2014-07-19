<?php

function added_players ()
{
	$added_players = array();
	if (isset($_GET['p']))
	{
		$added_players = $_GET['p'];
	}

	if (isset($_POST['add_box']))
	{
		foreach ($_POST['add_box'] as $add)
		{
			$add = split('_', $add);

			if ($add[0] == 'p')
			{
				$added_players[] = $add[1];
			}
		}
	}

	return array_unique($added_players);
}
$added_players = added_players();

function added_teams ()
{
	$added_teams = array();
	if (isset($_GET['t']))
	{
		$added_teams = $_GET['t'];
	}

	if (isset($_POST['add_box']))
	{
		foreach ($_POST['add_box'] as $add)
		{
			$add = split('_', $add);

			if ($add[0] == 't')
			{
				$added_teams[] = $add[1];
			}
		}
	}

	return array_unique($added_teams);
}
$added_teams = added_teams();

function active_get($remove_p = null, $remove_t = null, $prepend = null)
{
	$active_get = '';
	$remove_p = (isset($remove_p)) ? explode(',', $remove_p) : array();
	$remove_t = (isset($remove_t)) ? explode(',', $remove_t) : array();

	global $added_players, $added_teams;

	foreach ($added_players as $get)
	{
		if (!in_array($get, $remove_p))
		{
			if ($active_get != '' || isset($prepend))
			{
				$active_get .= '&';
			}
			$active_get .= 'p[]=' . $get;
		}
	}

	foreach ($added_teams as $get)
	{
		if (!in_array($get, $remove_t))
		{
			if ($active_get != '' || isset($prepend))
			{
				$active_get .= '&';
			}
			$active_get .= 't[]=' . $get;
		}
	}

	if (isset($_GET['week']))
	{
		
		$active_get .= '&week=' . $_GET['week'];
	}	

	return $active_get;
}

$active_get = active_get();

?>