

<?php
		function conexion(){
			$servidor="localhost";
			$usuario="root";
			$password="1234";
			$bd="library";

			$conexion=mysqli_connect($servidor,$usuario,$password,$bd);

			return $conexion;
		}

 ?>
