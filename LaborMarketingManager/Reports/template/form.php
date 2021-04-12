<div class="search_by print-none ">
    <h3>بحث بواسطه</h3>

    <div class="form-control">
        <div class="group ">
            <select id="by">
                <option value="hidden">الكل</option>
                <option value="date">تاريخ التسجيل</option>
                <option value="text">اسم العامل</option>
            </select>
            <form>
                <input id="formInput" type="hidden" />
                <button type="subm  it">فلتره</button>
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
