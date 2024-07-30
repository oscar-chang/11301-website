<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;border-left: 0;border-bottom: 0;border-right: 0;">
    <form method="post" action="../api/edit.php">
        <table width="100%">
            <tbody>
                <tr class="yel">
                    <td width="230px">封面</td>
                    <td width="20%">標題</td>
                    <td width="35%">描述</td>
                    <td width="7%">顯示</td>
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
                        <td><input class="cursor-pointer" type='button' value='更換圖片' onclick="op('#cover','#cvr','../modals/<?= $do; ?>_update.php?id=<?= $row['id']; ?>')"></td>
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
                    <td class="cent">
                        <input type="hidden" name="table" value="<?= $do; ?>">
                        <input class="cursor-pointer" type="submit" value="更新儲存">
                        <input class="cursor-pointer" type="reset" value="重置">
                    </td>
                </tr>
            </tbody>
        </table>

    </form>

    <form method="post" action="../api/edit.php">
        <table width="100%">
            <tbody>
                <tr class="yel">
                    <td width="15%">Line</td>
                    <td width="15%">Tel</td>
                    <td width="35%">Facebook</td>
                    <td width="15%">instagram</td>
                    <td width="7%">顯示</td>
                    <td width="7%">刪除</td>
                </tr>

                <?php
                $do = $do . '_item';
                $total = ${ucfirst($do)}->count();
                $div = 3;
                $pages = ceil($total / $div);
                $now = $_GET['p'] ?? 1;
                $start = ($now - 1) * $div;
                $rows = ${ucfirst($do)}->all(" limit $start,$div");

                foreach ($rows as $row) {
                ?>
                    <tr class='cent'>
                        <td width="15%">
                            <input type="text" name="line[]" id="title" value="<?= $row['line']; ?>" placeholder="Line ID">
                        </td>
                        <td width="15%">
                            <input type="text" name="tel[]" id="title" value="<?= $row['tel']; ?>">
                        </td>
                        <td width="35%">
                            <input type="text" name="facebook[]" id="title" value="<?= $row['facebook']; ?>" placeholder="FB連結">
                        </td>
                        <td width="15%">
                            <input type="text" name="instagram[]" id="title" value="<?= $row['instagram']; ?>" placeholder="IG帳號">
                        </td>
                        <td width="7%">
                            <input type="radio" name="sh" value="<?= $row['id']; ?>" <?= ($row['sh'] == 1) ? "checked" : ""; ?>>
                        </td>
                        <td width=" 7%">
                            <input type="checkbox" name="del[]" value="<?= $row['id']; ?>">
                        </td>
                        <input type="hidden" name="id[]" value="<?= $row['id']; ?>">
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>

        <div class='cent mt-30'>
            <?php

            $substring = "_item";
            if (strpos($do, $substring) !== false) {
                $do = str_replace('_item', '', $do);
            }

            if ($now - 1 >= 1) {
                $prev = $now - 1;
                echo "<a style='text-decoration:none;' href='?do=$do&p=$prev'> ";
                //echo "&lt;";
                echo "<";
                echo "</a>";
            }

            for ($i = 1; $i <= $pages; $i++) {
                // $size = ($i == $now) ? "24px" : "18px";
                $style = ($i == $now) ? "underline" : "none";
                $style2 = ($i == $now) ? "900" : "100";
                echo "<a href='?do=$do&p=$i' style='text-decoration:$style;font-weight:$style2;padding:5px 7px;'>";
                echo $i;
                echo "</a>";
            }

            if ($now + 1 <= $pages) {
                $next = $now + 1;
                echo "<a style='text-decoration:none;' href='?do=$do&p=$next'> ";
                //echo "&gt;";
                echo ">";
                echo "</a>";
            }

            ?>
        </div>

        <table style=" margin-top:40px; width:70%;">
            <tbody>
                <tr>
                    <td width="200px">
                        <input class="cursor-pointer" type="button" onclick="op('#cover','#cvr','../modals/<?= $do . '_item'; ?>.php')" value="新增">
                    </td>
                    <td class="cent">
                        <input type="hidden" name="table" value="<?= $do . '_item'; ?>">
                        <input class="cursor-pointer" type="submit" value="更新儲存">
                        <input class="cursor-pointer" type="reset" value="重置">
                    </td>
                </tr>
            </tbody>
        </table>

    </form>
</div>