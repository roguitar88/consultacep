<?php

require_once "vendor/autoload.php";

use \Roguitar\ConsultaCep\Search;

$busca = new Search();

$resultado = $busca->getAddressFromZipCode('74360300');

print_r($resultado);