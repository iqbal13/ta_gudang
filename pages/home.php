 <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <?php 
              $barang = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM barang "));
              ?>
              <h3><?php echo $barang ?></h3>

              <p>Jumlah Barang</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="<?php echo $url ?>index.php?pages=databarang" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>53<sup style="font-size: 20px">%</sup></h3>

              <p>Bounce Rate</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>44</h3>

              <p>User Registrations</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>65</h3>

              <p>Unique Visitors</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <div class="col-lg-7">
          <!-- Custom tabs (Charts with tabs)-->
          <div class="nav-tabs-custom">
            <!-- Tabs within a box -->
            <ul class="nav nav-tabs pull-right">
              <li class="active"><a href="#revenue-chart" data-toggle="tab">Area</a></li>
            </ul>
            <div class="tab-content no-padding">
              <!-- Morris chart - Sales -->
              <div class="chart tab-pane active" id="revenuea-chart" style="position: relative; height: 300px;"></div>
            </div>
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <div class="col-lg-5">
          <!-- TO DO List -->
          <div class="box box-primary">
            <div class="box-header">
              <i class="ion ion-clipboard"></i>

              <h3 class="box-title">Barang Kurang dari Stok stok_minimum</h3>
<!-- 
              <div class="box-tools pull-right">
                <ul class="pagination pagination-sm inline">
                  <li><a href="#">&laquo;</a></li>
                  <li><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">&raquo;</a></li>
                </ul>
              </div> -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <!-- See dist/js/pages/dashboard.js to activate the todoList plugin -->
              <ul class="todo-list">
              
                <?php 
                $a = mysqli_query($conn,"SELECT * FROM barang WHERE stok < stok_minimum"); 
                while($b = mysqli_fetch_array($a)){ ?>
                  <li>
                  <!-- drag handle -->
                  <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                  <!-- checkbox --> 
  <span class="text"><?php echo $b['nama_barang'] ?> </span>
                  <!-- Emphasis label -->
                  <small class="label label-danger"><i class="fa fa-clock-o"></i> Total Barang : <?php echo $b['stok'] ?> | Stok Minimum : <?php echo $b['stok_minimum'] ?></small>

                <?php } ?>
               
                </li>
               
              </ul>
            </div>
            <!-- /.box-body -->
        
          </div>
 

        </div>
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <section class="col-lg-5 connectedSortable">

       

    
        
          <!-- /.box -->

        </section>
        <!-- right col -->
      </div>

      <script>

       var area = new Morris.Line({
    element   : 'revenuea-chart',
    resize    : true,
    data      : [
    <?php 
    $query = "SELECT * FROM buatgrafik";
    $dt = mysqli_query($conn,$query);
    $a = 1;
    while($c = mysqli_fetch_array($dt)) { 
      
      $total_masuk = $c['total_masuk'];
      if($total_masuk == "" OR $total_masuk == NULL){
        $total_masuk = 0;
      }

      $total_keluar = $c['total_keluar'];
      if($total_keluar == "" OR $total_keluar == NULL){
        $total_keluar = 0;
      }

      ?>
      { y: '<?php echo $c['nama_barangnya'] ?>',z: <?php echo $a ?>, item1: <?php echo $total_masuk ?>, item2: <?php echo $total_keluar ?>},
    <?php  $a = $a + 1;} ?>
    ],
    xkey      : 'z',
    ykeys     : ['item1', 'item2'],
    labels    : ['Barang Masuk', 'Barang Keluar'],
    lineColors: ['#a0d0e0', '#3c8dbc'],
    hideHover : 'auto'
  });

           area.redraw();

      </script>