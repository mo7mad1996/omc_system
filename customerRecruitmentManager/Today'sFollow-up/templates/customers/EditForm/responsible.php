<?php

echo "
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
";
