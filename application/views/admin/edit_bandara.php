<html>
<head>
 <title>Edit Bandara</title>
</head>
<body>
 <center>
  <h3>Edit Bandara</h3>
 </center>
 <form action="<?php echo base_url('Admin/edit_bandara_update'); ?>" method="post">
 <div class="box box-danger">
    <div class="box-header">
      <h3 class="box-title">Edit Bandara</h3>
    </div>
    <?php foreach($airport as $a) { ?>
    <div class="box-body">
      <?php echo form_open('Admin/edit_bandara'); ?>
      <div class="form-group">
      <label>Kode Bandara:</label>

      <div class="input-group">
        <div class="input-group-addon">
          <i class="fa fa-file"></i>
        </div>
        <input value="<?php echo $a->id ?>" type="hidden" name="id" class="form-control">
        <input value="<?php echo $a->kode ?>" type="text" name="kode" class="form-control">
      </div>
    </div>
     
      
      <div class="form-group">
        <label>Nama Bandara :</label>

        <div class="input-group">
          <div class="input-group-addon">
            <i class="fa fa-name"></i>
          </div>
          <input value="<?php echo $a->nama ?>" name="nama" type="text" class="form-control">
        </div>
        <!-- /.input group -->
      </div>

      <div class="form-group">
        <label>Kota:</label>
        <div class="input-group">
          <div class="input-group-addon">
            <i class="fa fa-map"></i>
          </div>
          <textarea name="kota" class="form-control"><?php echo $a->kota ?></textarea>
        </div>
      </div>
    <?php } ?>
      <input type="submit" name="submit" class="btn btn-success">
      <!-- /.form group -->
    </div>
    <?php  echo form_close();?>
    <!-- /.box-body -->
  </div>
</section>
</div>
</html>