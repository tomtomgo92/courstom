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
    <table> <?php
    for ($a=0; $a < 49; $a++){
        
        if ($a%2) {
             echo "<tr >";

        for ($i=0; $i < 49; $i++){ 
            if ($i%2) {
                echo "<td style='background:black;color:white'>$i</td> ";
            }else{
                echo "<td>$i</td> ";
            }
}
"</tr>";
        }
       else{
        echo "<tr >";

        for ($i=0; $i < 49; $i++){ 
            if ($i%2) {
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
<style type="text/css">
    
td{
    border: solid 1px #222;
    padding: 10px;
    min-width: 50px;
    height: 30px;
    background: #fff;
    text-align: center;
    box-sizing:box-sizing;
}


</style>

</body>
</html>