<?php
$searchRoot = 'C:\xampp\htdocs\welcome\test_search';
$searchName = 'test.txt';
$searchResult = array();

function search($searchRoot, $searchName, &$searchResult)
{
	$directory = scandir($searchRoot);
	echo '</br>';
	$count = sizeof($directory);
	for ($i = 2; $i < $count; $i++) {
		$address = "$searchRoot" . "/" . "$directory[$i]";
		if ($directory[$i] === $searchName) {
			$searchResult[] = $address;
		} elseif (is_dir($address)) {
			search($address, $searchName, $searchResult);
		}
	}
}

function result($searchResult)
{
	if (empty($searchResult)) {
		echo 'Поиск не дал результатов, милорд!';
	} else {
		echo "Вот что нам удалось найти, милорд! </br>";
		var_dump($searchResult);
	}
}

function arrayFiltering(&$searchResult)
{
	$count = sizeof($searchResult);
	for ($i = 0; $i < $count; $i++) {
		if (filesize($searchResult[$i]) === 0) {
			unset($searchResult[$i]);
		}
	}
}

search($searchRoot, $searchName, $searchResult);
array_filter($searchResult, arrayFiltering($searchResult));
result($searchResult);
