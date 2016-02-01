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
for ($i=0; $i<=50; $i++){

	

?>
<td>
<?php

echo $i;
}
?>
</td>
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
td:nth-child(odd){
	background: #000;
	color: #fff;
}



</style>

</body>
</html>