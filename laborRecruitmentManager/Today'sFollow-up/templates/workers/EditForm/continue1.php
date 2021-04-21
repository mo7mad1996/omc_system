<fieldset>
    <legend>متابعه 1</legend>
    <div class="input_group">

        <div class="input_field">
            <label for="<?php echo $row['id']; ?>continue1_date">تاريخ المتابعه</label>
            <input type="date" id="<?php echo $row['id']; ?>continue1_date" name="continue1_date" value="<?php echo $row['continue1_date']; ?>" />
        </div>

        <div class="input_field">
            <label for="<?php echo $row['id']; ?>continue1">النتيجه</label>

            <select name="continue1" id="<?php echo $row['id']; ?>continue1">
                <option value="1" <?php echo ($row['continue1'] == 1 ? 'selected' : "" ); ?> >تجهيز اوراق</option>
                <option value="2" <?php echo ($row['continue1'] == 2 ? 'selected' : "" ); ?> >رافض</option>
                <option value="3" <?php echo ($row['continue1'] == 3 ? 'selected' : "" ); ?> >لم يتم الرد</option>
                <option value="4" <?php echo ($row['continue1'] == 4 ? 'selected' : "" ); ?> >الهاتف مغلق</option>
                <option value="5" <?php echo ($row['continue1'] == 5 ? 'selected' : "" ); ?> >غير مناسب للعمل</option>
                <option value="6" <?php echo ($row['continue1'] == 6 ? 'selected' : "" ); ?> >مقابة مؤهلات</option>
                <option value="7" <?php echo ($row['continue1'] == 7 ? 'selected' : "" ); ?> >غير مناسب للعمل</option>
                <option value="0" <?php echo ($row['continue1'] == 0 ? 'selected' : "" ); ?> >اختبار سائقين</option>
            </select>
        </div>
    </div>
</fieldset>
