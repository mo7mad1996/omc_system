<fieldset>
    <legend>البيانات الشخصيه</legend>
    <div class="input_group">

        <div class="input_field">
            <label for="<?php echo $row['id']; ?>person_name">اسم العامل</label>

            <input name="person_name" id="<?php echo $row['id']; ?>person_name" type="text"  value="<?php echo $row['person_name']; ?>" />
        </div>

        <div class="input_field">
            <label for="<?php echo $row['id']; ?>qualification">المؤهل</label>

            <select id="<?php echo $row['id']; ?>qualification" name="qualification">
                <option <?php echo($row['qualification'] == 1 ? 'selected' : '' );?> value="1">لا يقرا و لا يكتب</option>
                <option <?php echo($row['qualification'] == 2 ? 'selected' : '' );?> value="2">بدون مؤهل</option>
                <option <?php echo($row['qualification'] == 3 ? 'selected' : '' );?> value="3">اعدادية</option>
                <option <?php echo($row['qualification'] == 4 ? 'selected' : '' );?> value="4">دبلوم صنايع</option>
                <option <?php echo($row['qualification'] == 5 ? 'selected' : '' );?> value="5">دبلوم تجارة</option>
                <option <?php echo($row['qualification'] == 0 ? 'selected' : '' );?> value="0">دبلوم زراعة</option>
                <option <?php echo($row['qualification'] == 6 ? 'selected' : '' );?> value="6">محو أميه</option>
                <option <?php echo($row['qualification'] == 7 ? 'selected' : '' );?> value="7">طالب</option>
                <option <?php echo($row['qualification'] == 8 ? 'selected' : '' );?> value="8">مؤهل عالي</option>
            </select>
        </div>

        <div class="input_field">
            <label for="<?php echo $row['id']; ?>phone">رقم الهاتف المحمول [11 رقم] </label>

            <input name="phone" id="<?php echo $row['id']; ?>phone" type="tel" pattern="[0-9]{11}"   value="<?php echo $row['phone']; ?>" />
        </div>

        <div class="input_field">
            <label for="<?php echo $row['id']; ?>city">محافظه</label>
            <select id="<?php echo $row['id']; ?>city" name="city">
                <option value="1" <?php echo($row['city'] == 1 ? 'selected' : '' );?>>الاسكندرية</option>
                <option value="2" <?php echo($row['city'] == 2 ? 'selected' : '' );?>>الاسماعيلية</option>
                <option value="3" <?php echo($row['city'] == 3 ? 'selected' : '' );?>>اسوان</option>
                <option value="4" <?php echo($row['city'] == 4 ? 'selected' : '' );?>>اسيوط</option>
                <option value="5" <?php echo($row['city'] == 5 ? 'selected' : '' );?>>الاقصر</option>
                <option value="6" <?php echo($row['city'] == 6 ? 'selected' : '' );?>>البحر الاحمر</option>
                <option value="7" <?php echo($row['city'] == 7 ? 'selected' : '' );?>>البحيرة</option>
                <option value="8" <?php echo($row['city'] == 8 ? 'selected' : '' );?>>بني سويف</option>
                <option value="9" <?php echo($row['city'] == 9 ? 'selected' : '' );?>>بورسعيد</option>
                <option value="10" <?php echo($row['city'] == 10 ? 'selected' : '' );?>>جنوب سيناء</option>
                <option value="11" <?php echo($row['city'] == 11 ? 'selected' : '' );?>>الجيزة</option>
                <option value="12" <?php echo($row['city'] == 12 ? 'selected' : '' );?>>الدقهليه</option>
                <option value="13" <?php echo($row['city'] == 13 ? 'selected' : '' );?>>دمياط</option>
                <option value="14" <?php echo($row['city'] == 14 ? 'selected' : '' );?>>سوهاج</option>
                <option value="15" <?php echo($row['city'] == 15 ? 'selected' : '' );?>>السويس</option>
                <option value="16" <?php echo($row['city'] == 16 ? 'selected' : '' );?>>الشرقيه</option>
                <option value="17" <?php echo($row['city'] == 17 ? 'selected' : '' );?>>شمال سيناء</option>
                <option value="18" <?php echo($row['city'] == 18 ? 'selected' : '' );?>>الغربيه</option>
                <option value="19" <?php echo($row['city'] == 19 ? 'selected' : '' );?>>الفيوم</option>
                <option value="20" <?php echo($row['city'] == 20 ? 'selected' : '' );?>>القاهرة</option>
                <option value="21" <?php echo($row['city'] == 21 ? 'selected' : '' );?>>القليوبية</option>
                <option value="22" <?php echo($row['city'] == 22 ? 'selected' : '' );?>>قنا</option>
                <option value="23" <?php echo($row['city'] == 23 ? 'selected' : '' );?>>كفرالشيخ</option>
                <option value="24" <?php echo($row['city'] == 24 ? 'selected' : '' );?>>مطروح</option>
                <option value="25" <?php echo($row['city'] == 25 ? 'selected' : '' );?>>المنوفيه</option>
                <option value="26" <?php echo($row['city'] == 26 ? 'selected' : '' );?>>المنيا</option>
                <option value="0" <?php echo($row['city'] == 0 ? 'selected' : '' );?>>الوادي الجديد</option>
            </select>
        </div>

        <div class="input_field">
            <label for="<?php echo $row['id']; ?>age">السن</label>
            <input name="age" id="<?php echo $row['id']; ?>age" type="number" value="<?php echo $row['age']; ?>" />
        </div>
        
        <div class="input_field">
            <label for="<?php echo $row['id']; ?>job_title">المهنه او الحرفه</label>
            <input name="job_title" id="<?php echo $row['id']; ?>job_title" type="text"  value="<?php echo $row['job_title']; ?>" />
        </div>
    </div>
</fieldset>