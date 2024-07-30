<?php
include_once "base.php";
$do = $_POST['table'];
$db = ${ucfirst($do)};

if (!empty($_FILES['img']['tmp_name'])) {
    move_uploaded_file($_FILES['img']['tmp_name'], "../images/" . $_FILES['img']['name']);
    $row = $db->find($_POST['id']);
    $row['img'] = $_FILES['img']['name'];
    $db->save($row);
}

$substring = "_item";
if (strpos($do, $substring) !== false) {
    $do = str_replace('_item', '', $do);
}

to("../backend/dashboard.php?do=$do");

