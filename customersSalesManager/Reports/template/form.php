<?php
    include_once "../../customersSalesManager/Reports/template/data.php"; 
    include_once "../../inclouds/database/connect.php"; 
    $arr = $titles;
?>
<div class="search_by print-none ">
    <h3>بحث بواسطه</h3>

    <div class="form-control">
        <div class="group ">
            <select id="by">
                <?php 
                    foreach($arr as $key => $value){
                        if($key == 'id') {$value = 'الكل';}
                ?>
                     <option value="<?php echo $key;?>"><?php echo $value; ?></option>
                <?php } ?>
            </select>
            <form>
                <input id="formInput" type="hidden" />
                <select id='formSelect' class="d-none">
                    <?php 
                        $s = "SELECT name, id FROM users WHERE permission = 'customerRecruitmentManager'";
                        $p = mysqli_query($conn, $s);
                        while ($row = mysqli_fetch_assoc($p)) {
                            echo "<option value=" . $row['id'] . ">" . $row['name'] . "</option>";
                        }
                    ?>
                </select>
                <button type="submit">فلتره</button>
            </form>
        </div>

        <div class="group col">
            <div class="n">
                <button onclick="print()" class="printBTN">طباعه</button>
                عدد الصفوف:
                <span>
                    <?php echo $rows_count ; ?>
                </span>
            </div>
            <details>
                <summary><span>الاعمده</span></summary>
                <div id="colomns"></div>
            </details>
        </div>
    </div>

</div>
