<?php
echo 
'<summary>' . 
    "<span class='col-3'>".  $row['person_name'] . "</span> ". 
    "<span class='col-3'>". $qualifications[ $row['qualification'] ] . "</span>". 
    "<a class='col-2' href='tel:" .  $row['phone'] ."'>" .  $row['phone']. "</a>" .
'</summary>';

