<section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="icon_profile"></i> User</h3>
            <ol class="breadcrumb">
              <li><i class="icon_profile"></i><a href="index.html">User</a></li>
            </ol>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                <a href="<?php echo base_url()."index.php/User/input" ?>"><button class="btn btn-primary btn-sm" type="button">Tambah User</button> </a>
              </header>
          
              <table class="table table-striped table-advance table-hover">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Username</th>
                    <th>Password</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $nomor=1;foreach ($user as $value) {?>
                    <tr>
                    <td><?php echo $nomor++?></td>
                    <td><?php echo $value->username?></td>
                    <td><?php echo $value->password?></td>
                    <td>
                      <div class="btn-group">
                     <a class="btn btn-danger" href="<?php echo base_url()."index.php/user/delete/".$value->idUser ?>"><i class="icon_close_alt2"></i></a>
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