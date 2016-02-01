
<?php
// Lit 14 caractères à partir du 20ème
// $section = file_get_contents('./twitter.html', NULL, NULL, 20, 14);
// var_dump($section);



function _file_get_contents( $filename ){
	$content ='';
	$fd =fopen($filename, 'r');
	while (!feof($fd) ){
		$content .= fread($fd, 1024);
	}
	fclose($fd);
	return $content;
}

function _file_put_contents ( $filename, $data){
	$fd =fopen($filename, 'w');
	fwrite($fd, $data);
	fclose($fd);
}


























