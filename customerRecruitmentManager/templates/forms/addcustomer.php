<form class="addcustomer my-4" action="/customerRecruitmentManager/backend/addcustomer.php" method="POST">
	<fieldset>
		<legend>بيانات اساسيه</legend>
		<div class="input_group">
			<div class="input_field">
				<label for="init_date">تاريخ تسجيل العميل</label>
				<input id="init_date" name="init_date" type="date">
			</div>

			<div class="input_field">
				<label for="cumpany_name">اسم العميل</label>
				<input id="cumpany_name" name="cumpany_name" type="text">
			</div>

			<div class="input_field">
				<label for="company_type">نوع القطاع الصناعي</label>
				<select id="company_type" name="company_type">
					<option value="بلاستيك">بلاستيك</option>
					<option value="دوائي">دوائي</option>
					<option value="طباعة و تغليف">طباعة و تغليف</option>
					<option value="غذائي">غذائي</option>
					<option value="كهرباء و الكترونيات">كهرباء و الكترونيات</option>
					<option value="مخازن و لوجيستيات">مخازن و لوجيستيات</option>
					<option value="مزارع">مزارع</option>
					<option value="معدنية و مواد بناء">معدنية و مواد بناء</option>
					<option value="ورقي و كرتون">ورقي و كرتون</option>
					<option value="اخرى">اخرى</option>
				</select>
				<input type="text" class="d-none">
			</div>
		</div>
	</fieldset>

	<hr>

	<fieldset>
		<legend>العنوان</legend>
		<div class="input_group">

			<div class="input_field">
				<label for="city">المدينه</label>
				<select id="city" name="city">
					<option value="الاسكندرية">الاسكندرية</option>
					<option value="الاسماعيلية">الاسماعيلية</option>
					<option value="السادات">السادات</option>
					<option value="السادس من أكتوبر">السادس من أكتوبر</option>
					<option value="العاشر">العاشر</option>
					<option value="العبور">العبور</option>
					<option value="العين السخنة">العين السخنة</option>
					<option value="الفيوم">الفيوم</option>
					<option value="أبورواش">أبورواش</option>
					<option value="بني سويف">بني سويف</option>
					<option value="اخرى">اخرى</option>
				</select>
				<input type="text" class="d-none">
			</div>

			<div class="input_field">
				<label for="area">المنطقه</label>
				<select id="area" name="area">
					<option value="الاولى">الاولى</option>
					<option value="الثانية">الثانية</option>
					<option value="الثالثة">الثالثة</option>
					<option value="الرابعة">الرابعة</option>
					<option value="الخامسة">الخامسة</option>
					<option value="السادسة">السادسة</option>
					<option value="مجمع">مجمع</option>
					<option value="اخرى">اخرى</option>
				</select>
				<input type="text" class="d-none">
			</div>
		</div>
	</fieldset>

	<hr>

	<fieldset>
		<legend>المسؤول</legend>
		<div class="input_group">

			<div class="input_field">
				<label for="responsible_name">اسم المسؤول</label>
				<input id="responsible_name" name="responsible_name" type="text">
			</div>

			<div class="input_field">
				<label for="job">الوظيفه</label>
				<select id="job" name="job">
					<option value="HR">HR</option>
					<option value="رئيس مجلس إدارة">رئيس مجلس إدارة</option>
					<option value="مدير انتاج">مدير انتاج</option>
					<option value="مدير عام">مدير عام</option>
					<option value="مدير تنفيذي">مدير تنفيذي</option>
					<option value="مدير إداري">مدير إداري</option>
					<option value="مدير جودة">مدير جودة</option>
					<option value="مدير مالي">مدير مالي</option>
					<option value="مدير مبيعات">مدير مبيعات</option>
					<option value="مدير مشتريات">مدير مشتريات</option>
					<option value="اخرى">اخرى</option>
				</select>
				<input type="text" class="d-none">
			</div>

			<div class="input_field">
				<label for="phone">رقم التليفون [11 رقم]</label>
				<input id="phone" name="phone" type="tel" pattern="[0-9]{11}">
			</div>


			<div class="input_field">
				<label for="email">الايميل</label>
				<input id="email" name="email" type="text">
			</div>

			<div class="input_field">
				<label for="service_type">نوع الخدمه المطلوبه</label>
				<select id="service_type" name="service_type">
					<option value="يونيفورم">يونيفورم</option>
					<option value="تشغيل عمال">تشغيل عمال</option>
					<option value="مستلزمات طبية">مستلزمات طبية</option>
					<option value="انشاءات صناعية">انشاءات صناعية</option>
					<option value="تعبئة وتغليف">تعبئة وتغليف</option>
					<option value="الاستيراد وتصدير">الاستيراد وتصدير</option>
					<option value="اخرى">اخرى</option>
				</select>
				<input type="text" class="d-none">
			</div>
		</div>
	</fieldset>

	<hr>

	<fieldset>
		<legend>نتيجه (1)</legend>
		<div class="input_group">

			<div class="input_field">
				<label for="res1_called">تم الاتصال</label>

				<div class="squaredThree">
					<input type="checkbox" value="1" id="res1_called" name="res1_called" />
					<label for="res1_called"></label>
				</div>
			</div>

			<div class="input_field">
				<label for="res1_offer">طلب عرض</label>

				<div class="squaredThree">
					<input type="checkbox" value="1" id="res1_offer" name="res1_offer" />
					<label for="res1_offer"></label>
				</div>
			</div>

			<div class="input_field">
				<label for="res1_vist">طلب زياره</label>

				<div class="squaredThree">
					<input type="checkbox" value="1" id="res1_vist" name="res1_vist" />
					<label for="res1_vist"></label>
				</div>
			</div>

			<!-- <div class="input_field">
				<label for="res1_continue_date">تاريخ المتابعه</label>
				<input id="res1_continue_date" name="res1_continue_date" type="date">
			</div> -->

			<div class="input_field">
				<label for="next_continue_date">تاريخ المتابعه المستقبليه</label>
				<input id="next_continue_date" name="next_continue_date" type="date">
			</div>
		</div>
	</fieldset>

	<hr>

	<fieldset>
		<legend>نتيجه (2)</legend>
		<div class="input_group">

			<div class="input_field">
				<label for="res2_sent">تم ارسال العرض</label>

				<div class="squaredThree">
					<input type="checkbox" value="1" id="res2_sent" name="res2_sent" />
					<label for="res2_sent"></label>
				</div>
			</div>

			<div class="input_field">
				<label for="res2_vist">تم الزياره</label>

				<div class="squaredThree">
					<input type="checkbox" value="1" id="res2_vist" name="res2_vist" />
					<label for="res2_vist"></label>
				</div>
			</div>

			<div class="input_field">
				<label for="res2_reject">تم رفض العرض</label>

				<div class="squaredThree">
					<input type="checkbox" value="1" id="res2_reject" name="res2_reject" />
					<label for="res2_reject"></label>
				</div>
			</div>

			<div class="input_field">
				<label for="res2_accept">تم قبول العرض</label>

				<div class="squaredThree">
					<input type="checkbox" value="1" id="res2_accept" name="res2_accept" />
					<label for="res2_accept"></label>
				</div>
			</div>
<!-- 
			<div class="input_field">
				<label for="res2_continue_date">تاريخ المتابعه</label>
				<input id="res2_continue_date" name="res2_continue_date" type="date">
			</div> -->
		</div>
	</fieldset>

	<hr>

	<fieldset>
		<legend>ملاحظات</legend>

		<div class='input_group'>

			<div class='input_field'>
				<label for='nots'>ملاحظات</label>
				<input id='nots' name='nots' type='text'>
			</div>

			<div class='input_field'>
				<label for='LastCallDate'>تاريخ اخر اتصال</label>
				<input id='LastCallDate' name='LastCallDate' type='date'>
			</div>
		</div>

	</fieldset>

	<hr>

	<input type="hidden" value="<?php echo json_decode($_SESSION['user'])->id ; ?>" name="added_by">
	<input type="hidden" id="location" name="location">

	<hr>

	<div class="buttons">
		<button type="submit">إضافه</button>
		<button type="reset">إلغاء</button>
	</div>
</form>

<script>
	document.querySelectorAll('select').forEach(el => fun(el));

	function fun(el) {
		el.addEventListener('change', () => events(el))

	}

	function events(el) {

		if (el.value == 'اخرى') {

			el.nextElementSibling.setAttribute('name', el.getAttribute('name'))
			el.setAttribute('name', '')

			el.nextElementSibling.setAttribute('id', el.getAttribute('id'))
			el.setAttribute('id', '')

			el.nextElementSibling.classList.toggle('d-none')
			el.classList.toggle('d-none')

			el.nextElementSibling.focus()
		}
	}


	let theLocation = location.toString().split('?')[0];
	document.getElementById('location').setAttribute('value', theLocation);</script>

<?php
	if(isset($_GET['msg'])) {
		if($_GET['msg'] == 'done') {
			echo "<div class='msg Success' onclick='this.remove()'><b>تم</b> تم بنجاح اضافه العميل</div>";
		}
	}
?>
