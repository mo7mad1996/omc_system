<form class="addWorkers" action="/laborRecruitmentManager/backend/addWorkers.php" method="POST">

	<fieldset>
		<legend>الميعاد</legend>
		<div class="input_group">
			<div class="input_field">
				<label for="the_day">يوم</label>

				<select id="the_day" name="the_day">
					<option value="1">السبت</option>
					<option value="2">الاحد</option>
					<option value="3">الاثنين</option>
					<option value="4">الثلاثاء</option>
					<option value="5">الاربعاء</option>
					<option value="6">الخميس</option>
					<option value="0">الجمعه</option>
				</select>
			</div>

			<div class="input_field">
				<label for="registr_date">تاريخ تسجيل العامل</label>

				<input name="registr_date" id="registr_date" type="date" />
			</div>
		</div>
	</fieldset>

	<hr>

	<fieldset>
		<legend>البيانات الشخصيه</legend>
		<div class="input_group">

			<div class="input_field">
				<label for="person_name">اسم العامل</label>

				<input name="person_name" id="person_name" type="text" />
			</div>

			<div class="input_field">
				<label for="qualification">المؤهل</label>

				<select id="qualification" name="qualification">
					<option value="1">لا يقرا و لا يكتب</option>
					<option value="2">بدون مؤهل</option>
					<option value="3">اعدادية</option>
					<option value="4">دبلوم صنايع</option>
					<option value="5">دبلوم تجارة</option>
					<option value="0">دبلوم زراعة</option>
				</select>
			</div>

			<div class="input_field">
				<label for="phone">رقم الهاتف المحمول [11 رقم] </label>

				<input name="phone" id="phone" type="tel" pattern="[0-9]{11}" />
			</div>

			<div class="input_field">
				<label for="city">محافظه</label>
				<select id="city" name="city">
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
			</div>

			<div class="input_field">
				<label for="age">السن</label>
				<input name="age" id="age" type="number" value="21" />
			</div>
		</div>
	</fieldset>

	<hr>

	<fieldset>
		<legend>بيانات اساسيه</legend>
		<div class="input_group">

			<div class="input_field">
				<label for="result">النتيجه</label>

				<select name="result" id="result">
					<option value="1">تجهيز اوراق</option>
					<option value="2">رافض</option>
					<option value="3">لم يتم الرد</option>
					<option value="4">الهاتف مغلق</option>
					<option value="5">غير مناسب للعمل</option>
					<option value="6">مقابة مؤهلات</option>
					<option value="0">اختبار سائقين</option>
				</select>
			</div>

			<div class="input_field">
				<label for="nots">ملاحظات</label>
				<input id="nots" name="nots" />
			</div>

			<div class="input_field">
				<label for="next_continue_date">تاريخ المتابعه المستقبليه</label>
				<input id="next_continue_date" name="next_continue_date" type="date" />
			</div>

			<div class="input_field">
				<label for="final_call">تاريخ اخر اتصال</label>
				<input id="final_call" name="final_call" type="date" />
			</div>
		</div>
	</fieldset>

	<hr>

	<fieldset>
		<legend>متابعه 1</legend>

		<div class="input_group">

			<div class="input_field">
				<label for="continue1_date">تاريخ المتابعه</label>
				<input type="date" id="continue1_date" name="continue1_date" />
			</div>

			<div class="input_field">
				<label for="continue1">النتيجه</label>

				<select name="continue1" id="continue1">
					<option value="1">تجهيز اوراق</option>
					<option value="2">رافض</option>
					<option value="3">لم يتم الرد</option>
					<option value="4">الهاتف مغلق</option>
					<option value="5">غير مناسب للعمل</option>
					<option value="6">مقابة مؤهلات</option>
					<option value="7">غير مناسب للعمل</option>
					<option value="0">اختبار سائقين</option>
				</select>
			</div>
		</div>
	</fieldset>

	<hr>

	<fieldset>
		<legend>متابعه 2</legend>

		<div class="input_group">
			<div class="input_field">
				<label for="continue2_date">تاريخ المتابعه</label>
				<input type="date" id="continue2_date" name="continue2_date" />
			</div>


			<div class="input_field">
				<label for="continue2">النتيجه</label>

				<select name="continue2" id="continue2">
					<option value="1">تجهيز اوراق</option>
					<option value="2">رافض</option>
					<option value="3">لم يتم الرد</option>
					<option value="4">الهاتف مغلق</option>
					<option value="5">غير مناسب للعمل</option>
					<option value="6">مقابة مؤهلات</option>
					<option value="7">غير مناسب للعمل</option>
					<option value="0">اختبار سائقين</option>
				</select>
			</div>
		</div>
	</fieldset>

	<hr>

	<fieldset>
		<legend>متابعه 3</legend>
		<div class="input_group">

			<div class="input_field">
				<label for="continue3_date">تاريخ المتابعه</label>
				<input type="date" id="continue3_date" name="continue3_date" />
			</div>

			<div class="input_field">
				<label for="continue3">النتيجه</label>

				<select name="continue3" id="continue3">
					<option value="1">تجهيز اوراق</option>
					<option value="2">رافض</option>
					<option value="3">لم يتم الرد</option>
					<option value="4">الهاتف مغلق</option>
					<option value="5">غير مناسب للعمل</option>
					<option value="6">مقابة مؤهلات</option>
					<option value="7">غير مناسب للعمل</option>
					<option value="0">اختبار سائقين</option>
				</select>
			</div>
		</div>
	</fieldset>

	<hr>

	<fieldset>
		<legend>المكان</legend>

		<div class="input_group">
			<div class="input_field">
				<label for="factory">المصنع</label>
				<input name="factory" id="factory" />
			</div>
		</div>
	</fieldset>

	<input type="hidden" name="added_by" value="<?php echo json_decode($_SESSION['user'])->id ; ?>" />
	<input type="hidden" name="location" id="location" />

	<div class="buttons">
		<button type="submit">إضافه</button>
		<button type="reset">إلغاء</button>
	</div>
</form>
<script>
	let theLocation = location.toString().split('?')[0];
	document.getElementById('location').setAttribute('value', theLocation);
</script>

<?php
	if(isset($_GET['msg'])) {
		if($_GET['msg'] == 'done') {
			echo "<div class='msg Success' onclick='this.remove()'><b>تم</b> تم بنجاح اضافه العميل</div>";
		}
	}
?>
