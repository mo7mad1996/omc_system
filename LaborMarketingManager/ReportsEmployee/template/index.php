<div class="container-fluid">
    <table class="table table-striped">
        <thead>
            <th>اسم الموظف</th>
            <th>كود الموظف</th>
            <th>عدد العمال</th>
        </thead>
        <tbody>
                <?php 
                    include_once "../../inclouds/database/connect.php";

                    $sql = "SELECT id, name, code FROM users WHERE permission = 'laborRecruitmentManager'";
                    $res = mysqli_query($conn, $sql);
                    $rows_cont = mysqli_num_rows($res);
                    
                    if($rows_cont > 0) {
                        while ($row = mysqli_fetch_assoc($res)) {
                            ?>
                    <tr>
                        <td><?php echo $row['name'] ; ?></td>
                        <td><?php echo $row['code'] ; ?></td>
                        <td>
                        <?php 
                            $sql = "SELECT id FROM workers WHERE added_by ="  . $row['id'] ;
                            $r = mysqli_query($conn, $sql);
                            $n = mysqli_num_rows($r);
                            echo $n;
                        ?>
                        </td>
                    </tr>

                    <?php }} ?>

        </tbody>
    </table>
</div>
