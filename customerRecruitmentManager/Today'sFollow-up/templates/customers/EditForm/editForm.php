<?php
echo     '
<form class="addcustomer" action="../backend/EditCustomer.php" method="get">';

    include "templates/customers/EditForm/basicsData.php";
    echo "<hr>" ;
    
    include "templates/customers/EditForm/address.php";
    echo "<hr>" ;
    
    include "templates/customers/EditForm/responsible.php";
    echo "<hr>" ;
    
    include "templates/customers/EditForm/res1.php";
    echo "<hr>" ;
    
    include "templates/customers/EditForm/res2.php";
    echo "<hr>" ;

    include "templates/customers/EditForm/nots.php";
    echo "<hr>" ;

    include "templates/customers/EditForm/formInfo.php";
    echo "<hr>" ;

    include "templates/customers/EditForm/Buttons.php";
    

echo "</form>";