<div class="container p-4 forms-container">
    <?php
        include "forms/addUser.php";
    ?>
</div>

<?php 
    if(isset($_GET['msg'])) {
        if($_GET['msg'] == 'Success') {
            echo "<div class='msg Success'><b class='d-block text-center'>تم</b>تم تسجيل المستخدم بنجاح</div>";
        }
        if($_GET['msg'] == 'err') {
            echo "<div class='msg err'><b class='d-block text-center'>خطأ</b>المستخدم موجود بالفعل</div>";
        }
    }
?>
