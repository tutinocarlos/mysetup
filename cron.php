<?php

date_default_timezone_set('AAmerica/Argentina/Buenos_Aires');
if(file_exists("prueba.txt")){
	
	$hora  =  date('l jS \of F Y h:i:s A');
	
	$file = fopen("prueba.txt", "a");

	fwrite($file, "Hora: ".$hora . PHP_EOL);

	fwrite($file, "Otra másc" . PHP_EOL);

	//while(!feof($file)) {
	//
	//echo fgets($file). "<br />";
	//
	//}

	fclose($file);
}else{
	fopen("prueba.txt",'a+');
}

?>