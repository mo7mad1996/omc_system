<?php

    $titles = array(
        "id"                 => "#",
        "init_date"          => "تاريخ التسجيل",
        "cumpany_name"       => "اسم العميل",
        "company_type"       => "نوع القطاع الصناعي",
        "city"               => "المدينه",
        "area"               => "المنطقه",
        "responsible_name"   => "اسم المسؤول",
        "job"                => "الوظيفه",
        "phone"              => "التليفون",
        "email"              => "الايميل",
        "service_type"       => "الخدمه المطلوبه",
        "res1_called"        => "تم الاتصال",
        "res1_offer"         => "طلب عرض",
        "res1_vist"          => "طلب زياره",
        "next_continue_date" => "تاريخ المتابعه المستقبليه",
        "res2_sent"          => "تم ارسال العرض",
        "res2_vist"          => "تم الزياره",
        "res2_reject"        => "تم رفض العرض",
        "res2_accept"        => "تم قبول العرض",
        "nots"               => "ملاحظات",
        "LastCallDate"       => "تاريخ اخر اتصال",
        "added_by"           => "اضيف بواسطه"
    );

    if($rows_count > 1){
        echo '<table class="table table-striped "><thead><tr>';
        
            foreach($titles as $key => $value) {
                print "
                    <th scope='col' class=$key>$value</th>
                ";
            }

        echo '</tr></thead><tbody>';

        while($row = mysqli_fetch_assoc($res)) {
            $l = "SELECT name FROM users WHERE id = " . $row['added_by'];
            $r = mysqli_query($conn, $l);
            
            while($d = mysqli_fetch_assoc($r)) {
                $addedBy =  $d['name'];
            }

            echo "<tr>";
                foreach($titles as $key => $value) {
                    if(!($key == 'added_by')) {
                        echo "<td class='$key'>" . $row[$key] . "</td>";
                    }  else {
                        echo "<td class='$key'>" . $addedBy . "</td>";
                    }
                }
            echo "</tr>";
        }

        echo '</tbody></table>';
        
    } else if($rows_count == 1) {
        
        echo "<div class='company_id'>";

        while($row = mysqli_fetch_assoc($res)) {
            $l = "SELECT name FROM users WHERE id = " . $row['added_by'];
            $r = mysqli_query($conn, $l);
            
        while($d = mysqli_fetch_assoc($r)) {
                $addedBy =  $d['name'];
        }
        
        foreach($titles as $key => $value){
            

                if(!($key == 'added_by')) {
                    echo "<div class='$key'>$value <div>" . $row[$key] . "</div></div>";
                } else {
                    echo "<div class='$key'>$value <div>" . $addedBy . "</div></div>";
                }
            }
        }

        echo "</div>";
    }
?>
