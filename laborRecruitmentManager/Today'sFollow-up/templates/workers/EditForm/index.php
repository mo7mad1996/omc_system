<?php
echo     '
<form class="addWorkers mx-0" action="../backend/EditCustomer.php" method="post">';

    // include "templates/workers/EditForm/basicsData.php";
    echo "<hr>" ;

    include "templates/workers/EditForm/continue3.php";
    echo "<hr>" ;

    include "templates/workers/EditForm/place.php";
    echo "<hr>" ;
    
   
    include "templates/workers/EditForm/formInfo.php";

    include "templates/workers/EditForm/Buttons.php";

echo "</form>";