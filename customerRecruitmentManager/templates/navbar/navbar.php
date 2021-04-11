<div class="container my-2">
  <nav class="navbar navbar-expand-lg navbar-light bg-light print-none">
    <div class="collapse navbar-collapse">

        <li class="nav-item">
          <a 
            class="nav-link " 
            href="/<?php echo json_decode($_SESSION['user'])->permission ;?>"
            >
            إضافه عميل 
           </a>
        </li>

        <li class="nav-item">
          <a 
            class="nav-link active" 
            href="/<?php echo json_decode($_SESSION['user'])->permission ;?>/Today'sFollow-up"
            >
              متابعه العملاء
           </a>
        </li>

        <li class="nav-item">
          <a 
            class="nav-link active" 
            href="/<?php echo json_decode($_SESSION['user'])->permission ;?>/Reports"
            >
              التقارير
           </a>
        </li>

        <li class="nav-item">
          <a 
            class="nav-link active" 
            href="/<?php echo json_decode($_SESSION['user'])->permission ;?>/sendMail"
            >
              ارسال ايميل
           </a>
        </li>


    </div>
  </nav>
</div>
