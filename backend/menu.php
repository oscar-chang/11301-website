<div style="width:99%; height:93%; margin:auto; overflow:auto; border:#666 1px solid;border-left: 0;border-bottom: 0;border-right: 0;">
    <!-- <p class="t cent botli">Menu 選單管理</p> -->
    <form method="post" action="../api/edit.php">
        <table width="100%">
            <tbody>
                <tr class="yel">
                    <td width="15%">選單名稱</td>
                    <td width="15%">英文名稱(與資料庫欄位綁定)</td>
                    <!-- <td width="30%">描述</td> -->
                    <td width="7%">顯示</td>
                    <td width="7%">刪除</td>
                    <!-- <td></td> -->
                </tr>
                <?php

                //$rows = ${ucfirst($do)}->all(['main_id' => 0]);
                $rows = ${ucfirst($do)}->all();
                // dd($rows);
                foreach ($rows as $row) {

                ?>
                    <tr class='cent'>
                        <td width="15%">
                            <input type="text" name="title[]" id="text" value="<?= $row['title']; ?>" style="width:90%">
                        </td>
                        <td width="15%">
                            <input type="text" name="en_title[]" id="text" class="menu-etitle" value="<?= $row['en_title']; ?>" style="width:90%" readonly>
                        </td>
                        <!-- <td width="30%">
                            <input type="text" name="subtitle[]" id="text" value="<?= $row['subtitle']; ?>" style="width:95%">
                        </td> -->
                        <!-- <td width="30%">
                            <input type="text" name="href[]" value="<?= $row['href']; ?>" style="width:90%">
                        </td> -->
                        <!-- <td width=" 10%">
                            <?php //echo $Menu->count(['main_id' => $row['id']]); 
                            ?>
                        </td> -->
                        <td width="7%">
                            <input type="checkbox" name="sh[]" value="<?= $row['id']; ?>" <?= ($row['sh'] == 1) ? 'checked' : ''; ?>>
                        </td>
                        <td width="7%">
                            <input type="checkbox" name="del[]" value="<?= $row['id']; ?>">
                        </td>
                        <!-- <td><input type="button" value="編輯次選單" onclick="op('#cover','#cvr','./modals/submenu.php?id=<?= $row['id']; ?>')">
                        </td> -->
                        <input type="hidden" name="id[]" value="<?= $row['id']; ?>">
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
        <table style=" margin-top:40px; width:100%;">
            <tbody>
                <tr>
                    <!-- <td width="200px">
                        <input type="button" onclick="op('#cover','#cvr','./modals/<?= $do; ?>.php')" value="新增選單">
                    </td> -->
                    <td class="cent">
                        <input type="hidden" name="table" value="<?= $do; ?>">
                        <input class="cursor-pointer" type="submit" value="更新儲存">
                        <input class="cursor-pointer" type="reset" value="重置">
                    </td>
                </tr>
            </tbody>
        </table>

    </form>
</div>