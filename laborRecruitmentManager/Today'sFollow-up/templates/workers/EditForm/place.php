<?php
echo '
<fieldset>
    <legend>المكان</legend>

    <div class="input_group">
        <div class="input_field">
            <label for="' . $row['id'] . 'factory">المصنع</label>
            <input name="factory" id="' . $row['id'] . 'factory" value="' . $row['factory'] . '" />
        </div>
    </div>
</fieldset>
';