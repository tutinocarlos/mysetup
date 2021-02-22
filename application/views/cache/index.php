<?php  
$db = mysqli_connect("localhost", "root", "", "transitw");

if (!$db) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
}


//mysqli_close($db);

/* 

Actualice registros en tabla services con service_publicado = 1 y services.service_isactive = 1
1047 1048  1047 


	stop_type_id	stop_type_code	stop_type_name	stop_type_desc	dropon_allowed	dropoff_allowed
1	G	Parada general	Permite la subida y bajada de viajeros.	1	1
2	S	Parada sólo subidas	Permite sólo subida de viajeros.	1	0
3	B	Parada solo bajadas	Permite sólo bajada de viajeros.	0	1
4	T	Parada técnica	Sólo para repostaje de combustible.	0	0
5	D	Parada de descanso	Sólo para descanso de viajeros.	0	0
6	C	Cabecera de línea	Permite sólo subida de viajeros.	1	0
7	F	Fin de línea	Permite sólo bajada de viajeros.	0	1


*/
$sql = "
	SELECT services.`service_id`, 
	stop_type.`stop_type_name`,
	stop_times_service.`stop_id`,
	stop.`stop_id` AS stop_from_id,
	stop.`stop_name` AS stop_from_name,
	stop.`stop_code` AS stop_from_code,
	stop.`stop_desc` AS stop_from_desc,
	stop.`stop_lat` AS stop_from_lat,
	stop.`stop_lon` AS stop_from_lon,
	stop.`lang` AS stop_from_lang,
	
	stop_type.`stop_type_id`	
	FROM services
	INNER JOIN stop_times_service ON services.`service_id` = stop_times_service.`service_id` 
	INNER JOIN STOP  ON stop_times_service.`stop_id` = stop.`stop_id`
	INNER JOIN stop_type ON stop_times_service.`stop_type_id` = stop_type.`stop_type_id`

	WHERE (services.service_publicado = 1 AND services.service_isactive = 1) AND (stop_type.`stop_type_id` != 4)
	ORDER BY stop_times_service.`service_id` ASC,stop_type.`stop_type_id` DESC 
";

if (!$resultado = $db->query($sql)) {
    // ¡Oh, no! La consulta falló. 
    echo "Lo sentimos, este sitio web está experimentando problemas.";

    // De nuevo, no hacer esto en un sitio público, aunque nosotros mostraremos
    // cómo obtener información del error
    echo "Error: La ejecución de la consulta falló debido a: \n";
    echo "Query: " . $sql . "\n";
    echo "Errno: " . $db->errno . "\n";
    echo "Error: " . $db->error . "\n";
    exit;
}else{
	
	while($row = $resultado->fetch_assoc()) {
    $nuevo_array[] = $row;
	}
	$service_id = array_count_values( array_column($nuevo_array, 'service_id'));
			
	$mi_array=[];
	$data=[];
	
	foreach($service_id as $key=>$val){
			
		$cantidad_convinaciones =  	calcula_array($service_id[$key]);
		echo '<br> ' . $cantidad_convinaciones .' Convinaciones / Expediciones para Servicio '.$key;

		$myinputs = array_values(array_filter( $nuevo_array, function($e) use($key){	
//	var_dump($e);
			return $e['service_id'] == $key;
		}));
		echo '<br>posiciones'.$cantidad_convinaciones.'<br>';
		echo '<pre>';
		var_dump($myinputs);
		echo '</pre>';
		
		
		$pos= 0;
		$data=[];
		$from = '';
		 for($pos; $pos <= $cantidad_convinaciones;$pos++){
			 $step = $cantidad_convinaciones - 1;
			 
			 	for($step;  $step>$cantidad_convinaciones;$step++){
			 $data[]=array(
//				'id_from'=>$myinputs[$pos]['stop_id'],
				'id_to'=>'to'
			 );
			 
			 
				}			
			 
			 for($a=0;  $a<=count($myinputs);$a++){
			 
				}
			 

				 
			 
		 }
		
			echo '<pre>';
		var_dump($data);
		echo '</pre>';	
		die();
	}
}


/*
	calculo de caonvinaciones según  cantidad de tramos/
*/

function calcula_array($n){
	$sum = 0;
	$tot = [];
	for($x=1;$x<$n;$x++){
		$tot[$x] = $x;
		$sum = $sum + $x;
	}
	return $sum;
}

?>