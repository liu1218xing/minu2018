<?php
// if(is_file('./index.html') && (time()-filemtime('./index.html') < 1200)) {
// 	require_once('./index.html');
// }else 
{
	ob_start();
	require_once('template/index.php');
	$s = ob_get_contents();
	file_put_contents('./index.html', $s);
}
