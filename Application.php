<?php

require 'ColorName.php';

class Application {

	function get($query = null) {
		$query = strtoupper($query);

		ColorName::Prepare('colors.dat');
		$colorInfo = ColorName::GetInfo($query);

		echo '<?xml version="1.0"?>';
		echo '<items>';

		echo '
			<item uid="'.$colorCode.'" arg="'.$colorInfo->name.'">
				<title>'.$colorInfo->name.'</title>
				<subtitle>#'.$colorInfo->code.' matched with '.intval($colorInfo->similarity).' %</subtitle>
				<icon>icon.png</icon>
			</item>';
		echo '</items>';
	}
}
?>