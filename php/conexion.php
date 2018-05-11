

<?php
		function conexion(){
			$servidor="192.168.137.1";
			$usuario="Daniel";
			$password="1234";
			$bd="library";

			$conexion=mysqli_connect($servidor,$usuario,$password,$bd);

			return $conexion;
		}

 ?>
