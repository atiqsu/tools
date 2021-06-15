<?php

if(!empty($_POST['btn'])) {

	$dt = $_POST['dt'];

	//$lines = explode(PHP_EOL, $dt);
	$lines = explode(';', $dt);

	$final = '';
	$count = 0;

	foreach($lines as $line) {

		$line = trim($line);

		if(strpos($line, 'remove_action') !== false) {

			$args = str_replace('remove_action(', '', $line);
			$args = str_replace(')', '', $args);
			$args = explode(',', $args);

			$str = '$this->add_action_if_not_exists(';

			$comma = '';

			foreach($args as $arg) {

				$str .= $comma . trim($arg);

				$comma = ', ';
			}

			$str .= '); ' . PHP_EOL;

			$count++;

		} elseif(strpos($line, 'add_action') !== false) {

			$args = str_replace('add_action(', '', $line);
			$args = str_replace(')', '', $args);
			$args = explode(',', $args);

			$str = '$this->remove_action_if_exists(';

			$comma = '';

			foreach($args as $arg) {

				$str .= $comma . trim($arg);

				$comma = ', ';
			}

			$str .= '); ' . PHP_EOL;

			$count++;
		}

		$final .= $str;
	}

	echo 'Total formatted: '. $count . ' out of '. count($lines);
	echo '<pre>';

	echo $final;

	echo '</pre>';
}
