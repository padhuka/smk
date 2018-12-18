<?php
                            include_once 'lib/config.php';
                      ?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper"  style="margin-left: -0px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Tagihan
        <!--<small>Control panel</small>-->
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data Tagihan</li>
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
                <div id="tablesiswa_kewajiban_bayar">
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
            <form class="form-horizontal" enctype="multipart/form-data" novalidate id="formsiswa_kewajiban_bayar">
              <div class="box-body">
                <h3>
        Buat Tagihan
        <!--<small>Control panel</small>-->
      </h3>
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
                <button type="button" class="btn btn-primary" onclick="buattagihan()" id="buattagih">Buat Gaji</button>             
              </div>
              <!-- /.box-footer -->
            </form>
          </div>

    </div>
    <div class="col-md-4" style="float: right;">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <!-- <div class="box-header with-border">
              <h3 class="box-title">Horizontal Form</h3>
            </div>
            /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" enctype="multipart/form-data" novalidate id="formsiswa_kewajiban_bayar">
              <div class="box-body">
                
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">Tahun Akademik</label>

                  <div class="col-sm-6">
                    <select id="tahunak" name="tahunak" class="form-control">
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
                    <input type="text" class="form-control" id="nama" name="nama" >
                    <input type="hidden" class="form-control" id="namahid" name="namahid" >
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

            function ubahsiswa_kewajiban_bayar(a,b,c,d,e,f,g,h){

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

            
            $(document).ready(function (){
                 $("#tablesiswa_kewajiban_bayar").load('pages/siswa_kewajiban_bayar/siswa_kewajiban_bayar_load.php');

                    $("#formsiswa_kewajiban_bayar").on('submit', function(e){
                          e.preventDefault();
                          var sts = $('#sts').val();
                          if (sts=='') {
                            var lks='siswa_kewajiban_bayar_add_save.php';
                          }else{
                            var lks='siswa_kewajiban_bayar_edit_save.php';
                          }
                                      $.ajax({
                                                  type: 'POST',
                                                  url: 'pages/siswa_kewajiban_bayar/'+lks,
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
                                                      $("#tablesiswa_kewajiban_bayar").load('pages/siswa_kewajiban_bayar/siswa_kewajiban_bayar_load.php');  
                                                      refresh();
                                                            alert('Data Berhasil Disimpan');
                                                  }
                                                      }
                                                });
                      });
            });

            function buattagihan(){
                              var x=$('#tahunak').val();
                                $.ajax({
                                    url: "siswa_kewajiban_bayar/buattagihan_add.php?tahun="+x,
                                    type: "GET",
                                    success: function (ajaxData){
                                        $("#ModalAddTagih").html(ajaxData);
                                        $("#ModalAddTagih").modal({backdrop: 'static',keyboard: false});
                                    }
                                });
            };


</script>
