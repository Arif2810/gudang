<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Tambah Penuangan Bahan
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="<?=base_url('admin/tabel_barangmasuk')?>">Tables</a></li>
    <li class="active">Tambah Penuangan Bahan</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <!-- left column -->
    <div class="col-md-12">
      <div class="container">
        <!-- general form elements -->
      <div class="box box-primary" style="width:94%;">
        <div class="box-header with-border">
          <h3 class="box-title"><i class="fa fa-archive" aria-hidden="true"></i> Tambah Penuangan Bahan</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <div class="container">
        <form action="<?=base_url('admin/proses_data_keluar')?>" role="form" method="post">

          <?php if(validation_errors()){ ?>
          <div class="alert alert-warning alert-dismissible">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              <strong>Warning!</strong><br> <?php echo validation_errors(); ?>
          </div>
        <?php } ?>

          <div class="box-body">
            <div class="form-group">
              <?php foreach($list_data as $d){ ?>
              <label for="id_transaksi" style="margin-left:70px;display:inline;">ID Transaksi</label>
              <input type="text" name="id_transaksi" style="margin-left:110px;width:20%;display:inline;" class="form-control" readonly="readonly" value="<?=$d->id_transaksi?>">
            </div>
              
            <div class="form-group">
              <label for="tanggal" style="margin-left:70px;display:inline;">Tanggal Penerimaan Bahan</label>
              <input type="text" name="tanggal" style="margin-left:15px;width:20%;display:inline;" class="form-control" readonly="readonly" value="<?=$d->tanggal?>">
            </div>
            
              
            <div class="form-group">
              <label for="tanggal_keluar" style="margin-left:70px;display:inline;">Tanggal Penuangan</label>
              <input type="text" name="tanggal_keluar" style="margin-left:66px;width:20%;display:inline;" class="form-control form_datetime" required="" placeholder="Klik Disini">
            </div>
            <div class="form-group" style="margin-bottom:40px;">
              <label for="lokasi" style="margin-left:150px;display:inline;">Shift</label>
                <select class="form-control" name="lokasi" style="margin-left:75px;width:20%;display:inline;">
            
                <option value="">-- Pilih --</option>
                <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                
              </select>
            </div>
      
<!--       <div class="form-group" style="display:inline-block;">
              <label for="satuan" style="width:90%;">Nama Bahan</label>
              <select class="form-control" name="satuan" style="width:110%;margin-right: 18px;" >
                <?php foreach($list_satuan as $s){?>
                  <?php if($d->satuan == $s->nama_satuan){?>
                <option value="<?=$d->satuan?>" selected=""><?=$d->satuan?></option>
                <?php }else{?>
                <option value="<?=$s->kode_satuan?>"><?=$s->nama_satuan?></option>
                  <?php } ?>
                  <?php } ?>
              </select>
              </div>
          </div>-->
          
            <div class="form-group" style="display:inline-block;">
              <label for="satuan" style="width:87%;margin-left: 12px;">Nama Bahan</label>
              <input type="text" name="satuan" readonly="readonly" style="width: 100%;margin-right: 67px;margin-left: 11px;" class="form-control" id="kode_barang" value="<?=$d->satuan?>">
            </div>
          </div>
            <div class="form-group" style="display:inline-block;">
              <label for="kode_barang" style="width:87%;margin-left: 10px;">No. Lot</label>
              <input type="text" name="kode_barang" readonly="readonly" style="width: 70%;margin-right: 67px;margin-left: 11px;" class="form-control" id="kode_barang" value="<?=$d->kode_barang?>">
            </div>
            <div class="form-group" style="display:inline-block;">
              <label for="nama_Barang" style="width:73%;">Satuan</label>
              <input type="text" name="nama_barang" readonly="readonly" style="width:70%;" class="form-control" id="nama_Barang" value="<?=$d->nama_barang?>">
          </div>
            
          <div class="form-group" style="display:inline-block;">
            <label for="jumlah" style="width:73%;margin-left:33px;">Jumlah</label>
            <input type="number" name="jumlah" style="width:41%;margin-left:34px;margin-right:18px;" class="form-control" id="jumlah" max="<?=$d->jumlah?>" value="<?=$d->jumlah?>">
        </div>
        <?php } ?>
          <!-- /.box-body -->

          <div class="box-footer" style="width:93%;">
            <a type="button" class="btn btn-default" style="width:10%" onclick="history.back(-1)" name="btn_kembali"><i class="fa fa-arrow-left" aria-hidden="true"></i> Kembali</a>
            <button type="submit" style="width:20%;margin-left:689px;" class="btn btn-primary"><i class="fa fa-check" aria-hidden="true"></i> Submit</button>&nbsp;&nbsp;&nbsp;
          </div>
        </form>
      </div>
      </div>
      <!-- /.box -->

      <!-- Form Element sizes -->

      <!-- /.box -->


      <!-- /.box -->

      <!-- Input addon -->

      <!-- /.box -->

    </div>
    <!--/.col (left) -->
    <!-- right column -->
    <!-- <div class="col-md-6">
      <!-- Horizontal Form -->

      <!-- /.box -->
      <!-- general form elements disabled -->

      <!-- /.box -->

    </div>
    </div>
    <!--/.col (right) -->
  </div>
  <!-- /.row -->
</section>
<!-- /.content -->

 