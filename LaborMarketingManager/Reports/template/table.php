
<?php
    include "template/data.php";

    if($rows_count > 0){
        echo '<table class="table table-striped ">
            <thead>
                <tr>
                    <th scope="col" class="id">#</th>
                    <th scope="col" class="the_day">اليوم</th>
                    <th scope="col" class="registr_date">تاريخ التسجيل</th>
                    <th scope="col" class="person_name">اسم العامل</th>
                    <th scope="col" class="qualification">المؤهل</th>
                    <th scope="col" class="phone">التليفون</th>
                    <th scope="col" class="city">محافظه</th>
                    <th scope="col" class="age">السن</th>
                    <th scope="col" class="result">النتيجه</th>
                    <th scope="col" class="nots">ملاحظات</th>
                    <th scope="col" class="next_continue_date">تاريخ المتابعه المستقبليه</th>
                    <th scope="col" class="final_call">تاريخ اخر اتصال</th>
                    <th scope="col" class="continue1">نتيجه اول متابعه</th>
                    <th scope="col" class="continue1_date">تاريخ اول متابعه</th>
                    <th scope="col" class="continue2">نتيجه ثان متابعه</th>
                    <th scope="col" class="continue2_date">تاريخ ثان متابعه</th>
                    <th scope="col" class="continue3">نتيجه ثالث متابعه</th>
                    <th scope="col" class="continue3_date">تاريخ ثالث متابعه</th>
                    <th scope="col" class="factory">المصنع</th>
                    <th scope="col" class="addedBy">اضيف عبر</th>
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
                    <td class='the_day'>" . $dayes[$row['the_day']] . "</td>
                    <td class='registr_date'>" . $row['registr_date'] . "</td>
                    <td class='person_name'>" . $row['person_name'] . "</td>
                    <td class='qualification'>" . $qualifications[$row['qualification']] . "</td>
                    <td class='text-left phone'>" . $row['phone'] . "</td>
                    <td class='city'>" . $cities[$row['city']] . "</td>
                    <td class='age'>" . $row['age'] . "</td>
                    <td class='result'>" . $resultes[$row['result']] . "</td>
                    <td class='nots'>" . $row['nots'] . "</td>
                    <td class='next_continue_date'>" . $row['next_continue_date'] . "</td>
                    <td class='final_call'>" . $row['final_call'] . "</td>
                    <td class='continue1'>" . $resultes[$row['continue1']] . "</td>
                    <td class='continue1_date'>" . $row['continue1_date'] . "</td>
                    <td class='continue2'>" . $resultes[$row['continue2']] . "</td>
                    <td class='continue2_date'>" . $row['continue2_date'] . "</td>
                    <td class='continue3'>" . $resultes[$row['continue3']] . "</td>
                    <td class='continue3_date'>" . $row['continue3_date'] . "</td>
                    <td class='factory'>" . $row['factory'] . "</td>
                    <td class='addedBy'>" . $addedBy . "</td>
                </tr>
                
            ";
        }

        echo '</tbody></table>';
    }
?>
