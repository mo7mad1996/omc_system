<?php
  $links = array(
    '/' => 'إضافه عميل',
    "/Today'sFollow-up" => 'متابعه العملاء',
    '/Reports' => 'التقارير',
    '/sendMail' => 'ارسال ايميل',
    '/sendSMS' => 'إرسال رساله نصيه',
    '/whatsapp' => 'إرسال عبر واتساب'
  );
?>

<div class="container my-2">
  <nav class="navbar navbar-expand-lg navbar-light bg-light print-none">
    <div class="collapse navbar-collapse">

      <?php foreach($links as $key => $value ) { ?>

        <li class="nav-item">
          <a 
            class="nav-link active" 
            href="/<?php echo json_decode($_SESSION['user'])->permission . $key ;?>"
            title="<?php echo $value ; ?>"
            >
              <?php echo $value; ?>
           </a>
        </li>

      <?php } ?>

    </div>
  </nav>
</div>
