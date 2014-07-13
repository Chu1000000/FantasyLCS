<?php

function active_get($remove_p = null, $remove_t = null, $prepend = null)
{
	$active_get = '';
	$remove_p = (isset($remove_p)) ? explode(',', $remove_p) : array();
	$remove_t = (isset($remove_t)) ? explode(',', $remove_t) : array();

	if (isset($_GET['p']))
	{
		foreach ($_GET['p'] as $get)
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
	}

	if (isset($_GET['t']))
	{
		foreach ($_GET['t'] as $get)
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
	}

	if (isset($_GET['week']))
	{
		
		$active_get .= '&week=' . $_GET['week'];
	}	

	return $active_get;
}

$active_get = active_get();

?>