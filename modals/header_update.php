<h3 class='cent'>更新標頭封面</h3>
<hr>

<form action="../api/update.php" method="post" enctype="multipart/form-data">
    <table style="width: 80%;text-align: center;margin: 0 auto;">
        <tr>
            <td class="t-l w-100px">圖片：</td>
            <td class="t-l"><input type="file" name="img" id="img"></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="hidden" name='id' value="<?= $_GET['id']; ?>">
                <input type="hidden" name="table" value='header'>
                <input class="cursor-pointer" type="submit" value="更新">
                <input class="cursor-pointer" type="reset" value="重置">
            </td>
        </tr>
    </table>
</form>