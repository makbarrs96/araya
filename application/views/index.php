<?php $this->load->view("header") ?>
<body>
  <!-- container section start -->
  <section id="container" class="">
    
  <?php $this->load->view("menu")?>
  
    <!--main content start-->
    <section id="main-content">
      <?php $this->load->view($form)?>
      <div class="text-right">
        <div class="credits">
          <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
          -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
    </section>
    <!--main content end-->
  </section>

  <?php $this->load->view("js")?>
</body>

</html>
