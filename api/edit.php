<?php
include_once "base.php";
$do = $_POST['table'];
$db = ${ucfirst($do)};

foreach ($_POST['id'] as $key => $id) {
    if (!empty($_POST['del']) && in_array($id, $_POST['del'])) {
        $db->del($id);
    } else {
        $row = $db->find($id);
        //OK // 標頭   Header
        //OK // 選單   Menu
        //OK // 關於奧攝   About
        //OK // 服務項目   Service
        //OK // 作品   Gallery
        //OK // 異業合作   Cooperation
        //OK // 聯絡我們   Contact
        //OK // 頁尾版權   Footer  > 額外API.php
        //OK // 管理權限   Admin
        switch ($do) {
            case 'admin':
                $row['acc'] = $_POST['acc'][$key];
                $row['pw'] = $_POST['pw'][$key];
                break;

            case 'menu':
                $row['title'] = $_POST['title'][$key];
                $row['en_title'] = $_POST['en_title'][$key];
                $row['sh'] = (isset($_POST['sh']) && in_array($id, $_POST['sh'])) ? 1 : 0;
                break;

            case 'header':
                $row['sh'] = (isset($_POST['sh']) && $_POST['sh'] == $id) ? 1 : 0;
                $row['title'] = $_POST['title'][$key];
                $row['subtitle'] = $_POST['subtitle'][$key];
                break;
                
            case 'about':
            case 'contact':
            case 'cooperation':
            case 'gallery':
            case 'service':
                $row['sh'] = (isset($_POST['sh']) && $_POST['sh'] == $id) ? 1 : 0;
                $row['title'] = $_POST['title'][$key];
                $row['description'] = $_POST['description'][$key];
                break;

            case 'contact_item':
                $row['sh'] = (isset($_POST['sh']) && $_POST['sh'] == $id) ? 1 : 0;
                $row['line'] = $_POST['line'][$key];
                $row['tel'] = $_POST['tel'][$key];
                $row['facebook'] = $_POST['facebook'][$key];
                $row['instagram'] = $_POST['instagram'][$key];
                break;

            case 'service_item':
                $row['sh'] = (isset($_POST['sh']) && in_array($id, $_POST['sh'])) ? 1 : 0;
                $row['title'] = $_POST['title'][$key];
                $row['description'] = $_POST['description'][$key];
                break;

            case 'gallery_item':
                $row['sh'] = (isset($_POST['sh']) && in_array($id, $_POST['sh'])) ? 1 : 0;
                break;

        }

        $db->save($row);
    }
}

$substring = "_item";
if (strpos($do, $substring) !== false) {
    $do = str_replace('_item', '', $do);
} 

to("../backend/dashboard.php?do=$do");
