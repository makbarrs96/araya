<section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-table"></i> Table</h3>
            <ol class="breadcrumb">
              <li><i class="icon_document_alt"></i><a href="index.html">Penjualan</a></li>
              <li><i class="fa fa-table"></i>Table</li>
            </ol>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                <a href="<?php echo base_url()."index.php/penjualan/input" ?>"><button class="btn btn-primary btn-sm" type="button">Tambah Data</button> </a>
              </header>

              <table class="table table-striped table-advance table-hover">
                <tbody>
                  <tr>
                    <th><i class="icon_profile"></i> Nomor</th>
                    <th><i class="icon_calendar"></i> Tanggal</th>
                    <th><i class="icon_mail_alt"></i> Penjual</th>
                  </tr>
                  <?php $nomor=1;foreach ($penjualan as $value) {?>
                    <tr>
                    <td><?php echo $nomor++?></td>
                    <td><?php echo $value->tanggal?></td>
                    <td><?php echo $value->jumlah?></td>
                    <td>
                      <div class="btn-group">
                        <a class="btn btn-primary" href="<?php echo base_url()."index.php/Penjualan/edit/".$value->idPenjualan ?>"><i class="icon_plus_alt2"></i></a>
                        <a class="btn btn-danger" href="<?php echo base_url()."index.php/Penjualan/delete/".$value->idPenjualan ?>"><i class="icon_close_alt2"></i></a>
                      </div>
                    </td>
                  </tr>
                  
                  <?php

                    }
                    ?>
                </tbody>
              </table>
            </section>
          </div>
        </div>
        <!-- page end-->
      </section>