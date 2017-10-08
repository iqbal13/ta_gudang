
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-12 connectedSortable">
          <!-- Custom tabs (Charts with tabs)-->
            <!-- /.nav-tabs-custom -->

          <!-- Chat box -->
          <div class="box box-success">
            <div class="box-header">
              <i class="fa fa-box"></i>

              <h3 class="box-title">Data Barang</h3>

              
            </div>
            <div class="box-body">
                              <br />

                <a class="btn btn-primary" type="button"> Tambah Data </a>
                <br />
                <br />
              <div class="clearfix"> </div>

              <form method="POST" action="<?php echo $url ?>aksi.php?aksi=tambahdata">
              <div class="col-md-6">

                <div class="form-group">
                  <label> Kode Barang </label>
                  <input type="text" name="kode_barang" class="form-control">
                </div>


                <div class="form-group">
                  <label> Nama Barang </label>
                  <input type="text" name="nama_barang" class="form-control">
                </div>


                <div class="form-group">
                  <label> Stok Barang </label>
                  <input type="text" name="stok" class="form-control">
                </div>


                <div class="form-group">
                  <label> Stok Minimum Barang </label>
                  <input type="text" name="stok_minimum" class="form-control">
                </div>


                <div class="form-group">
                  <label> Lokasi </label>
                  <input type="text" name="lokasi" class="form-control">
                </div>  


                <div class="form-group">
                  <label> Satuan </label>
                  <input type="text" name="satuan" class="form-control">
                </div>  

              </div>

              <div class="col-md-6">


              </div>
              <div class="clearfix"> </div>
              <button type="submit" class="btn btn-primary"> <i class="fa fa-save"> </i> Simpan </button>

            </form>


            </div>
          </div>
          <!-- /.box (chat box) -->

          <!-- TO DO List -->
       
          <!-- /.box -->

      

        </section>
     
      </div>