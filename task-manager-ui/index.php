<?php
include "bootstrap/init.php";

use Hekmatinasser\Verta\Verta;

$v = new Verta();
var_dump($v);
$tasks = getTasks([2, 2, 3, 4, 5, 2, 1]);
include "tpl/tpl-index.php";
