<div class="dashbord">
	<form action="/inclouds/database/edituser.php" method="POST" class="form_card active mx-auto my-4">
		<!-- name -->
		<div class="input_field">
			<label for="name">الاسم</label>
			<input id="name" name="name" required value="<?php echo json_decode($_SESSION['user'])->name;?>" />
		</div>

		<!-- username -->
		<div class="input_field">
			<label for="username">اسم المستخدم</label>
			<input id="username" name="username" required value="<?php echo json_decode($_SESSION['user'])->username;?>" />
		</div>

		<!-- password -->
		<div class="input_field">
			<label for="password">كلمه المرور الحاليه</label>
			<input id="password" name="password" required />
		</div>

		<!-- password -->
		<div class="input_field">
			<label for="newpassword">كلمه المرور الجديده</label>
			<input id="newpassword" name="newpassword" />
		</div>

		<!-- user id -->
		<input type="hidden" name="id" value="<?php echo json_decode($_SESSION['user'])->id;?>" />

		<!-- submit -->
		<div class="buttons">
			<button type="submit" id="submitEditForm" disabled>حفظ</button>
		</div>
	</form>
</div>

<script>
	let passFild = document.querySelector('input[name="password"]'),
		submi = document.getElementById('submitEditForm');

	passFild.addEventListener('input', () => chkvalue());

	function chkvalue() {
		if (passFild.value === '<?php echo json_decode($_SESSION["user"])->password;?>') {
			submi.disabled = false
		} else {
			submi.disabled = true
		}
	}
</script>


<?php 
	if(isset($_GET['done'])) {
		echo "<div class='done'>تم تعديل البيانات</div>";
	}
?>
