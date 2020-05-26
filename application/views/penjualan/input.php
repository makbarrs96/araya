<section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-file-text-o"></i> Tambah Data</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-file-text-o"></i><a href="index.html">Tambah Data</a></li>
              <li><i class="icon_document_alt"></i>Forms</li>
            </ol>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Form
              </header>
              <div class="panel-body">
                <form class="form-horizontal " method="post" action="<?php echo base_url()."index.php/penjualan/insert" ?>">
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Tanggal</label>
                    <div class="col-sm-5">
                      <input type="date" class="form-control" name="tanggal">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Penjualan</label>
                    <div class="col-sm-5">
                      <input type="text" class="form-control" name="penjualan">
                      <br><button class="btn btn-primary btn-sm" type="submit">Selesai</button></br>
                    </div>
                  </div>
                  </div>
                </form>
              </div>
            </section>
      