<?php
require_once "../core/init.php";

$usluge_res = Usluge::getAll();

echo json_encode($usluge_res);