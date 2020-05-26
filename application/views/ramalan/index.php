<section class="wrapper">
    <!--overview start-->
    <div class="row">
      <div class="col-lg-12">
        <h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h3>
        <ol class="breadcrumb">
          <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
          <li><i class="fa fa-laptop"></i>Ramalan</li>
        </ol>
      </div>
    </div>

    <div class="row">
      <div class="col-md-6">
            <section class="panel">
              <table class="table table-striped table-advance table-hover">
                <tbody>
                  <tr>
                    <th><i class="icon_profile"></i> No</th>
                    <th><i class="icon_calendar"></i> Tanggal</th>
                    <th><i class="icon_mail_alt"></i> Penjualan</th>
                    <th><i class="icon_mail_alt"></i> Peramalan</th>
                  </tr>
                  <?php
                    $no=1;
                    if (isset($hasil)) {
                    foreach ($hasil as $value) {?>
                    <tr>
                      <td><?php echo $no?></td>
                      <td><?php echo date("d-m-Y",strtotime($value['tanggal']))?></td>
                      <td><?php echo round($value['jumlah'])?></td>
                      <td><?php echo round($value['hasil'])?></td>
                  </tr>
                  
                  <?php
                  $no++;
                    }
                  }

                  ?>
                </tbody>
              </table>
            </section>
        </div>

      <div class="col-md-6">
        <section class="panel">
            
          <canvas id="myChart"></canvas>
          <!-- <div class="row"> --></br></br>
            <hr></hr>
            <h2>Peramalan dan rekomendasi pengadaan</h2>
            <table class="table table-striped table-advance table-hover">
                <tbody>
                  <tr>
                    <th><i class="icon_profile"></i> No</th>
                    <th><i class="icon_calendar"></i> Tanggal</th>
                    <th><i class="icon_mail_alt"></i> Hasil Peramalan</th>
                    <th><i class="icon_mail_alt"></i> Stok Terkini</th>
                    <th><i class="icon_mail_alt"></i> Rekomendasi</th>
                  </tr>
                  <?php
                    $no=1;
                    if (isset($rekom)) {
                      
                    foreach ($rekom as $value) {?>
                    <tr>
                      <td><?php echo $no?></td>
                      <td><?php echo date("d-m-Y",strtotime($value['tanggal']))?></td>
                      <td><?php echo round($value['hasil'])?></td>
                      <td><?php echo round($value['stok'])?></td>
                      <td><?php echo round($value['rekomendasi'])?></td>
                  </tr>
                  
                  <?php
                  $no++;
                    }
                  }

                  ?>
                </tbody>
              </table>


          <!-- </div> -->
       </section> 
      </div>
      
    </div>
    <div class="widget-foot">
      <!-- Footer goes here -->
    </div>
</section>
