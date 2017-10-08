
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-12 connectedSortable">
          <!-- Custom tabs (Charts with tabs)-->
            <!-- /.nav-tabs-custom -->

          <!-- Chat box -->
          <div class="box box-success">
            <div class="box-header">
              <i class="fa fa-box"></i>

              <h3 class="box-title">Data Barang Masuk</h3>

              
            </div>
            <div class="box-body">
                              <br />
                              <form method="POST" action="<?php echo $url ?>aksi.php?aksi=tambahbarang">
                                <div class="form-group">
                                  <label> Masukkan Kode Barang (Bisa dengan scan barcode atau input manual kode barang)</label>
                                  <input type="text" name="kode_barang" class="form-control" required="required">
                                </div>
                                <div class="form-group">
                                  <label> Jumlah Barang </label>
                                  <input type="text" name="jumlah" class="form-control"  required="required">
                                </div>
                                
                                <div class="form-group">
                                <button class="btn btn-primary" type="submit"> Simpan </button>
                                </div>


                              </form>
                               
<!--                 <a class="btn btn-primary" type="button"> Tambah Data </a>
 -->                <br />
                <br />
              <div class="clearfix"> </div>

              <h3> Riwayat Penambahan Stok </h3>
              <table class="table table-stripped" id="tabel-data">
                <thead>
                  <tr>
                    <th> No </th>
                    <th> Kode Barang </th>
                    <th> Nama Barang </th>
                    <th> Jumlah </th>
                    <th> Tanggal Penambahan </th>
                    <th> Waktu Penambahan </th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                  $query = mysqli_query($conn,"SELECT barang_masuk.*,barang.nama_barang FROM barang_masuk LEFT JOIN barang ON barang_masuk.kode_barang = barang.kode_barang ORDER BY tanggal_masuk DESC");
                  $no = 1;
                  while($dt = mysqli_fetch_array($query)){ 

                    $tanggal_tambah = $dt['tanggal_masuk'];
                    $tanggal = explode(" ",$tanggal_tambah);
                    $tanggalnya = $tanggal[0];
                    $waktunya = $tanggal[1];
                    ?>
                  <tr>
                    <td> <?php echo $no++ ?> </td>
                    <td> <?php echo $dt['kode_barang'] ?> </td>
                    <td> <?php echo $dt['nama_barang'] ?> </td>
                    <td> <?php echo $dt['jumlah'] ?> </td>
                    <td> <?php echo tgl_indo($tanggalnya)  ?> </td>
                    <td> <?php echo $waktunya ?> </td>
                  </tr>
                  <?php  } ?>
                </tbody>
               </table>

            </div>
          </div>
          <!-- /.box (chat box) -->

          <!-- TO DO List -->
       
          <!-- /.box -->

      

        </section>
     
      </div>