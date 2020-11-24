<?php
	
	/* Connect To Database*/
	require_once ("../conexion.php");

	$sql = "select * FROM tblprod";
	$query = $con ->query($sql);
	if ($query){
		while($row = mysqli_fetch_array($query)){	
			$product_id=$row['id'];
			$prod_code=$row['prod_code'];
			$prod_name=$row['prod_name'];
			$prod_ctry=$row['prod_ctry'];
			$provedor=$row['proveedor'];
			$prod_qty=$row['preciocosto'];
			$price=$row['price'];		
		

		echo $product_id; echo ",";	
		echo $prod_code; echo ",";
		echo $prod_name; echo ",";
		echo $prod_ctry; echo ",";
		echo $provedor; echo ",";
		echo $prod_qty; echo ",";
		echo $price; echo "\n";
	


		}

	}
	header('Content-Type: application/csv');
	header('Content-Disposition: attachment; filename=export.csv;');

?>          
		  


