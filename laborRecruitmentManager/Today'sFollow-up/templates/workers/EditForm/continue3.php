<fieldset>
    <legend>متابعه 3</legend>
    <div class="input_group">

        <div class="input_field">
            <label for="<?php echo $row['id']; ?>continue3_date">تاريخ المتابعه</label>
            <input type="date" id="<?php echo $row['id']; ?>continue3_date" name="continue3_date"
                value="<?php echo $row['continue3_date']; ?>" />
        </div>

        <div class="input_field">
            <label for="<?php echo $row['id']; ?>continue3">النتيجه</label>

            <select name="continue3" id="<?php echo $row['id']; ?>continue3">
                <option value="1" <?php echo ($row['continue3'] == 1 ? 'selected' : "" ); ?> >تجهيز اوراق</option>
                <option value="2" <?php echo ($row['continue3'] == 2 ? 'selected' : "" ); ?> >رافض</option>
                <option value="3" <?php echo ($row['continue3'] == 3 ? 'selected' : "" ); ?> >لم يتم الرد</option>
                <option value="4" <?php echo ($row['continue3'] == 4 ? 'selected' : "" ); ?> >الهاتف مغلق</option>
                <option value="5" <?php echo ($row['continue3'] == 5 ? 'selected' : "" ); ?> >غير مناسب للعمل</option>
                <option value="6" <?php echo ($row['continue3'] == 6 ? 'selected' : "" ); ?> >مقابة مؤهلات</option>
                <option value="7" <?php echo ($row['continue3'] == 7 ? 'selected' : "" ); ?> >غير مناسب للعمل</option>
                <option value="0" <?php echo ($row['continue3'] == 0 ? 'selected' : "" ); ?> >اختبار سائقين</option>
            </select>
        </div>
    </div>
</fieldset>
