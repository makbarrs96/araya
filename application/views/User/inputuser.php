<section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="icon_profile"></i> User</h3>
            <ol class="breadcrumb">
              <li><i class="icon_profile"></i><a href="index.html">Tambah User</a></li>
            </ol>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <div class="panel-body">
                <div class="form">
                  <form class="form-validate form-horizontal" id="feedback_form" method="post" action="<?php echo base_url()."index.php/user/insert"?>">
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Username <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="Username" name="Username" type="text" required />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cemail" class="control-label col-lg-2">Password <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control " id="Password" type="Password" name="Password" required />
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-lg-offset-2 col-lg-10">
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