<?php
    include_once "../../customersSalesManager/Reports/template/data.php";

    if($rows_count > 1){
        echo '<table class="table table-striped "><thead><tr>';
        
            foreach($titles as $key => $value) {
                print "<th scope='col' class=$key >$value</th>";
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
                        echo "<td class='$key' title='$value'>" . $row[$key] . "</td>";
                    }  else {
                        echo "<td class='$key' title='$value'>" . $addedBy . "</td>";
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
