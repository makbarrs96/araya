<section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-cubes"></i> Stok</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-cubes"></i><a href="index.html">Stok</a></li>
            </ol>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <div class="panel-body">
                <div class="form">
                  <form class="form-validate form-horizontal" id="feedback_form" method="post" action="<?php echo base_url()."index.php/stok/update"?>">
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Stok <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="stok_akhir" name="stok_akhir" type="stok_akhir" required />
                      </div>
                    </div>
                    </div>
                    <div class="form-group">
                      <div class="col-lg-offset-2 col-lg-5">
                        <button class="btn btn-primary"  type="submit">Save</button>
                      </div>
                    </div>
                  </form>
                </div>


              
            </section>
          </div>
        </div>
        <!-- page end-->
      </section>