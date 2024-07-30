<?php
include_once "base.php";

$do = $_POST['table'];
$db = ${ucfirst($do)};

unset($_POST['table']);
$_POST['id'] = 1;
$db->save($_POST);

to("../backend/dashboard.php?do=$do");
