<!DOCTYPE html>
<html lang="FR-fr">
<head>
	<meta charset="UTF-8">
	<title>Exo</title>s	
</head>
<body>
		<!-- function fun_1-->
<?php
echo "fun_1 : ";
function fun_1($fun_2 ,$fun_3 ,$fun_4 ,$fun_5 ,$fun_6 ,$fun_7 ,$fun_8 ,$fun_9)
{
    return $retval;
}
echo "Fonction";
?>

		<!-- function fun_2-->
</br>
<?php echo "fun_2 : "; echo "Hello"; ?>

		<!-- function fun_3-->
</br>
<?php echo "fun_3 : ";
for ($i=1; $i<=10; $i++) {
    echo "hello world $i </br>";
}
?>

		<!-- function fun_4-->
<?php
echo "fun_4 : ";
function fun_4($nombre){
	return $nombre*$nombre;
}
echo fun_4($_GET['a']);
?>

		<!-- function fun_5-->
</br>
<?php
echo "fun_5 : ";
echo time(-3600*24);
?>

		<!-- function fun_6-->
</br>
<?php echo "fun_6 : "; echo date("d/m/Y l"); ?>

		<!-- function fun_7-->
</br>
<?php
echo "fun_7 : ";
function fun_7(){
	return ;
}
echo fun_7();
?>

		<!-- function fun_8-->
</br>
	<table>
<?php echo "fun_8 : ";
for ($i=0; $i < 11; $i++){ 
            if ($i%2) {
                echo "<td style='background:white;color:black'>$i</td> ";
            }else{
                echo "<td style='background:black;color:white'>$i</td> ";
            }
}
?>
	</td>
	</table>


		<!-- function fun_9-->
<table><?php echo "fun_9 : ";
    for ($a=0; $a < 5; $a++){
        
        if ($a%2) {
             echo "<tr>";

        for ($i=0; $i < 11; $i++){ 
            if ($i%2) {
                echo "<td style='background:black;color:white'>$i</td> ";
            }else{
                echo "<td>$i</td> ";
            }
}
"</tr>";
        }
       else{
        echo "<tr>";

        for ($i=0; $i < 11; $i++){ 
            if ($i%2){
                echo "<td>$i</td> ";
            }else{
                echo "<td style='background:black;color:white'>$i</td> ";
            }
}
"</tr>";
       }
    }
    ?>
</tr>
</table>

</body>
</html>