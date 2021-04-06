<?php

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
    </fieldset>";