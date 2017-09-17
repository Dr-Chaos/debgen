<?php

require 'includes/db/config.inc.php';

$changes = new Changes($db);
$allchangesDate = $changes->getChangesDate();

require_once 'views/header.php';

	foreach($allchangesDate as $coutDate)
	{
		echo '<h4>'.date('M d, Y', strtotime($coutDate['lc_date'])).'</h4>';
		$allchanges = $changes->getChanges($coutDate['lc_date']);

		foreach($allchanges as $cout)
		{
			echo '<li>'.$cout['lc_text'].'</li>';
		}
	}

require_once 'views/footer.php';
