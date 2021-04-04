<div class="container">
    <?php 
        require_once "../../inclouds/database/connect.php";

        $sql = "
        SELECT *
        FROM customers 
        WHERE res1_next_continue_date = '" . date('Y-m-d') . "' 
        ";
        // OR res2_continue_date = '" . date('Y-m-d') . "' 
        $res = mysqli_query($conn, $sql);
        $Count = mysqli_num_rows($res);

        if ($Count > 0) {
            echo "
                <div class='header info'>
                    <div>عدد $Count عملاء</div>
                    <div> متابعات بتاريخ" .date('Y-m-d') . "</div>
                </div>
            ";

            echo "<ul class='p-0 m-0 mt-3 EditCustomer'>";

            while($row = mysqli_fetch_assoc($res)) {
                echo 
                "<li class='mb-1'>" .
                    '<details>' .
                        '<summary>' . 
                            "<span class='col-3'>".  $row['cumpany_name'] . "</span> ". 
                            "<span class='col-3'>".  $row['responsible_name'] . "</span>". 
                            "<a class='col-3' href='mailto:" .  $row['email'] ."'>" .  $row['email']. "</a>" .
                            "<a class='col-2' href='tel:" .  $row['phone'] ."'>" .  $row['phone']. "</a>" .
                        '</summary> <form class="addcustomer" action="../backend/EditCustomer.php" method="get">';
    echo "
        <fieldset>
            <legend>بيانات اساسيه</legend>
                <div class='input_group'>
                    <div class='input_field'>
                        <label for='init_date'>تاريخ تسجيل العميل</label>
                        <input id='init_date' name='nit_date' type='date' value='" . $row['init_date'] . "'>
                    </div>
                    <div class='input_field'>
                        <label for='cumpany_name'>اسم العميل</label>
                        <input id='cumpany_name' name='cumpany_name' type='text' value='" . $row['cumpany_name'] . "'>
                    </div>
                    <div class='input_field'>
                    <label for='company_type'>نوع القطاع الصناعي</label>
                    <input  id='company_type' name='company_type' value='" . $row['company_type'] . "'>
                </div>
            </div>
        </fieldset>
            <hr>
            <fieldset>
            <legend>العنوان</legend>
            <div class='input_group'>

            
        <div class='input_field'>
        <label for='city'>المدينه</label>
        <input id='city' name='city' value='" . $row['city'] . "'>
    </div>

    <div class='input_field'>
        <label for='area'>المنطقه</label>
        <input id='area' name='area' value='" . $row['area'] . "'>
    </div>
</div>
</fieldset>

<hr>

<fieldset>
<legend>المسؤول</legend>
<div class='input_group'>

    <div class='input_field'>
        <label for='responsible_name'>اسم المسؤول</label>
        <input id='responsible_name' name='responsible_name' type='text' value='" . $row['responsible_name'] . "'>
    </div>

    <div class='input_field'>
        <label for='job'>الوظيفه</label>
        <input id='job' name='job' value='" . $row['job'] . "'>
    </div>

    <div class='input_field'>
        <label for='phone'>رقم التليفون [11 رقم]</label>
        <input id='phone' name='phone' type='tel' pattern='[0-9]{11}' value='" . $row['phone'] . "'>
    </div>


    <div class='input_field'>
        <label for='email'>الايميل</label>
        <input id='email' name='email' type='text' value='" . $row['email'] . "'>
    </div>

    <div class='input_field'>
        <label for='service_type'>نوع الخدمه المطلوبه</label>
        <input id='service_type' name='service_type' value='" . $row['service_type'] . "'>
            
    </div>
</div>
</fieldset>

<hr>

<fieldset>
<legend>نتيجه (1)</legend>
<div class='input_group'>

    <div class='input_field'>
        <label for='" . $row['id'] . "res1_called'>تم الاتصال</label>

        <div class='squaredThree'>
            <input type='checkbox' id='" . $row['id'] . "res1_called' name='res1_called' value=1/>
            <label for='" . $row['id'] . "res1_called'></label>
        </div>
    </div>

    <div class='input_field'>
        <label for='" . $row['id'] . "res1_offer'>طلب عرض</label>

        <div class='squaredThree'>
            <input type='checkbox'  id='" . $row['id'] . "res1_offer' name='res1_offer' value=1/>
            <label for='" . $row['id'] . "res1_offer'></label>
        </div>
    </div>

    <div class='input_field'>
        <label for='" . $row['id'] . "res1_vist'>طلب زياره</label>

        <div class='squaredThree'>
            <input type='checkbox' id='" . $row['id'] . "res1_vist' name='res1_vist' value=1/>
            <label for='" . $row['id'] . "res1_vist'></label>
        </div>
    </div>

    <div class='input_field'>
        <label for='res1_continue_date'>تاريخ المتابعه</label>
        <input id='res1_continue_date' name='res1_continue_date' type='date'  value='" . $row['res1_continue_date'] . " '>
    </div>

    <div class='input_field'>
        <label for='res1_next_continue_date'>تاريخ المتابعه المستقبليه</label>
        <input id='res1_next_continue_date' name='res1_next_continue_date' type='date'  value='" . $row['res1_next_continue_date'] . "' >
    </div>
</div>
</fieldset>

<hr>

<fieldset>
<legend>نتيجه (2)</legend>
<div class='input_group'>

    <div class='input_field'>
        <label for='" . $row['id'] . "res2_sent'>تم ارسال العرض</label>

        <div class='squaredThree'>
            <input type='checkbox' id='" . $row['id'] . "res2_sent' name='res2_sent' value=1 />
            <label for='" . $row['id'] . "res2_sent'></label>
        </div>
    </div>

    <div class='input_field'>
        <label for='" . $row['id'] . "res2_vist'>تم الزياره</label>

        <div class='squaredThree'>
            <input type='checkbox' id='" . $row['id'] . "res2_vist' name='res2_vist' value=1 />
            <label for='" . $row['id'] . "res2_vist'></label>
        </div>
    </div>

    <div class='input_field'>
        <label for='" . $row['id'] . "res2_reject'>تم رفض العرض</label>

        <div class='squaredThree'>
            <input type='checkbox'  id='" . $row['id'] . "res2_reject' name='res2_reject' value=1/>
            <label for='" . $row['id'] . "res2_reject'></label>
        </div>
    </div>

    <div class='input_field'>
        <label for='" . $row['id'] . "res2_accept'>تم قبول العرض</label>

        <div class='squaredThree'>
            <input type='checkbox' id='" . $row['id'] . "res2_accept' name='res2_accept' value=1 />
            <label for='" . $row['id'] . "res2_accept'></label>
        </div>
    </div>

    <div class='input_field'>
        <label for='res2_continue_date'>تاريخ المتابعه</label>
        <input id='res2_continue_date' name='res2_continue_date' type='date' value='" . $row['res2_continue_date'] . "' >
    </div>
</div>
</fieldset>

<hr>

<div class='input_group'>
<div class='input_field'>
    <label for='nots'>ملاحظات</label>
    <input id='nots' name='nots' type='text'  value='" . $row['nots'] . "'>
</div>
</div>

<input type='hidden' name='form_type' value='EditCustomer'>
<input type='hidden' class='location' name='location'>
<input type='hidden' name='id' value='" . $row['id'] . "'>

<div class='buttons'>
<button type='submit'>تعديل</button>
</div>
            ";


                echo '</form></details></li>';  
            }
            
            echo "</ul>";

        } else {
            echo '<div class="text-center">لا يوجد متابعات لليوم</div>';
        }
    ?>
</div>

<script>
    let theLocation = location.toString().split('?')[0];
    document.querySelectorAll('.location').forEach(el => el.setAttribute('value', theLocation));
</script>
