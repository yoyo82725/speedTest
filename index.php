<?
$a=3;
$start = microtime(true);
for($i = 0; $i < 1000000; $i++) {
	if($a==3){
		echo '';
	}else{
		echo '';
	}
}
$end = microtime(true);
echo '<br/>'.($end-$start);
?>