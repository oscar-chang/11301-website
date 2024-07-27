<div style="width:99%; height:93%; margin:auto; overflow:auto; border:#666 1px solid;border-left: 0;border-bottom: 0;border-right: 0;">
    <!-- <p class="t cent botli">網站標題管理</p> -->
    <form method="post" action="../api/edit.php">
        <table width="100%">
            <tbody>
                <tr class="yel">
                    <td width="230px">封面</td>
                    <td width="20%">標題</td>
                    <td width="35%">描述</td>
                    <td width="7%">顯示</td>
                    <td width="7%">刪除</td>
                    <td>功能</td>
                </tr>
                <?php

                $rows = ${ucfirst($do)}->all();
                foreach ($rows as $row) {

                ?>
                    <tr class='cent'>
                        <td width="230px">
                            <img src="../images/<?= $row['img']; ?>" style='width:200px;height:100px'>
                        </td>
                        <td width="20%">
                            <input type="text" name="title[]" id="title" value="<?= $row['title']; ?>">
                        </td>
                        <td width="35%">
                            <input type="text" name="description[]" id="title" value="<?= $row['description']; ?>">
                        </td>
                        <td width="7%">
                            <input type="radio" name="sh" value="<?= $row['id']; ?>" <?= ($row['sh'] == 1) ? "checked" : ""; ?>>
                        </td>
                        <td width="7%">
                            <input type="checkbox" name="del[]" value="<?= $row['id']; ?>">
                        </td>
                        <td><input class="cursor-pointer" type='button' value='更換圖片' onclick="op('#cover','#cvr','../modals/<?= $do; ?>_update.php?id=<?= $row['id']; ?>')"></td>
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
                        <input class="cursor-pointer" type="button" onclick="op('#cover','#cvr','../modals/<?= $do; ?>.php')" value="新增封面圖片">
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