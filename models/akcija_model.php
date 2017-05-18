<?php

require_once "../core/init.php";

$akcija_res = Akcija::getAll();
$naslov_res = Naslov::getAll();
$usluge_res = Usluge::getAll();

foreach ($usluge_res as $usluga) {
	switch ($usluga->kategorija) {
		case '1':
			$automobili[] = $usluga;
			break;

		case '2':
			$namestaj[] = $usluga;
			break;

		case '3':
			$duseci[] = $usluga;
			break;
		
		default:
			break;
	}
}

$akcija_res = json_encode($akcija_res);
$naslov_res = json_encode($naslov_res);
$automobili_res = json_encode($automobili);
$namestaj_res = json_encode($namestaj);
$duseci_res = json_encode($duseci);

echo '{ "naslov": ' . $naslov_res 
	. ',"akcije": ' . $akcija_res 
	. ',"automobili": ' . $automobili_res 
	. ',"namestaj": ' . $namestaj_res 
	. ',"duseci": ' . $duseci_res . '}';