<div class="container p-4 forms-container">
    <?php
        include "forms/addUser.php";
    ?>
</div>

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
