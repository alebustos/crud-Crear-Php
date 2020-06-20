<?php 
			require ('conexion/connect.php')

			$nom="Juan Felipe Dominguez";
			$tel="3854-455332";
			$dom="Calle Pelegrini nº 443";

			
				//AGREGAMOS A LA BASE DE DATOS
					$sqlCrear="insert into clientes (nom, tel, dom) values '".$nom."', '".$tel."','".$dom."'";
					mysqli_query($con, $sqlCrear);


 ?>