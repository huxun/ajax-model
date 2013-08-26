<?php
$test = 0;
for($i = 0; $i < 10000000; $i++){
	$test++;
}
if(isset($_GET['id'])){
	echo '这是内容'.$_GET['id'];
}