<?php

echo "
<fieldset>
    <legend>ملاحظات</legend>

    <div class='input_group'>
        
        <div class='input_field'>
            <label for='nots'>ملاحظات</label>
            <input id='nots' name='nots' type='text'  value='" . $row['nots'] . "'>
        </div>

        <div class='input_field'>
            <label for='LastCallDate'>تاريخ اخر اتصال</label>
            <input id='LastCallDate' name='LastCallDate' type='date'  value='" . $row['LastCallDate'] . "'>
        </div>

    </div>

</fieldset>
";