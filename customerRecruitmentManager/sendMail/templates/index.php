<form action="../backend/mail" class="form_card active sendMail">
    <h5 class="text-center mb-4">إرسال ايميل </h5>
    <input type="hidden" name="sms">
    <input type="hidden" name="location" id='location'>

    <details>
        <summary>إرسال الى</summary>

        <div class="checkAll">
            <label for="all">تحديد الكل</label>
            <input id="all" type="checkbox" />
        </div>

        <div class="customers">

            <?php 
                require_once '../../inclouds/database/connect.php';
            
                $sql= "
                    SELECT cumpany_name, responsible_name, email
                    FROM `customers` WHERE email != '' ";
                $res = mysqli_query($conn, $sql);
                $count = mysqli_num_rows($res);
    
                if($count > 0) {
                    while ($row = mysqli_fetch_assoc($res) ) {
                        echo " 
                            <div class='customer'>
                            <label for=" . $row['email']  .  ">".
                               "<div class=col>" . $row['cumpany_name'] . "</div>" . 
                               "<div class=col>" . $row['responsible_name'] . "</div>" .
                               "<div class=col>" . $row['email'] . "</div>" .
                            "</label>
                                <input name='to[]' value=" . $row['email'] . " id=" . $row['email'] . " type='checkbox' />
                            </div>
                        ";
                    }
                }
            ?>
        </div>
    </details>

    <div class="input_field">
        <label for="Subject">Subject</label>
        <input id='Subject' name='subject'>
    </div>

    <div class="input_field">
        <label for="msg_input">الرساله</label>
        <textarea class="msg_input" name='msg_input'></textarea>
    </div>

    <hr>

    <input type="submit" value='ارسال'>
</form>


<script>
    let theLocation = location.toString().split('?')[0];
    document.querySelectorAll('[name="location"]').forEach(el => el.setAttribute('value', theLocation));

    document.getElementById('all').onchange = function () {
        var isCheckAll = this.checked;
        document.querySelectorAll("[type='checkbox']").forEach(el => el.checked = isCheckAll);
    }
</script>


<?php 
    if(isset($_GET['err'])) {
        echo "
            <div class='msg err' onclick='this.remove()'>
                <b>خطأ</b>
                فشل في ارسال الايميل
            </div>
        ";
    }

    if(isset($_GET['sent'])) {
        echo "
            <div class='msg Success' onclick='this.remove()'>
                <b>تم</b>
                تم بنجاح
            </div>
        ";
    }
?>
