<?php
echo 
'<summary>' . 
    "<span class='col-3'>".  $row['cumpany_name'] . "</span> ". 
    "<span class='col-3'>".  $row['responsible_name'] . "</span>". 
    "<a class='col-3' href='mailto:" .  $row['email'] ."'>" .  $row['email']. "</a>" .
    "<a class='col-2' href='tel:" .  $row['phone'] ."'>" .  $row['phone']. "</a>" .
'</summary>';
