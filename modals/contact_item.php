<h3 class='cent'>新增聯絡資料</h3>
<hr>

<form action="../api/add.php" method="post" enctype="multipart/form-data">
    <table style="width: 80%;text-align: center;margin: 0 auto;">
        <tr>
            <td class="t-l w-100px">Line：</td>
            <td class="t-l"><input type="text" name="line" id="title"></td>
        </tr>
        <tr>
            <td class="t-l w-100px">Tel：</td>
            <td class="t-l"><input type="text" name="tel" id="title"></td>
        </tr>
        <tr>
            <td class="t-l w-100px">Facebook：</td>
            <td class="t-l"><input type="text" name="facebook" id="title"></td>
        </tr>
        <tr>
            <td class="t-l w-100px">instagram：</td>
            <td class="t-l"><input type="text" name="instagram" id="title"></td>
        </tr>

        <!-- <tr>
            <td>標題區替代文字：</td>
            <td><input type="text" name="text" id="text"></td>
        </tr> -->
        <tr>
            <td></td>
            <td>
                <input type="hidden" name="table" value='contact_item'>
                <input class="cursor-pointer" type="submit" value="新增">
                <input class="cursor-pointer" type="reset" value="重置">
            </td>
        </tr>
    </table>
</form>