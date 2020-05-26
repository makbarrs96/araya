

    <header class="header dark-bg">
      <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
      </div>

      <!--logo start-->
      <a href="index.html" class="logo">Admin<span class="lite"> SPBU</span></a>
      <!--logo end-->

      <div class="nav search-row" id="top_menu">
        <!--  search form start -->
        <ul class="nav top-menu">
          <li>
            <form class="navbar-form">
            </form>
          </li>
        </ul>
        <!--  search form end -->
      </div>

      <div class="top-nav notification-row">
        <!-- notificatoin dropdown start-->
        <ul class="nav pull-right top-menu">
          <!-- alert notification end-->
          <!-- user login dropdown start-->
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="username">RIZAL</span>
                            <b class="caret"></b>
                        </a>
            <ul class="dropdown-menu extended logout">
              <div class="log-arrow-up"></div>
              <li class="eborder-top">
              <li>
                <a href="<?php echo base_url()."index.php/login/logout"?>"><i class="icon_key_alt"></i> Log Out</a>
              </li>
              
            </ul>
          </li>
          <!-- user login dropdown end -->
        </ul>
        <!-- notificatoin dropdown end-->
      </div>
    </header>
    <!--header end-->

    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          <li class="active">
            <a class="" href="<?php echo base_url()."index.php/Home" ?>">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
          </li>
          <li class="sub-menu">
            <a href="<?php echo base_url()."index.php/Penjualan" ?>" class="">
                          <i class="icon_document_alt"></i>
                          <span>Penjualan</span>
                      </a>
          </li>
          <li>
            <a class="" href="<?php echo base_url()."index.php/Hasilperamalan" ?>">
                          <i class="icon_genius"></i>
                          <span>Hasil Peramalan</span>
                      </a>
          </li>
          <li>
            <a class="" href="<?php echo base_url()."index.php/stok" ?>">
                          <i class="fa fa-cubes"></i>
                          <span>Stock</span>
                      </a>

          </li>

          <li>
            <a class="" href="<?php echo base_url()."index.php/user" ?>">
                          <i class="icon_profile"></i>
                          <span>User</span>
                      </a>

          </li>
          
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
