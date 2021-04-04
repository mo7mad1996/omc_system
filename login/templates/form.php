<div class="Login">
    <form action="chk_data_Login.php" method="post">

        <!-- Logo -->
        <div class="logo">
            <img src="/inclouds/document/imgs/logo.png" alt="OMC">
        </div>

        <!-- username -->
        <div class="input_field">
            <input autocomplete="off" required id="username" type="text" name="username" autofocus />
            <label for="username">اسم المستخدم</label>
        </div>

        <!-- password -->
        <div class="input_field">
            <input autocomplete="off" required id="password" type="password" name="password" />
            <label for="password">كلمه المرور</label>
        </div>

        <!-- submit -->
        <button class="submit" type="submit">دخول</button>
    </form>
</div>

<?php

    if(isset($_GET['err'])) {
        echo "<div class='err'><b class='d-block text-center'>خطأ</b>";
        if($_GET['err'] == 'password') {
            echo "كلمه المرور غير صحيحه";
        } else {
            echo "المستخدم غير موجود";
        }
        echo "</div>";
    }

?>