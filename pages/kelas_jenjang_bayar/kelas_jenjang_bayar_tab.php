<?php
                            include_once 'lib/config.php';
                      ?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper"  style="margin-left: -0px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Jenjang Bayar
        <!--<small>Control panel</small>-->
        &nbsp;&nbsp;<span style="font-size: 15px">Tahun Akademik:</span>
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
      </h1>

      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data Jenjang Bayar</li>
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
                <div id="tablekelas_jenjang_bayar">
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
            <form class="form-horizontal" enctype="multipart/form-data" novalidate id="formkelas_jenjang_bayar">
              <div class="box-body">
                
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
                  <label for="inputEmail3" class="col-sm-4 control-label">Nama</label>

                  <div class="col-sm-6">
                    <select id="nama" name="nama" class="form-control">
                        <?php
                        $sqldidik = "SELECT * FROM t_jenis_pembayaran ORDER BY kd_jenis_pembayaran ASC";
                                    $resdidik = mysql_query( $sqldidik );
                                    while($hdidik = mysql_fetch_array( $resdidik )){
                        ?>
                          <option value="<?php echo $hdidik['kd_jenis_pembayaran'];?>"><?php echo $hdidik['nama'];?></option>
                        <?php }?>
                      </select>
                    <!--<input type="text" class="form-control" id="nama" name="nama" >
                    <input type="hidden" class="form-control" id="namahid" name="namahid" >-->
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
                  <label for="inputEmail3" class="col-sm-4 control-label">Jumlah</label>

                  <div class="col-sm-6">
                    <input type="text" class="form-control" id="jumlah" name="jumlah" >
                  </div>
                </div>

                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-4 control-label">Wajib</label>
                    <div class="col-sm-6">
                      <select id="wajib" name="wajib" class="form-control">                      
                          <option value="Wajib">Wajib</option>
                          <option value="Tidak">Tidak</option>
                      </select>
                    </div>
                </div>
               
               
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary" id="saveadd">Simpan</button>
                <button type="button" class="btn btn-primary" onclick="batal()" id="canceladd">Batal</button>             
              <input type="hidden" name="sts" id="sts">
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
              //$('#tahun').val('');   
              $('#kode').val('');   
              $('#kodehid').val('');   
              $('#nama').val('');
              $('#kelas').val('');
              $('#jurusan').val('');
              $('#jumlah').val('');
              $('#wajib').val('');
              $('#tahunhid').val('');
              $('#sts').val('');

              //document.getElementById("saveadd").disabled = true;        
            }

            function batal(){
              refresh();
                          var sts = $('#sts').val();
                          if (sts=='1') {                           
                            $('#sts').val('');
                          }
            }

            function ubahkelas_jenjang_bayar(a,b,c,d,e,f,g,h){

                  $('#kode').val(a);   
                  $('#kodehid').val(a);  
                  $('#nama').val(b);  
                  $('#tahun').val(c);
                  $('#tahunhid').val(c);
                  $('#jurusan').val(d);
                  $('#kelas').val(e);
                  $('#jumlah').val(f);
                  $('#wajib').val(g);


                  $('#sts').val('1');
                          //document.getElementById("saveadd").disabled = false;        
            }
            function pilangk(){              
              var angkatan = $('#pilihangk').val();
                 var kelas = $('#pilihkelas').val();
                 var jurusan = $('#pilihjurusan').val();
                 //alert('pages/kelas_jenjang_bayar/kelas_jenjang_bayar_load.php?angkatan='+angkatan+'&kelas='+kelas+'&jurusan='+jurusan);
                 $("#tablekelas_jenjang_bayar").load('pages/kelas_jenjang_bayar/kelas_jenjang_bayar_load.php?angkatan='+angkatan+'&kelas='+kelas+'&jurusan='+jurusan);
            }

            function pilkelas(){
              var angkatan = $('#pilihangk').val();
                 var kelas = $('#pilihkelas').val();
                 var jurusan = $('#pilihjurusan').val();
                 $("#tablekelas_jenjang_bayar").load('pages/kelas_jenjang_bayar/kelas_jenjang_bayar_load.php?angkatan='+angkatan+'&kelas='+kelas+'&jurusan='+jurusan);
            }
            function piljur(){
                var angkatan = $('#pilihangk').val();
                 var kelas = $('#pilihkelas').val();
                 var jurusan = $('#pilihjurusan').val();
                 $("#tablekelas_jenjang_bayar").load('pages/kelas_jenjang_bayar/kelas_jenjang_bayar_load.php?angkatan='+angkatan+'&kelas='+kelas+'&jurusan='+jurusan);
            }
            
            $(document).ready(function (){
                 var angkatan = $('#pilihangk').val();
                 var kelas = $('#pilihkelas').val();
                 var jurusan = $('#pilihjurusan').val();

                 $("#tablekelas_jenjang_bayar").load('pages/kelas_jenjang_bayar/kelas_jenjang_bayar_load.php?angkatan='+angkatan+'&kelas='+kelas+'&jurusan='+jurusan);

                    $("#formkelas_jenjang_bayar").on('submit', function(e){
                          e.preventDefault();
                          var sts = $('#sts').val();
                          if (sts=='') {
                            var lks='kelas_jenjang_bayar_add_save.php';
                          }else{
                            var lks='kelas_jenjang_bayar_edit_save.php';
                          }

                                      $.ajax({
                                                  type: 'POST',
                                                  url: 'pages/kelas_jenjang_bayar/'+lks,
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
                                                      $("#tablekelas_jenjang_bayar").load('pages/kelas_jenjang_bayar/kelas_jenjang_bayar_load.php');  
                                                      refresh();
                                                            alert('Data Berhasil Disimpan');
                                                  }
                                                      }
                                                });
                      });
            });


</script>
