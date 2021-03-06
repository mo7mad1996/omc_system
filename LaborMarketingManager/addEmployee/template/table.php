
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
                    <th scope="col" class="continue1">متابعه 1</th>
                    <th scope="col" class="continue2">متابعه 2</th>
                    <th scope="col" class="continue3">متابعه 3</th>
                    <th scope="col" class="factory">المصنع</th>
                    <th scope="col" class="added_by">اضيف عبر</th>
                </tr>
            </thead>
        <tbody>';

        while($row = mysqli_fetch_assoc($res)) {
            $l = "SELECT name FROM users WHERE id = " . $row['added_by'];
            $r = mysqli_query($conn, $l);
            
            while($d = mysqli_fetch_assoc($r)) {
                $added_by =  $d['name'];
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
                    <td class='continue1'>" . $resultes[$row['continue1']] . "</td>
                    <td class='continue2'>" . $resultes[$row['continue2']] . "</td>
                    <td class='continue3'>" . $resultes[$row['continue3']] . "</td>
                    <td class='factory'>" . $row['factory'] . "</td>
                    <td class='added_by'>" . $added_by . "</td>
                </tr>
                
            ";
        }

        echo '</tbody></table>';
    }
?>
