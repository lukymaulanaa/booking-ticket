

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Dashboard
    <small>Control panel</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Dashboard</li>
  </ol>
</section>
<section class="content">
 <?php 

 $bandara = $bandara->id;
 $newus = substr($bandara,1,4);

 $bandara=$newus;
 if ($bandara<10) {
  $id="A000".$bandara;
}
else if($bandara>100){
  $id="A0".$bandara;
}
else{
  $id="A00".$bandara;
}

?>
<div class="box box-danger">
  <div class="box-header">
    <h3 class="box-title">Tambah Bandara</h3>
  </div>
  <div class="box-body">
    <?php echo form_open('Admin/tambahbandara'); ?>
    <input type="hidden" name="id" value="<?php echo($id); ?>">

    <div class="form-group">
      <label>Kode :</label>

      <div class="input-group">
        <div class="input-group-addon">
          <i class="fa fa-file"></i>
        </div>
        <input type="text" name="kode" class="form-control">
      </div>
      <!-- /.input group -->
    </div>
    <div class="form-group">
    <label>Nama Bandara :</label>

    <div class="input-group">
      <div class="input-group-addon">
        <i class="fa fa-file"></i>
      </div>
      <input name="name" type="text" class="form-control">
    </div>
    <!-- /.form group -->

    <div class="form-group">
      <label>Kota :</label>

      <div class="input-group">
        <div class="input-group-addon">
          <i class="fa fa-file"></i>
        </div>
        <input name="kota" type="text" class="form-control">
      </div>
    </div>
    <input type="submit" name="submit" class="btn btn-success">
  </div>
  <?php echo form_close(); ?>
</div>
</section>
</div>

<!-- /.content-wrapper -->
<footer class="main-footer">
<div class="pull-right hidden-xs">
  <b>Version</b> 2.4.0
</div>
<strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
reserved.
</footer>
</div>
<!-- ./wrapper -->
