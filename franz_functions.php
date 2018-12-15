<?php
function getZip($str){
	$new_str = explode('_',$str);
	return $zip = array_pop($new_str);
}
function test(){
	echo 'test';
}
?>