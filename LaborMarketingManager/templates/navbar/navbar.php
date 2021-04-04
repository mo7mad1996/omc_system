<div class="container my-2">
  <nav class="navbar navbar-expand-lg navbar-light bg-light print-none">
    <div class="collapse navbar-collapse">

        <li class="nav-item">
          <a 
            class="nav-link " 
            href="/<?php echo json_decode($_SESSION['user'])->permission ;?>/Reports"
            >
             تقارير 
           </a>
        </li>

        <li class="nav-item">
          <a 
            class="nav-link " 
            href="/<?php echo json_decode($_SESSION['user'])->permission ;?>/addWorker"
            >
             إضافه عامل
           </a>
        </li>

        <li class="nav-item">
          <a 
            class="nav-link " 
            href="/<?php echo json_decode($_SESSION['user'])->permission ;?>/addEmployee"
            >
             إضافه موظف
           </a>
        </li>

    </div>
  </nav>
</div>

