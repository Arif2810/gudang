<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Input Data Penerimaan Bahan

  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Forms</a></li>
    <li class="active">Data Penerimaan Bahan</li>
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
          <h3 class="box-title"><i class="fa fa-archive" aria-hidden="true"></i> Tambah Data Penerimaan Bahan</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <div class="container">
        <form action="<?=base_url('admin/proses_databarang_masuk_insert')?>" role="form" method="post">

          <?php if($this->session->flashdata('msg_berhasil')){ ?>
            <div class="alert alert-success alert-dismissible" style="width:91%">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Success!</strong><br> <?php echo $this->session->flashdata('msg_berhasil');?>
            </div>
          <?php } ?>

          <?php if(validation_errors()){ ?>
          <div class="alert alert-warning alert-dismissible">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              <strong>Warning!</strong><br> <?php echo validation_errors(); ?>
          </div>
        <?php } ?>

          <div class="box-body">
            <div class="form-group">
              <label for="id_transaksi" style="margin-left:220px;display:inline;">ID Transaksi</label>
              <input type="text" name="id_transaksi" style="margin-left:37px;width:20%;display:inline;" class="form-control" readonly="readonly" value="WG-<?=date("Y");?><?=random_string('numeric', 8);?>">
            </div>
            <div class="form-group">
              <label for="tanggal" style="margin-left:220px;display:inline;">Tanggal</label>
              <input type="date" name="tanggal" style="margin-left:66px;width:20%;display:inline;" class="form-control form_datetime" placeholder="Klik Disini">
            </div>
            <div class="form-group" style="margin-bottom:40px;">
              <label for="nama_barang" style="margin-left:220px;display:inline;">Shift</label>
              <select class="form-control" name="lokasi" style="margin-left:75px;width:20%;display:inline;">
                <option value="">-- Pilih --</option>
                <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
              
              </select>
              </div>
            </div>
                <div class="form-group" style="display:inline-block;">
              <label for="satuan" style="width:73%;">Nama Bahan</label>
              <select class="form-control" name="satuan" style="width:110%;margin-right: 18px;">
                <option value="" selected="">-- Pilih --</option>
                <?php foreach($list_satuan as $s){ ?>
                <option value="<?=$s->kode_satuan?>"><?=$s->nama_satuan?></option>
                <?php } ?>
              </select>
          </div>
          </div>
            <div class="form-group" style="display:inline-block;">
              <label for="kode_barang" style="width:87%;margin-left: 12px;">No. Lot</label>
              <input type="text" name="kode_barang" style="width: 90%;margin-right: 67px;margin-left: 11px;" class="form-control" id="kode_barang" placeholder="No. Lot">
            </div>
            <div class="form-group" style="display:inline-block;">
              <label for="nama_Barang" style="width:73%;">Satuan</label>
              <input type="text" name="nama_barang" style="width: 90%;margin-right: 67px;margin-left: 11px;" class="form-control" id="nama_Barang" value="Zak" placeholder="Satuan">
            </div>
        
          <div class="form-group" style="display:inline-block;">
            <label for="jumlah" style="width:73%">Jumlah</label>
            <input type="number" name="jumlah" style="width: 90%;margin-right: 67px;margin-left: 11px;" class="form-control" id="jumlah">
        </div>
        <div class="form-group" style="display:inline-block;">
          <button type="reset" class="btn btn-basic" name="btn_reset" style="width:95px;margin-left:20px;"><i class="fa fa-eraser" aria-hidden="true"></i> Reset</button>
        </div>
          <!-- /.box-body -->
          <div class="box-footer" style="width:93%;">
            <a type="button" class="btn btn-default" style="width:10%;margin-right:26%" onclick="history.back(-1)" name="btn_kembali"><i class="fa fa-arrow-left" aria-hidden="true"></i> Kembali</a>
            <a type="button" class="btn btn-info" style="width:14%;margin-right:29%" href="<?=base_url('admin/tabel_barangmasuk')?>" name="btn_listbarang"><i class="fa fa-table" aria-hidden="true"></i> Lihat List Barang</a>
            <button type="submit" style="width:20%" class="btn btn-success"><i class="fa fa-check" aria-hidden="true"></i> Submit</button>
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
