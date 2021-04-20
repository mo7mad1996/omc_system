<?php

echo "
<fieldset>
    <legend>نتيجه (2)</legend>

    <div class='input_group'>

        <div class='input_field'>
            <label for='" . $row['id'] . "res2_sent'>تم ارسال العرض</label>

            <div class='squaredThree'>
                <input type='checkbox' id='" . $row['id'] . "res2_sent' " . ( $row['res2_sent'] ? "checked" : "" ) . " name='res2_sent' value=1 />
                <label for='" . $row['id'] . "res2_sent'></label>
            </div>
        </div>

        <div class='input_field'>
            <label for='" . $row['id'] . "res2_vist'>تم الزياره</label>

            <div class='squaredThree'>
                <input type='checkbox' id='" . $row['id'] . "res2_vist' " . ( $row['res2_vist'] ? "checked" : "" ) . " name='res2_vist' value=1 />
                <label for='" . $row['id'] . "res2_vist'></label>
            </div>
        </div>

        <div class='input_field'>
            <label for='" . $row['id'] . "res2_reject'>تم رفض العرض</label>

            <div class='squaredThree'>
                <input type='checkbox'  id='" . $row['id'] . "res2_reject' " . ( $row['res2_reject'] ? "checked" : "" ) . " name='res2_reject' value=1/>
                <label for='" . $row['id'] . "res2_reject'></label>
            </div>
        </div>

        <div class='input_field'>
            <label for='" . $row['id'] . "res2_accept'>تم قبول العرض</label>

            <div class='squaredThree'>
                <input type='checkbox' id='" . $row['id'] . "res2_accept' " . ( $row['res2_accept'] ? "checked" : "" ) . " name='res2_accept' value=1 />
                <label for='" . $row['id'] . "res2_accept'></label>
            </div>
        </div>

    </div>
</fieldset>
";