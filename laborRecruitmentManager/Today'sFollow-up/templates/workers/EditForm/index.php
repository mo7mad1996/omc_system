<?php
echo '
<form class="addWorkers mx-0" action="../backend/EditWorker.php" method="get">';

    include "templates/workers/EditForm/time.php";
    echo "<hr>" ;

    include "templates/workers/EditForm/personalData.php";
    echo "<hr>" ;

    include "templates/workers/EditForm/basicsData.php";
    echo "<hr>" ;

    include "templates/workers/EditForm/continue1.php";
    echo "<hr>" ;

    include "templates/workers/EditForm/continue2.php";
    echo "<hr>" ;

    include "templates/workers/EditForm/continue3.php";
    echo "<hr>" ;

    include "templates/workers/EditForm/place.php";
    echo "<hr>" ;
    
   
    include "templates/workers/EditForm/formInfo.php";

    include "templates/workers/EditForm/Buttons.php";

echo "</form>";

?>
<script>
    var theLocation = location.toString().split('?')[0];
    document.querySelectorAll('.location').forEach(el => el.setAttribute('value', theLocation));
</script>
