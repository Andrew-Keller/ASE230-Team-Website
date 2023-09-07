<?php
function memberAge($birthday){
	$birthday = date('Y-m-d', strtotime($birthday));
	$today = date('Y-m-d');
	$years = date_diff(date_create($birthday), date_create($today));
	return $years->format('%y');
}
foreach($teammates as $team){
$birthday = $team['birthday'];
$age = memberAge($birthday);
$ages[$team['name']] = $age;
}
?>
