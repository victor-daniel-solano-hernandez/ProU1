<!doctype html>
<html>
<head>
<title>Cliente</title>
	<meta charset="utf-8">

</head>

<body>

	<img src="troya.jpg" width="200" height="200"/>

	<form action = "cliente.php" method="post">
	<table>
	<tr>
	
	<h1>troya $50</h1>
	cuantas piezas deseas?:</td><td class ="der"><input type="text" name="cant"></td></tr>
	<tr><td colspan="2"><input type="submit" name="enviar" value="Adquirir"></td></tr></table>

	</form>

</body>
</html>

<?php

	$cant = $_POST['cant'];
	echo "<br>";
	echo "<br>";
	echo "Cantidad:". $cant;
	
	$total = $cant*50;
	echo "<br>";
	echo "<br>";
	echo "Total a pagar: ". $total;
?>


<body>
	<h2><h2>
	<img src="cars.jpg" width="200" height="200"/>
	<form action = "cliente.php" method="post">
	<table>
	<tr>
	
	<h3>cars $100</h3>
	cuantas piezas deseas?:</td><td class ="der"><input type="text" name="cant1"></td></tr>
	<tr><td colspan="2"><input type="submit" name="enviar" value="Adquirir"></td></tr></table>

	</form>

</body>
</html>

<?php

	$cant1 = $_POST['cant1'];
	echo "<br>";
	echo "<br>";
	echo "Cantidad:" . $cant1;
	
	$total1 = $cant1*100;
	echo "<br>";
	echo "<br>";
	echo "Total a pagar:". $total1;
?>
	<body>
	<h2><h2>
	<img src="troll.jpg" width="200" height="200"/>
	<form action = "cliente.php" method="post">
	<table>
	<tr>
	
	<h4>troll $200</h4>
	cuantas piezas deseas?:</td><td class ="der"><input type="text" name="cant2"></td></tr>
	<tr><td colspan="2"><input type="submit" name="enviar" value="Adquirir"></td></tr></table>

	</form>

</body>
</html>

<?php

	$cant2 = $_POST['cant2'];
	echo "<br>";
	echo "<br>";
	echo "Cantidad:" . $cant2;
	
	$total2 = $cant2*200;
	echo "<br>";
	echo "<br>";
	echo "Total a pagar: ". $total2;
?>