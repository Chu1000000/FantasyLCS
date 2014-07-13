<?php

/***
	Front-End Interface

	@project LoL Fantasy LCS
	@author A.Chu
	@date July-2014
**/

$root = (isset($root)) ? $root : '';

include_once('active_get.php');
include_once('db.php');
include_once('constants.php');

$search = (isset($_GET['q'])) ? $_GET['q'] : null;
$results = search_names($search);
?>

<html>

<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="javascript.php"></script>

	<title>Fantasy LCS Nerd</title>
</head>

<body>

	<div class="column">
		<form id="search" method="get" action="?<?php echo $active_get; ?>">
			<input type="text" class="search_box" name="q" value="<?php echo (isset($_GET['q'])) ? $_GET['q'] : '' ?>" onkeyup="search(this.value<?php echo ($active_get != '') ? '+\'' . active_get(null, null, true) . '\'': ''; ?>)" />
			<input type="submit" class="search_button" value=">" />		
		<br />
		<div id="search_results">
			<?php
			echo "<select id='search_result_box' size=35 multiple=true class='search_result_list'>\n";

			foreach ($results as $result)
			{
				echo sprintf("<option class='search_result' onclick='add(\"%1\$s\",\"%2\$s\");' >%3\$s</option>\n", ($result['type'] == 1) ? 'p' : 't', $result['id'], $result['name']);
			}

			echo "</select>\n";
			?>
		</div>
		</form>
	</div>
	<a id="perma_link" href="<?php echo '?' . $active_get; ?>"><div id="perma">Perma: ?<span id="active_get"><?php echo $active_get; ?></span></div></a>

	<div id="data">
	<?php


	if (isset($_GET['p']))
	{
		foreach ($_GET['p'] as $player_id)
		{
			echo '<div class="row" id="p_' . $player_id . '">';
			include('lookup.php');
			echo '</div>';
		}
	}

	if (isset($_GET['t']))
	{		
		foreach ($_GET['t'] as $team_id)
		{
			echo '<div class="row" id="t_' . $team_id . '">';
			include('lookup.php');
			echo '</div>';
		}
	}
	?>

	</div>

</body>

</html>