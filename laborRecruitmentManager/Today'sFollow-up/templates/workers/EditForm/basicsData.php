<fieldset>
    <legend>بيانات اساسيه</legend>
    <div class="input_group">

        <div class="input_field">
            <label for="<?php echo $row['id']; ?>result">النتيجه</label>

            <select name="result" id="<?php echo $row['id']; ?>result">
                <option value="1" <?php echo ($row['result'] == 1 ? "selected" : "" ); ?>>تجهيز اوراق</option>
                <option value="2" <?php echo ($row['result'] == 2 ? "selected" : "" ); ?>>رافض</option>
                <option value="3" <?php echo ($row['result'] == 3 ? "selected" : "" ); ?>>لم يتم الرد</option>
                <option value="4" <?php echo ($row['result'] == 4 ? "selected" : "" ); ?>>الهاتف مغلق</option>
                <option value="5" <?php echo ($row['result'] == 5 ? "selected" : "" ); ?>>غير مناسب للعمل</option>
                <option value="6" <?php echo ($row['result'] == 6 ? "selected" : "" ); ?>>مقابة مؤهلات</option>
                <option value="0" <?php echo ($row['result'] == 0 ? "selected" : "" ); ?>>اختبار سائقين</option>
            </select>
        </div>

        <div class="input_field">
            <label for="<?php echo $row['id']; ?>nots">ملاحظات</label>
            <input id="<?php echo $row['id']; ?>nots" name="nots" value="<?php echo $row['nots']; ?>" />
        </div>

        <div class="input_field">
            <label for="<?php echo $row['id']; ?>next_continue_date">تاريخ المتابعه المستقبليه</label>
            <input id="<?php echo $row['id']; ?>next_continue_date" name="next_continue_date" type="date"  value="<?php echo $row['next_continue_date']; ?>" />
        </div>
    </div>
</fieldset>
