
<?php
    if($rows_count > 0){
        echo '<table class="table table-striped ">
            <thead>
                <tr>
                    <th scope="col" class="id">#</th>
                    <th scope="col" class="init_date">تاريخ التسجيل</th>
                    <th scope="col" class="cumpany_name">اسم العميل</th>
                    <th scope="col" class="company_type">نوع القطاع الصناعي</th>
                    <th scope="col" class="city">المدينه</th>
                    <th scope="col" class="area">المنطقه</th>
                    <th scope="col" class="responsible_name">اسم المسؤول</th>
                    <th scope="col" class="job">الوظيفه</th>
                    <th scope="col" class="phone">التليفون</th>
                    <th scope="col" class="email">الايميل</th>
                    <th scope="col" class="service_type">الخدمه المطلوبه</th>
                    <th scope="col" class="res1_called">تم الاتصال</th>
                    <th scope="col" class="res1_offer">طلب عرض</th>
                    <th scope="col" class="res1_vist">طلب زياره</th>
                    <th scope="col" class="res1_continue_date">تاريخ المتابعه</th>
                    <th scope="col" class="res1_next_continue_date">تاريخ المتابعه المستقبليه</th>
                    <th scope="col" class="res2_sent">تم ارسال العرض</th>
                    <th scope="col" class="res2_vist">تم الزياره</th>
                    <th scope="col" class="res2_reject">تم رفض العرض</th>
                    <th scope="col" class="res2_accept">تم قبول العرض</th>
                    <th scope="col" class="res2_continue_date">تاريخ المتابعه</th>
                    <th scope="col" class="nots">ملاحظات</th>
                    <th scope="col" class="LastCallDate">تاريخ اخر اتصال</th>
                    <th scope="col" class="added_by">اضيف بواسطه</th>
                </tr>
            </thead>
        <tbody>';

        while($row = mysqli_fetch_assoc($res)) {
            $l = "SELECT name FROM users WHERE id = " . $row['added_by'];
            $r = mysqli_query($conn, $l);
            
            while($d = mysqli_fetch_assoc($r)) {
                $addedBy =  $d['name'];
            }

            echo
            "
                <tr>
                    <th scope=row class='id'>" . $row['id'] . "</th>
                    <td class='init_date'>" . $row['init_date'] . "</td>
                    <td class='cumpany_name'>" . $row['cumpany_name'] . "</td>
                    <td class='company_type'>" . $row['company_type'] . "</td>
                    <td class='city'>" . $row['city'] . "</td>
                    <td class='area'>" . $row['area'] . "</td>
                    <td class='responsible_name'>" . $row['responsible_name'] . "</td>
                    <td scope=row  class='job'>" . $row['job'] . "</td>
                    <td class='phone text-left'>" . $row['phone'] . "</td>
                    <td class='email'>" . $row['email'] . "</td>
                    <td class='service_type'>" . $row['service_type'] . "</td>
                    <td class='res1_called'>" . $row['res1_called'] . "</td>
                    <td class='res1_offer'>" . $row['res1_offer'] . "</td>
                    <td class='res1_vist'>" . $row['res1_vist'] . "</td>
                    <td class='res1_continue_date'>" . $row['res1_continue_date'] . "</td>
                    <td class='res1_next_continue_date'>" . $row['res1_next_continue_date'] . "</td>
                    <td class='res2_sent'>" . $row['res2_sent'] . "</td>
                    <td class='res2_vist'>" . $row['res2_vist'] . "</td>
                    <td class='res2_reject'>" . $row['res2_reject'] . "</td>
                    <td class='res2_accept'>" . $row['res2_accept'] . "</td>
                    <td class='res2_continue_date'>" . $row['res2_continue_date'] . "</td>
                    <td class='nots'>" . $row['nots'] . "</td>
                    <td class='LastCallDate'>" . $row['LastCallDate'] . "</td>
                    <td class='added_by'>" . $addedBy . "</td>
                </tr>
                
            ";
        }

        echo '</tbody></table>';
    }
?>
