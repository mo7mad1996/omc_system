<?php
    include_once "../../LaborMarketingManager/Reports/template/data.php"; 
    include_once "../../inclouds/database/connect.php"; 
    $arr = $titles;
?>
<div class="search_by print-none ">
    <h3>بحث بواسطه</h3>

    <div class="form-control">
        <div class="group ">
            <select id="by"> 
                <?php 
                    foreach($arr as $key => $value){
                        if($key == 'id') {$value = 'الكل';}     
                ?>
                    <option value="<?php echo $key;?>"><?php echo $value;?></option>
                <?php } ?>
            </select>
            <form>
                <input id="formInput" type="text" class="d-none" />
                
                <select data-id="the_day" class="d-none">
					<option value="1">السبت</option>
					<option value="2">الاحد</option>
					<option value="3">الاثنين</option>
					<option value="4">الثلاثاء</option>
					<option value="5">الاربعاء</option>
					<option value="6">الخميس</option>
					<option value="0">الجمعه</option>
				</select>

				<select data-id="qualification" class="d-none">
					<option value="1">لا يقرا و لا يكتب</option>
					<option value="2">بدون مؤهل</option>
					<option value="3">اعدادية</option>
					<option value="4">دبلوم صنايع</option>
					<option value="5">دبلوم تجارة</option>
					<option value="6">محو اميه</option>
					<option value="0">دبلوم زراعة</option>
					<option value="7">طالب </option>
					<option value="8">مؤهل عالي</option>
				</select>

                <select data-id="city" class=d-none>
					<option value="1">الاسكندرية</option>
					<option value="2">الاسماعيلية</option>
					<option value="3">اسوان</option>
					<option value="4">اسيوط</option>
					<option value="5">الاقصر</option>
					<option value="6">البحر الاحمر</option>
					<option value="7">البحيرة</option>
					<option value="8">بني سويف</option>
					<option value="9">بورسعيد</option>
					<option value="10">جنوب سيناء</option>
					<option value="11">الجيزة</option>
					<option value="12">الدقهليه</option>
					<option value="13">دمياط</option>
					<option value="14">سوهاج</option>
					<option value="15">السويس</option>
					<option value="16">الشرقيه</option>
					<option value="17">شمال سيناء</option>
					<option value="18">الغربيه</option>
					<option value="19">الفيوم</option>
					<option value="20">القاهرة</option>
					<option value="21">القليوبية</option>
					<option value="22">قنا</option>
					<option value="23">كفرالشيخ</option>
					<option value="24">مطروح</option>
					<option value="25">المنوفيه</option>
					<option value="26">المنيا</option>
					<option value="0">الوادي الجديد</option>
				</select>
                
                <select data-id="result" class="d-none">
					<option value="1">تجهيز اوراق</option>
					<option value="2">رافض</option>
					<option value="3">لم يتم الرد</option>
					<option value="4">الهاتف مغلق</option>
					<option value="5">غير مناسب للعمل</option>
					<option value="6">مقابة مؤهلات</option>
					<option value="0">اختبار سائقين</option>
				</select>

                <select data-id='formSelect' class="d-none" >
                    <?php 
                        $s = "SELECT name, id FROM users WHERE permission = 'laborRecruitmentManager'";
                        $p = mysqli_query($conn, $s);
                        while ($row = mysqli_fetch_assoc($p)) {
                            echo "<option value=" . $row['id'] . ">" . $row['name'] . "</option>";
                        }
                    ?>
                </select>
                <button type="subm  it">فلتره</button>
            </form>
        </div>

        <div class="group col">
            <div class="n">
                <button onclick="print()" class="printBTN">طباعه</button>
                عدد الصفوف:
                <span><?php echo $rows_count;   ?></span>
            </div>
            <details>
                <summary><span>الاعمده</span></summary>
                <div id="colomns"></div>
            </details>
        </div>
    </div>
</div>
