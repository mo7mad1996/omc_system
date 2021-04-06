<?php
echo "
<div class='header info'>
    <div> $Count " .( $Count > 2 ? "عملاء" : "عميل" ). "</div>
    <div> متابعات بتاريخ " .date('Y-m-d') . "</div>
</div>
";