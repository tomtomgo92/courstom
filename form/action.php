<!DOCTYPE html>
<html lang="fr-FR">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
		<link rel="stylesheet" type="text/css" href="css/002mo.css">
		<link rel="stylesheet" type="text/css" href="css/002.css">
<link href='http://fonts.googleapis.com/css?family=Lora:400,400italic,700,700italic' rel='stylesheet' type='text/css'>		<link rel="stylesheet" type="text/css" href="font-awesome-4.3.0/css/font-awesome.css">
	<!--[if IE]>
    <script type="text/javascript" src="js/modernizr.custom.78869.js">
    </script>
<![endif]-->
</head>
<body>

	<h1>Réponse Formulaire</h1>
<p>Bonjour, <?php echo htmlspecialchars($_POST['prenom']); ?>.</p>
<p>Ton email est <?php echo $_POST['mail']; ?>.</p>
<p>Ton adresse est <?php echo htmlspecialchars($_POST['adresse']); ?>.</p>

</body>
</html>