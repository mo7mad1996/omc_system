<div class="container">
    <?php 
        $sql = "
            SELECT *
            FROM customers 
            WHERE next_continue_date = '" . date('Y-m-d') . "' 
        ";
        // OR res2_continue_date = '" . date('Y-m-d') . "' 
        $res = mysqli_query($conn, $sql);
        $Count = mysqli_num_rows($res);

        if ($Count > 0) {

            include "templates/info.php";
            
            echo "<ul class='p-0 my-3 EditCustomer'>";
            
            while($row = mysqli_fetch_assoc($res)) {

                include "templates/customers/customer.php";
                
            }
            
            echo "</ul>";

        } else {
            echo '<div class="text-center p-5 fs-3">لا يوجد متابعات لليوم</div>';
        }
    ?>
</div>

<script>
    let theLocation = location.toString().split('?')[0];
    document.querySelectorAll('.location').forEach(el => el.setAttribute('value', theLocation));
</script>
