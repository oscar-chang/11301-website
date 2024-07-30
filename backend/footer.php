<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <form method="post" action="../api/update_data.php">
        <table width="90%" style='margin:auto'>
            <tbody>
                <tr class="yel">
                    <td width="20%">頁尾版權資料</td>
                    <td width="80%" style="background:none;">
                        <?php
                        $footer = $Footer->find(['sh' => 1]);
                        // $footer = $Footer->find(1)['footer'];
                        ?>
                        <input style="width: 90%;" type="text" name="footer" id="bottom" value="<?= $footer['footer']; ?>">
                    </td>
                </tr>
            </tbody>
        </table>
        <table style=" margin-top:40px; width:100%;">
            <tbody>
                <tr>
                    <td></td>
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