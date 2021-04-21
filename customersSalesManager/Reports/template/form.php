<?php
    include_once "../../customersSalesManager/Reports/template/data.php"; 
    $arr = $titles;
    array_pop($arr);
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

                     <option value="<?php echo $key;?>" sele><?php echo $value; ?></option>
                <?php } ?>
            </select>
            <form>
                <input id="formInput" type="hidden" />
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
