<form method="post" class="form_card active m-auto" action="../../CBD/backend/adduser.php">

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
			<option value="customerRecruitmentManager">موظف استقطاب عملاء</option>
		</select>
	</div>

	<!-- type of form -->
	<input type="hidden" name="adduser">
	<input type="hidden" name="location" id="location">

	<!-- submit -->
	<hr />
	<div class="buttons">
		<button type="submit" class="blue">إضافه</button>
		<button type="reset">الغاء</button>
	</div>
</form>

<script>
	let theLocation = location.toString().split('?')[0];
	document.getElementById('location').setAttribute('value', theLocation);
</script>


<?php 
    if(isset($_GET['msg'])) {
        if($_GET['msg'] == 'Success') {
            echo "<div class='msg Success text-center'><b class='d-block'>تم</b>تم تسجيل المستخدم بنجاح</div>";
        }
        if($_GET['msg'] == 'err') {
            echo "<div class='msg err text-center'><b class='d-block '>خطأ</b>اسم المستخدم او كود الموظف <br>موجودين بالفعل</div>";
        }
    }
?>
