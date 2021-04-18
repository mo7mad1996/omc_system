<form method="post" class="form_card active" action="../CBD/backend/adduser.php">

	<!-- name -->
	<div class="input_field">
		<label for="name">الاسم</label>
		<input id="name" required name="name" />
	</div>

	<!-- username -->
	<div class="input_field">
		<label for="username">اسم المستخدم</label>
		<input id="username" required name="username" />
	</div>

	<!-- password -->
	<div class="input_field">
		<label for="password">كلمه المرور</label>
		<input id="password" required name="password" />
	</div>

	<!-- code -->
	<div class="input_field">
		<label for="code">كود الموظف</label>
		<input id="code" type="number" required name="code" />
	</div>

	<!-- permission -->
	<div class="input_field">
		<label for="permission">الوظيفه</label>
		<select id="permission" required name="permission">

			<optgroup label="مديرين">
				<option value="ViceChairman">نائب رئيس مجلس الاداره</option>
				<option value="ExDirector">مدير تنفيذي</option>

				<option value="investorsManager">مدير قطاع الاستثمار</option>
				<option value="customersSalesManager">مدير تسويق عملاء</option>
				<option value="LaborMarketingManager">مدير تسويق عمال</option>

				<option value="SalesManager">مدير مبيعات</option>
			</optgroup>

			<optgroup label="موظفين">
				<option value="laborRecruitmentManager">موظف استقطاب عمال</option>
				<option value="customerRecruitmentManager">موظف استقطاب عملاء</option>
			</optgroup>

		</select>
	</div>

	<!-- type of form -->
	<input type="hidden" name="adduser">

	<!-- submit -->
	<hr />
	<div class="buttons">
		<button type="submit" class="blue">إضافه</button>
		<button type="reset">الغاء</button>
	</div>
</form>
