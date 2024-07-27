<h3 class='cent'>新增服務圖片</h3>
<hr>

<form action="../api/add.php" method="post" enctype="multipart/form-data">
    <table style="width: 80%;text-align: center;margin: 0 auto;">
        <tr>
            <td class="t-l w-100px">圖片：</td>
            <td class="t-l"><input type="file" name="img" id="img"></td>
        </tr>
        <tr>
            <td class="t-l w-100px">標題：</td>
            <td class="t-l"><input type="text" name="title" id="title"></td>
        </tr>
        <tr>
            <td class="t-l w-100px">描述：</td>
            <td class="t-l"><input type="text" name="description" id="title"></td>
        </tr>

        <!-- <tr>
            <td>標題區替代文字：</td>
            <td><input type="text" name="text" id="text"></td>
        </tr> -->
        <tr>
            <td></td>
            <td>
                <input type="hidden" name="table" value='service_item'>
                <input class="cursor-pointer" type="submit" value="新增">
                <input class="cursor-pointer" type="reset" value="重置">
            </td>
        </tr>
    </table>
</form>