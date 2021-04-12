<header class="header print-none " >
	<div class="container py-2 header-row">
		<div class="logo">
            <a href="/<?php echo json_decode($_SESSION['user'])->permission; ?>"  title="الرئيسيه">
                <img src="/inclouds/document/imgs/logo.png" alt="OMC" />
            </a>
        </div>

		<div class='text-center'>
			مجموعة عمال مصر<br>
			للخدمات الصناعيه
			والصناعات المتخصصه
		</div>

		<div class="menu">
			<button>
				<?php echo json_decode($_SESSION['user'])->name; ?>
			</button>
			<menu>
				<ul>
					<a href="/<?php echo json_decode($_SESSION['user'])->permission; ?>/edit">
						<li>الاعدادات</li>
					</a>
					<a href="/logout">
						<li>خروج</li>
					</a>
				</ul>
			</menu>
		</div>
	</div>
</header>

<script>
	var btn = document.querySelector('.menu button'),
		menu = document.querySelector('.menu menu');

	btn.addEventListener('click', () => menu.classList.toggle('active'));

</script>

