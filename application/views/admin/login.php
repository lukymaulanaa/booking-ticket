<div class="container text-center">
  <div class="col-md-4">
    
  </div>

  <div class="col-md-4">
    <!-- Horizontal Form -->
    <div class="box box-info">
      <div class="box-header with-border">
        <h3 class="box-title">Login Admin</h3>
      </div>
      <!-- /.box-header -->
      <!-- form start -->
      <form class="form-horizontal" method="post" action="<?php echo base_url('login/cek_login');?>">
        <div class="box-body">
          <div class="form-group">
            <label for="inputusername" class="col-sm-2 control-label">Username</label>

            <div class="col-sm-12">
              <input type="username" class="form-control" id="inputusername" placeholder="Input Here" name="username">
            </div>
          </div>
          <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Password</label>

            <div class="col-sm-12">
              <input type="password" class="form-control" id="inputPassword3" placeholder="Input Here" name="password">
            </div>
          </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <button type="submit" class="btn btn-info pull-right">Sign in</button>
        </div>
        <!-- /.box-footer -->
      </form>
    </div>
    <div class="col-md-4">
      
    </div>
  </div>