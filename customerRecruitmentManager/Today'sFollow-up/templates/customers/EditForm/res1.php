<?php

    echo "
<fieldset>
    <legend>نتيجه (1)</legend>

    <div class='input_group'>

        <div class='input_field'>
            <label for='" . $row['id'] . "res1_called'>تم الاتصال</label>

            <div class='squaredThree'>
                <input type='checkbox' id='" . $row['id'] . "res1_called' " . ( $row['res1_called'] ? "checked" : "" ) . " name='res1_called' value=1/>
                <label for='" . $row['id'] . "res1_called'></label>
            </div>
        </div>

        <div class='input_field'>
            <label for='" . $row['id'] . "res1_offer'>طلب عرض</label>

            <div class='squaredThree'>
                <input type='checkbox'  id='" . $row['id'] . "res1_offer' " . ( $row['res1_offer'] ? "checked" : "" ) . " name='res1_offer' value=1/>
                <label for='" . $row['id'] . "res1_offer'></label>
            </div>
        </div>

        <div class='input_field'>
            <label for='" . $row['id'] . "res1_vist'>طلب زياره</label>

            <div class='squaredThree'>
                <input type='checkbox' id='" . $row['id'] . "res1_vist' " . ( $row['res1_vist'] ? "checked" : "" ) . " name='res1_vist' value=1/>
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
";
