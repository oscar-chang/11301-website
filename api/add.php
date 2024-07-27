<?php
include_once "base.php";
$do = $_POST['table'];
$db = ${ucfirst($do)};

if (!empty($_FILES['img']['tmp_name'])) {
    move_uploaded_file($_FILES['img']['tmp_name'], "../images/" . $_FILES['img']['name']);
    $_POST['img'] = $_FILES['img']['name'];
}
if ($do == 'admin') {
    unset($_POST['pw2']);
}

unset($_POST['table']);
$db->save($_POST);


$substring = "_item";
if (strpos($do, $substring) !== false) {
    $do = str_replace('_item', '', $do);
    // echo "包含保留字";
} else {
    // echo "未包含保留字";
}

// to("../admin.php?do=$do");
to("../backend/dashboard.php?do=$do");
