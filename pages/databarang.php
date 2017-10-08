
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
            <div class="box-body chat" id="chat-box">
                              <br />

                <a class="btn btn-primary" href="<?php echo $url ?>index.php?pages=tambahbarang"> Tambah Data </a>
                <br />
                <br />
              <div class="clearfix"> </div>

              <table class="table table-stripped" id="tabel-data">
                <thead>
                  <tr>
                    <th> No </th>
                    <th> Kode Barang </th>
                    <th> Nama Barang </th>
                    <th> Stok </th>
                    <th> Stok Minimum </th>
                    <th> Lokasi </th>
                    <th> Aksi </th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                  $no = 1;
                  $query = mysqli_query($conn,"SELECT * FROM barang");
                  while($dt = mysqli_fetch_array($query)){ ?>
                  <tr>
                    <td> <?php echo $no++ ?> </td>
                    <td> <?php echo $dt['kode_barang'] ?> <br /> </td>
                    <td> <?php echo $dt['nama_barang'] ?> </td>
                    <td> <?php echo $dt['stok'] ?> </td>
                    <td> <?php echo $dt['stok_minimum'] ?> </td>
                    <td> <?php echo $dt['lokasi'] ?> </td>
                    <td> 
<!--                       <a href="<?php echo $url ?>barcode.php?text=<?php echo $dt['kode_barang'] ?>"> <i class="fa fa-print"> </i> Print Barcode </a>
 -->                      
 <a href="<?php echo $url ?>pages/printbarcode.php?kode_barang=<?php echo $dt['kode_barang'] ?>&nama_barang=<?php echo $dt['nama_barang'] ?>"><i class="fa fa-print"> </i> Print Barcode </a>
 <a href="#"> <i class="fa fa-search"> </i> Detail </a>
                      <a href="#"> <i class="fa fa-edit"> </i> Edit </a>
                      <a href="#"> <i class="fa fa-trash"> </i> Hapus </a>

                  <?php } ?>

                </tbody>


              </table>



            </div>
          </div>
          <!-- /.box (chat box) -->

          <!-- TO DO List -->
       
          <!-- /.box -->

      

        </section>
     
      </div>