<div class="container my-2">
  <nav class="navbar navbar-expand-lg navbar-light bg-light print-none">
    <div class="collapse navbar-collapse">

      <ul class="navbar-nav mb-lg-0">
        <li class="nav-item">
          <a 
            class="nav-link active" 
            href="/<?php echo json_decode($_SESSION['user'])->permission ;?>"
            >
            إضافه عميل 
           </a>
        </li>
      </ul>

      <ul class="navbar-nav mb-lg-0">
        <li class="nav-item">
          <a 
            class="nav-link active" 
            href="/<?php echo json_decode($_SESSION['user'])->permission ;?>/Today'sFollow-up"
            >
              متابعه العملاء
           </a>
        </li>
      </ul>


    </div>
  </nav>
</div>

