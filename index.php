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

$search = (isset($_POST['q'])) ? $_POST['q'] : null;
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
		<form id="search" method="post" action="?<?php echo $active_get; ?>">
			<input type="text" class="search_box" name="q" value="<?php echo (isset($_POST['q'])) ? $_POST['q'] : '' ?>" onkeyup="search(this.value)" />
			<input type="submit" class="search_button" value="Search / Add >>" />		
		<br />
		<div id="search_results">
			<?php
			echo "<select id='add_box' name='search_result_box' size=35 multiple=true class='search_result_list'>\n";

			foreach ($results as $result)
			{
				echo sprintf("<option value='%1\$s_%2\$s' class='search_result' onclick='add(\"%1\$s\",\"%2\$s\");' >%3\$s</option>\n", ($result['type'] == 1) ? 'p' : 't', $result['id'], $result['name']);
			}

			echo "</select>\n";
			?>
		</div>
		</form>
	</div>
	<a id="perma_link" href="<?php echo '?' . $active_get; ?>"><div id="perma">Perma: ?<span id="active_get"><?php echo $active_get; ?></span></div></a>

	<div id="data">
	<?php


	foreach ($added_players as $player_id)
	{
		echo '<div class="row" id="p_' . $player_id . '">';
		include('lookup.php');
		echo '</div>';
	}

	foreach ($added_teams as $team_id)
	{
		echo '<div class="row" id="t_' . $team_id . '">';
		include('lookup.php');
		echo '</div>';
	}

	?>

	</div>

</body>

</html>