<?php

require_once "../core/init.php";

$akcija_res = Akcija::getAll();
$naslov_res = Naslov::getAll();

$akcija_res = json_encode($akcija_res);
$naslov_res = json_encode($naslov_res);

echo '{ "naslov": ' . $naslov_res . ',"akcije": ' . $akcija_res . '}';