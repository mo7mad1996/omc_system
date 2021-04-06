<fieldset>
    <legend>الميعاد</legend>

    <div class="input_group">
        <div class="input_field">
            <label for="<?php echo $row['id']; ?>the_day">يوم</label>

            <select id="<?php echo $row['id']; ?>the_day" name="the_day">
                <option value="1" <?php echo($row['the_day'] == 1 ? 'selected' : '' );?>>السبت</option>
                <option value="2" <?php echo($row['the_day'] == 2 ? 'selected' : '' );?>>الاحد</option>
                <option value="3" <?php echo($row['the_day'] == 3 ? 'selected' : '' );?>>الاثنين</option>
                <option value="4" <?php echo($row['the_day'] == 4 ? 'selected' : '' );?>>الثلاثاء</option>
                <option value="5" <?php echo($row['the_day'] == 5 ? 'selected' : '' );?>>الاربعاء</option>
                <option value="6" <?php echo($row['the_day'] == 6 ? 'selected' : '' );?>>الخميس</option>
                <option value="0" <?php echo($row['the_day'] == 0 ? 'selected' : '' );?>>الجمعه</option>
            </select>
        </div>

        <div class="input_field">
            <label for="<?php echo $row['id']; ?>registr_date">تاريخ تسجيل العامل</label>

            <input name="registr_date" id="<?php echo $row['id']; ?>registr_date" type="date" />
        </div>
    </div>
</fieldset>