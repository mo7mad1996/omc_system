<?php
  $links = array(
    "/" => "إضافه عامل",
    "/Today'sFollow-up" => "متابعه العمال",
    "/Reports" => "تقارير",
    '/sendSMS' => 'إرسال رساله نصيه',
    '/whatsapp' => 'إرسال عبر واتساب'
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
