<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli">管理員管理</p>
    <form method="post" action="./api/edit.php">
        <table width="100%">
            <tbody>
                <tr class="yel">
                    <td width="45%">帳號</td>
                    <td width="45%">密碼</td>
                    <td width="10%">刪除</td>

                </tr>
                <?php

                $rows = ${ucfirst($do)}->all();
                foreach ($rows as $row) {

                ?>
                    <tr class='cent'>
                        <td width="45%">
                            <input type="text" name="acc[]" id="text" value="<?= $row['acc']; ?>">
                        </td>
                        <td width="45%">
                            <input type="password" name="pw[]" value="<?= $row['pw']; ?>">
                        </td>
                        <td width=" 10%">
                            <input type="checkbox" name="del[]" value="<?= $row['id']; ?>">
                        </td>
                        <input type="hidden" name="id[]" value="<?= $row['id']; ?>">
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
        <table style=" margin-top:40px; width:70%;">
            <tbody>
                <tr>
                    <td width="200px">
                        <input class="cursor-pointer" type="button" onclick="op('#cover','#cvr','../modals/<?= $do; ?>.php')" value="新增">
                    </td>
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