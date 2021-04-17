<?php

    include "../../LaborMarketingManager/Reports/template/data.php";

    $arr = array(
        'id'                 => '#',
        
        'the_day'            => 'اليوم',
        'registr_date'       => 'تاريخ التسجيل',
        
        'person_name'        => 'اسم العامل',
        'qualification'      => 'المؤهل',
        'phone'              => 'التليفون',
        'city'               => 'محافظه',
        'age'                => 'السن',

        'result'             => 'النتيجه',
        'nots'               => 'ملاحظات',
        'next_continue_date' => 'تاريخ المتابعه المستقبليه',
        'final_call'         => 'تاريخ اخر اتصال',

        'continue1'          => 'نتيجه اول متابعه',
        'continue1_date'     => 'تاريخ اول متابعه',

        'continue2'          => 'نتيجه ثان متابعه',
        'continue2_date'     => 'تاريخ ثان متابعه',

        'continue3'          => 'نتيجه ثالث متابعه',
        'continue3_date'     => 'تاريخ ثالث متابعه',

        'factory'            => 'المصنع',
        'addedBy'            => 'اضيف عبر'
    );

    // Multiple Workers
    if($rows_count > 1){

        // table head
        echo '<table class="table table-striped"><thead><tr>';
            foreach($arr as $key => $value) {
                echo "<th scope=col class='$key' title='$value'>$value</th>";
            }
        echo '</tr></thead><tbody>';


        // table body
        while($row = mysqli_fetch_assoc($res)) {

            $l = "SELECT name FROM users WHERE id = " . $row['added_by'];
            $r = mysqli_query($conn, $l);
            
            while($d = mysqli_fetch_assoc($r)) {
                $addedBy =  $d['name'];
            }

            echo "<tr>";
            foreach($arr as $key => $value) {

                switch($key) {
                    case 'the_day':
                        echo "<td class='$key' title='$value'>" . $dayes[$row[$key]] . "</td>";
                        break;

                    case 'qualification':
                        echo "<td class='$key' title='$value'>" . $qualifications[$row[$key]] . "</td>";
                        break;

                    case 'city':
                        echo "<td class='$key' title='$value'>" . $cities[$row[$key]] . "</td>";
                        break;
                   
                    case 'result':
                        echo "<td class='$key' title='$value'>" . $resultes[$row[$key]] . "</td>";
                        break;

                    case 'continue1':
                        echo "<td class='$key' title='$value'>" . $resultes[$row[$key]] . "</td>";
                        break;

                    case 'continue2':
                        echo "<td class='$key' title='$value'>" . $resultes[$row[$key]] . "</td>";
                        break;

                    case 'continue3':
                        echo "<td class='$key' title='$value'>" . $resultes[$row[$key]] . "</td>";
                        break;

                    case 'addedBy':
                        echo "<td class='$key' title='$value'>" . $addedBy . "</td>";
                        break;

                    default:
                        echo "<td scope=row class='$key' title='$value'>". $row[$key] . "</td>";
                }
            }
            echo "</tr>";
        }
        echo '</tbody></table>';


    } else if ($rows_count == 1) {
        // single card

        echo "<div class='worker_id'>";

        while($row = mysqli_fetch_assoc($res)) {
           
            $l = "SELECT name FROM users WHERE id = " . $row['added_by'];
            $r = mysqli_query($conn, $l);
            
            while($d = mysqli_fetch_assoc($r)) {
                $addedBy =  $d['name'];
            }

            foreach($arr as $key => $value) {
                switch($key) {

                    case 'the_day':
                        echo "<div class=$key title='$value'>$value <div>" . $dayes[$row[$key]] . "</div> </div>";
                        break;
                        
                    case 'qualification':
                        echo "<div class=$key title='$value'>$value <div>" . $qualifications[$row[$key]] . "</div> </div>";
                        break;

                    case 'city':
                        echo "<div class=$key title='$value'>$value <div>" . $cities[$row[$key]] . "</div> </div>";
                        break;
                        
                    case 'result':
                        echo "<div class=$key title='$value'>$value <div>" . $resultes[$row[$key]] . "</div> </div>";
                        break;
                        
                    case 'continue1':
                        echo "<div class=$key title='$value'>$value <div>" . $resultes[$row[$key]] . "</div> </div>";
                        break;
                        
                    case 'continue2':
                        echo "<div class=$key title='$value'>$value <div>" . $resultes[$row[$key]] . "</div> </div>";
                        break;
                        
                    case 'continue3':
                        echo "<div class=$key title='$value'>$value <div>" . $resultes[$row[$key]] . "</div> </div>";
                        break;
                        
                    case 'addedBy':
                        echo "<div class=$key title='$value'>$value <div>" . $addedBy . "</div> </div>";
                        break;

                    default: 
                        echo "<div class=$key title='$value'>$value <div>" . $row[$key] . "</div> </div>";
                }
            }
        }
        
        echo "</div>";
    }
