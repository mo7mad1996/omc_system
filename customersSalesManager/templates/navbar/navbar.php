<?php
  $links = array(
    "/Reports" => "تقرير عملاء",
    "/ReportsEmployee" => "تقرير موظفين",
    "/addCustomer" => "إضافه عميل",
    "/addEmployee" => "إضافه موظف"
  );
?>


<div class="container my-2">
  <nav class="navbar navbar-expand-lg navbar-light bg-light print-none">
    <div class="collapse navbar-collapse">

      <?php foreach($links as $to => $lable){ ?>

        <li class="nav-item">
          <a 
            class="nav-link active" 
            href="/<?php echo json_decode($_SESSION['user'])->permission . $to ;?>"
            title = "<?php echo $lable; ?>"
            >
            <?php echo $lable; ?>
           </a>
        </li>

      <?php } ?>

    </div>
  </nav>
</div>
