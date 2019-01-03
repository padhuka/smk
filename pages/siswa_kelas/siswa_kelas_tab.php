<?php
                            include_once 'lib/config.php';
                      ?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper"  style="margin-left: -0px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Siswa
        <!--<small>Control panel</small>-->
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data Siswa Kelas</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-8">
          <!-- general form elements -->
          <div class="box box-primary">
            <!--<div class="box-header with-border">
              <h3 class="box-title">Quick Example</h3>
            </div>
             /.box-header -->
            <!-- form start 
            <form role="form">-->
              <div class="box-body">
                <div id="tablesiswa">
                </div>
                <h3>
        Data Siswa Kelas &nbsp;&nbsp;<span style="font-size: 15px">Tahun Akademik:</span>
        <select id="pilihangk" style="font-size: 14px;" onchange="pilangk()">
          <?php $qangk=mysql_query("SELECT * FROM t_tahun_akademik"); 
            while ($hank=mysql_fetch_array($qangk)) {?>
            <option value="<?php echo $hank['kd_tahun_akademik'];?>"  style="font-size: 14px;"><?php echo $hank['kd_tahun_akademik'];?></option> <?php }?>         
        </select> 
        &nbsp;&nbsp;<span style="font-size: 15px">Kelas:</span>
        <select id="pilihkelas" style="font-size: 14px;" onchange="pilkelas()">
          <?php $qangk=mysql_query("SELECT * FROM t_kelas"); 
            while ($hank=mysql_fetch_array($qangk)) {?>
            <option value="<?php echo $hank['kd_kelas'];?>"  style="font-size: 14px;"><?php echo $hank['nama'];?></option><?php }?>         
            <option value=""  style="font-size: 14px;">--Semua Kelas--</option>
        </select>
        &nbsp;&nbsp;<span style="font-size: 15px">Jurusan:</span>
        <select id="pilihjurusan" style="font-size: 14px;" onchange="piljur()">
          <?php $qangk=mysql_query("SELECT * FROM t_jurusan"); 
            while ($hank=mysql_fetch_array($qangk)) {?>
            <option value="<?php echo $hank['kd_jurusan'];?>"  style="font-size: 14px;"><?php echo $hank['nama'];?></option> <?php }?>    
            <option value=""  style="font-size: 14px;">--Semua Jurusan--</option>     
        </select>

        <!--<small>Control panel</small>-->
      </h3>
                <div id="tablesiswa_kelas">
                </div>
              </div>
              <!-- /.box-body 
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>-->

          </div>
          <!-- /.box -->
        </div>

        <div class="col-md-4">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <!-- <div class="box-header with-border">
              <h3 class="box-title">Horizontal Form</h3>
            </div>
            /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" enctype="multipart/form-data" novalidate id="formsiswa_kelas">
              <div class="box-body">
                
                
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">NIS</label>

                  <div class="col-sm-6">
                    <input type="text" class="form-control" id="nis" name="nis" readonly="yes">
                    <input type="hidden" class="form-control" id="kdsiswa" name="kdsiswa" readonly="yes" >
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">Nama</label>

                  <div class="col-sm-6">
                    <input type="text" class="form-control" id="nama" name="nama" readonly="yes">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">Tahun Akademik</label>

                  <div class="col-sm-6">
                    <select id="tahun" name="tahun" class="form-control">
                        <?php
                        $sqldidik = "SELECT * FROM t_tahun_akademik ORDER BY tahun_pertama ASC";
                                    $resdidik = mysql_query( $sqldidik );
                                    while($hdidik = mysql_fetch_array( $resdidik )){
                        ?>
                          <option value="<?php echo $hdidik['kd_tahun_akademik'];?>"><?php echo $hdidik['kd_tahun_akademik'];?></option>
                        <?php }?>
                      </select>
                      <input type="hidden" class="form-control" id="tahunhid" name="tahunhid" readonly="yes" >
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">Kode</label>

                  <div class="col-sm-6">
                    <input type="text" class="form-control" id="kode" name="kode" >
                    <input type="hidden" class="form-control" id="kodehid" name="kodehid" >
                  </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-4 control-label">Kelas</label>

                    <div class="col-sm-6">
                      <select id="kelas" name="kelas" class="form-control">
                        <?php
                        $sqldidik = "SELECT * FROM t_kelas ORDER BY kd_kelas ASC";
                                    $resdidik = mysql_query( $sqldidik );
                                    while($hdidik = mysql_fetch_array( $resdidik )){
                        ?>
                          <option value="<?php echo $hdidik['kd_kelas'];?>"><?php echo $hdidik['nama'];?></option>
                        <?php }?>
                      </select>
                    </div>
                </div>
                                            
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-4 control-label">Jurusan</label>
                    <div class="col-sm-6">
                      <select id="jurusan" name="jurusan" class="form-control">
                        <?php
                        $sqldidik = "SELECT * FROM t_jurusan ORDER BY kd_jurusan ASC";
                                    $resdidik = mysql_query( $sqldidik );
                                    while($hdidik = mysql_fetch_array( $resdidik )){
                        ?>
                          <option value="<?php echo $hdidik['kd_jurusan'];?>"><?php echo $hdidik['nama'];?></option>
                        <?php }?>
                      </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-4 control-label">Ruang</label>
                    <div class="col-sm-6">
                      <select id="ruang" name="ruang" class="form-control">
                        <?php
                        $sqldidik = "SELECT * FROM t_ruang ORDER BY kd_ruang ASC";
                                    $resdidik = mysql_query( $sqldidik );
                                    while($hdidik = mysql_fetch_array( $resdidik )){
                        ?>
                          <option value="<?php echo $hdidik['kd_ruang'];?>"><?php echo $hdidik['nama'];?></option>
                        <?php }?>
                      </select>
                    </div>
                </div>
               
               
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary" id="saveadd">Simpan</button>
                <button type="button" class="btn btn-primary" onclick="bataladd()" id="canceladd">Batal</button>

                <button type="button" class="btn btn-primary" onclick="simpanubah()" id="saveedit">Simpan</button>
              <button type="button" class="btn btn-primary" onclick="batalubah()" id="canceledit">Batal</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>

    </div>



      
    </section>
</div>
<div id="ModalBatal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"></div>
<script>  
          refresh();
            function refresh(){
              $('#saveadd').show();
              $('#canceladd').show();
              $('#saveedit').hide();
              $('#canceledit').hide();

              //$('#tahun').val('');   
              $('#kode').val('');   
              $('#kodehid').val('');   
              $('#nis').val('');
              $('#kdsiswa').val('');
              $('#nama').val('');
              $('#kelas').val('');
              $('#jurusan').val('');
              $('#ruang').val('');
              $('#tahunhid').val('');
            }

            function bataladd(){
              refresh();
            }

            function batalubah(){
              refresh();
              $('#pilihsiswa').show();
            }

            function ubahsiswa(a,b,c,d){    
                  $('#kdsiswa').val(a);
                  $('#nis').val(b);
                  $('#nishid').val(b);
                  $('#nama').val(d);
            }
            /*
             '<?php //echo $catat['siswa'];?>',
                                          '<?php //echo $catat['nis'];?>',
                                         '<?php //echo $catat['kd_siswa_kelas'];?>',
                                         '<?php //echo $catat['fk_kd_tahun_akademik'];?>',
                                         '<?php //echo $catat['fk_kd_jurusan'];?>',
                                         '<?php //echo $catat['fk_kd_kelas'];?>',
                                         '<?php //echo $catat['fk_kd_ruang'];?>'
                                         '<?php //echo $catat['fk_kd_siswa'];?>'
            */

            function ubahsiswa_kelas(a,b,c,d,e,f,g,h){                
                          //no_bukti,tr_date,transaction_type,fk_akun,nmakun,ref_akun,nmref,amount
                  $('#kode').val(c);   
                  $('#kodehid').val(c);   
                  $('#nis').val(b);
                  $('#kdsiswa').val(h);
                  $('#nama').val(a);
                  $('#kelas').val(f);
                  $('#jurusan').val(e);
                  $('#ruang').val(g);
                  $('#tahunhid').val(d);
                          
                          $('#pilihsiswa').hide();
                          $('#saveadd').hide();
                          $('#canceladd').hide();
                          $('#saveedit').show();
                          $('#canceledit').show();
            }

            function simpanubah(){
                    var kode = $('#kode').val();   
                    var kodehid= $('#kodehid').val();   
                    var kdsiswa= $('#kdsiswa').val();
                    var kelas= $('#kelas').val();
                    var jurusan= $('#jurusan').val();
                    var ruang = $('#ruang').val();
                    var tahun= $('#tahun').val();
                    var tahunhid= $('#tahunhid').val();
                  
                   $.ajax({
                                url: 'pages/siswa_kelas/siswa_kelas_edit_save.php?kode='+kode+'&kodehid='+kodehid+'&kdsiswa='+kdsiswa+'&kelas='+kelas+'&jurusan='+jurusan+'&ruang='+ruang+'&tahun='+tahun+'&tahunhid='+tahunhid,
                                type: 'GET',
                                success: function (data){               
                                  var hsl=data.trim();      
                                  //alert(hsl);
                                  if (hsl=='y'){
                                    alert('Data Sudah Ada');
                                    return false();
                                    exit();
                                  }
                                  //alert(hsl);              
                                  alert('Data Berhasil Disimpan');  
                                  refresh();
                                  $("#tablesiswa_kelas").load('pages/siswa_kelas/siswa_kelas_load.php');

                                }
                        });
              }

            function pilang(){
              var angkatan = $('#pilihangk').val();
                 var kelas = $('#pilihkelas').val();
                 var jurusan = $('#pilihjurusan').val();
                 $("#tablesiswa_kelas").load('pages/siswa_kelas/siswa_kelas_load.php?angkatan='+angkatan+'&kelas='+kelas+'&jurusan='+jurusan);
            }
            function pilkelas(){
              var angkatan = $('#pilihangk').val();
                 var kelas = $('#pilihkelas').val();
                 var jurusan = $('#pilihjurusan').val();
                 $("#tablesiswa_kelas").load('pages/siswa_kelas/siswa_kelas_load.php?angkatan='+angkatan+'&kelas='+kelas+'&jurusan='+jurusan);
            }
            function piljur(){
                var angkatan = $('#pilihangk').val();
                 var kelas = $('#pilihkelas').val();
                 var jurusan = $('#pilihjurusan').val();
                 $("#tablesiswa_kelas").load('pages/siswa_kelas/siswa_kelas_load.php?angkatan='+angkatan+'&kelas='+kelas+'&jurusan='+jurusan);
            }

            $(document).ready(function (){
                 var angkatan = $('#pilihangk').val();
                 var kelas = $('#pilihkelas').val();
                 var jurusan = $('#pilihjurusan').val();
                 $("#tablesiswa_kelas").load('pages/siswa_kelas/siswa_kelas_load.php?angkatan='+angkatan+'&kelas='+kelas+'&jurusan='+jurusan);
                 $("#tablesiswa").load('pages/siswa_kelas/siswa_load.php');

                    $("#formsiswa_kelas").on('submit', function(e){
                          e.preventDefault();
                                      $.ajax({
                                                  type: 'POST',
                                                  url: 'pages/siswa_kelas/siswa_kelas_add_save.php',
                                                  data: new FormData(this),
                                                  contentType: false,
                                                  cache: false,
                                                  processData:false,
                                                  success: function(data){
                                                        //alert('lolos');
                                                        var hsl=data.trim();
                                                        //alert(hsl);
                                                        //return false;
                                                        if (hsl=='y'){
                                                      alert('Data Sudah ada');
                                                      return false;
                                                      exit();
                                                    }else{
                                                      $("#tablesiswa_kelas").load('pages/siswa_kelas/siswa_kelas_load.php');  
                                                      refresh();
                                                            alert('Data Berhasil Disimpan');
                                                  }
                                                      }
                                                });
                      });
            });


</script>
