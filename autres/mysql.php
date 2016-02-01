
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title></title>
</head>
<body>
<style type="text/css">
	th{
		background: yellow;
		text-align: center;
		width: 250px;
	}
	td{
		background: orange;
		text-align: center;
	}
	h1{
		text-align: center;
	}



</style>
<h1>Users</h1>
<table>

<thead>
<th>Id</th>
<th>Mail</th>
<th>Password</th>
</thead>

<tbody>
	<?php
$dsn='mysql:host=localhost;dbname=site_web';
$user = 'root';
$pass ='';


$pdo = new PDO(
$dsn,
$user,
$pass 
);

$request=$pdo->query('SELECT * FROM user');
$result=$request->fetchAll();
$ligne = count($result);
	?>

<?php 
for ($i=0; $i <
	count($result) ; $i++){

 ?>
<tr>
<td><?= $result[$i]['id'] ?></td>
<td><?= $result[$i]['mail'] ?></td>
<td><?= $result[$i]['password'] ?></td>
</tr>
<?php }?>
</tbody>
</table>












</body>
</html>