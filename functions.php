<?php
require_once('teamArray.php');
function memberAge($birthday){
	$birthday = date('Y-m-d', strtotime($birthday));
	$today = date('Y-m-d');
	$years = date_diff(date_create($birthday), date_create($today));
	return $years->format('%y');
}
foreach($team as $teammates){
$birthday = $teammates['birthday'];
$age = memberAge($birthday);
$ages[$teammates['name']] = $age;
}
?>
