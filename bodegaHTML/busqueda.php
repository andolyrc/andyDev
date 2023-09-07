<?php 

require_once('database.php');

$search_criteria=$_POST['search_criteria'];

//cadena consulta
$query="SELECT codigo,codBarra,bodega,pasillo,nombre from producto WHERE codBarra LIKE'%".$search_criteria."%'";

$producto=[];
$errors=['data'=>false];

$getproducto=$db->query($query);

if($getproducto->num_rows>0){
	while ($data=$getproducto->fetch_assoc()) {
		$producto[]=$data;
	}

echo json_encode($producto);
}else{

	echo json_encode($errors);
}
 ?>
