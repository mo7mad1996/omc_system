<form class="form_card sendMail" action="../../customerRecruitmentManager/backend/whatsapp">

    <details>
        <summary>إلى</summary>

        <div class="checkAll">
            <label for="all">تحديد الكل</label>
            <input id="all" type="checkbox" />
        </div>

        <div class="customers">
            <?php 
                if(!(@include_once "../inclouds/database/connect.php")) {
                    @include_once "../../inclouds/database/connect.php";
                }
                $sql = "SELECT id, phone , responsible_name, cumpany_name FROM customers WHERE phone != '' ";
                $res = mysqli_query($conn, $sql);

                if(mysqli_num_rows($res) > 0) {
                    while ($row = mysqli_fetch_assoc($res) ) {?>

            <div class="customer">
                <label for="<?php echo $row['id']; ?>">
                    <div class="col">
                        <?php echo $row['cumpany_name']; ?>
                    </div>
                    <div class="col">
                        <?php echo $row['responsible_name']; ?>
                    </div>
                    <div class="col">
                        <?php echo $row['phone']; ?>
                    </div>
                </label>
                <input id="<?php echo $row['id']; ?>" type="checkbox" value="+2<?php echo $row['phone']; ?>"
                    name="to[]" />
            </div>

            <?php }}?>
        </div>
    </details>

    <div class="input_field">
        <label for='msg'>الرساله</label>
        <textarea type="text" name="msg"></textarea>
    </div>

    <input type="hidden" name="whatsapp" />
    <input type="hidden" name="location" />

    <div class="buttons">
        <button type="submit">إرسال</button>
    </div>
</form>

<script>
    var theLocation = location.toString().split('?')[0];
    document.querySelectorAll('[name="location"]').forEach(el => el.setAttribute('value', theLocation));


    document.getElementById('all').onchange = function () {
        var isCheckAll = this.checked;
        document.querySelectorAll("[type='checkbox']").forEach(el => el.checked = isCheckAll);
    }
</script>


<?php if(isset($_GET['sent'])) { 

    // our request
    $sent = json_decode($_GET['sent']);
    $err = json_decode($_GET['err']);

    // create loop for the longer
    if( count($sent) >= count($err) ) {
        $loop = $sent;
    } else {
        $loop = $err;
    }?>
<div class='pa-4 EmailQuery'>  
    <table>
        <thead>
            <th>تم الارسال</th>
            <th>تعذر الارسال</th>
        </thead>
        <tbody>
            <?php foreach($loop as $idx => $email) {
                echo "
                <tr>
                        <td>". (isset($sent[$idx]) ? $sent[$idx] : '') ."</td>
                        <td>". (isset($err[$idx]) ? $err[$idx] : '') ."</td>
                        </tr>
                ";
            }?>
        </tbody>
    </table>
</div> 
<?php } ?>