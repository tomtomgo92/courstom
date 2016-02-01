<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
		<link rel="stylesheet" type="text/css" href="css/001mo.css">
		<link rel="stylesheet" type="text/css" href="css/.css">
		<link rel="stylesheet" type="text/css" href="font-awesome-4.3.0/css/font-awesome.css">
	<!--[if IE]>
    <script type="text/javascript" src="js/modernizr.custom.78869.js">
    </script>
<![endif]-->
</head>
<body>
<table>
	<?php
for ($i=1; $i<=50; $i++){
	if($i%2){
		echo "<td style='background:black; color:white'>$i</td>";
	}
	else{
		echo "<td style='background:white'>$i</td>";
	}
}

?>
</table>
<style type="text/css">
	
td{
	border: solid 1px #222;
	padding: 10px;
	width: 50px;
	height: 30px;
	background: #fff;
	text-align: center;
}

</style>
</body>
</html>