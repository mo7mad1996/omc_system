<?php

echo "
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
";