<?php
                            include_once 'lib/config.php';
                      ?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper"  style="margin-left: -0px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Pegawai
        <!--<small>Control panel</small>-->
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data Pegawai</li>
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
                <div id="tablepegawai">
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
            <form class="form-horizontal" enctype="multipart/form-data" novalidate id="formpegawai">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">Kode</label>

                  <div class="col-sm-6">
                    <input type="text" class="form-control" id="kode" name="kode" >
                    <input type="hidden" class="form-control" id="kodehid" name="kodehid" >
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">NIP</label>

                  <div class="col-sm-6">
                    <input type="text" class="form-control" id="nip" name="nip" >
                    <input type="hidden" class="form-control" id="niphid" name="niphid" >
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">Nama</label>

                  <div class="col-sm-6">
                    <input type="text" class="form-control" id="nama" name="nama" >
                  </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-4 control-label">Alamat</label>

                    <div class="col-sm-6">
                      <textarea id="alamat" name="alamat" class="col-sm-12"></textarea>
                    </div>
                </div>
                                            
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-4 control-label">Tempat Lahir</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="tmtlahir" name="tmtlahir">
                    </div>
                </div>
                 <div class="form-group">
                    <label for="inputPassword3" class="col-sm-4 control-label">Tanggal Lahir</label>

                    <div class="input-group date" style="padding-left: 15px;">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>

                      <input type="text" class="form-control" id="tgllahir" name="tgllahir" style="width: 65%;" value="<?php echo date('Y-m-d');?>">
                    </div>
                    <!-- /.input group -->
                </div>

                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-4 control-label">Jenis Kelamin</label>

                    <div class="col-sm-6">
                      <select id="jkel" name="jkel" class="form-control">
                          <option value="L">Laki-laki</option>
                          <option value="P">Perempuan</option>
                      </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-4 control-label">Pendidikan</label>
                    <div class="col-sm-6">
                       <select id="pendidikan" name="pendidikan" class="form-control">
                        <?php
                        $sqldidik = "SELECT * FROM t_jenjang_pendidikan ORDER BY kd_jenjang_pendidikan ASC";
                                    $resdidik = mysql_query( $sqldidik );
                                    while($hdidik = mysql_fetch_array( $resdidik )){
                        ?>
                          <option value="<?php echo $hdidik['kd_jenjang_pendidikan'];?>"><?php echo $hdidik['nama'];?></option>
                        <?php }?>
                      </select>
                    </div>
                </div> 

                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-4 control-label">Bidang Studi</label>
                    <div class="col-sm-6">
                      <select id="bidang" name="bidang" class="form-control">
                        <?php
                        $sqldidik = "SELECT * FROM t_bidang_studi ORDER BY nama ASC";
                                    $resdidik = mysql_query( $sqldidik );
                                    while($hdidik = mysql_fetch_array( $resdidik )){
                        ?>
                          <option value="<?php echo $hdidik['kd_bidang_studi'];?>"><?php echo $hdidik['nama'];?></option>
                        <?php }?>
                      </select>
                    </div>
                </div>  
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-4 control-label">Golongan</label>
                    <div class="col-sm-6">
                      <select id="golongan" name="golongan" class="form-control">
                        <?php
                        $sqldidik = "SELECT * FROM t_golongan ORDER BY nama ASC";
                                    $resdidik = mysql_query( $sqldidik );
                                    while($hdidik = mysql_fetch_array( $resdidik )){
                        ?>
                          <option value="<?php echo $hdidik['kd_golongan'];?>"><?php echo $hdidik['nama'];?></option>
                        <?php }?>
                      </select>
                    </div>
                </div> 
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-4 control-label">Jabatan</label>
                    <div class="col-sm-6">
                      <select id="jabatan" name="jabatan" class="form-control">
                        <?php
                        $sqldidik = "SELECT * FROM t_jabatan ORDER BY kd_jabatan ASC";
                                    $resdidik = mysql_query( $sqldidik );
                                    while($hdidik = mysql_fetch_array( $resdidik )){
                        ?>
                          <option value="<?php echo $hdidik['kd_jabatan'];?>"><?php echo $hdidik['nama'];?></option>
                        <?php }?>
                      </select>
                    </div>
                </div>               
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-4 control-label">Status</label>
                    <div class="col-sm-6">
                      <select id="status" name="status" class="form-control">
                        <?php
                        $sqldidik = "SELECT * FROM t_pegawai_status ORDER BY kd_pegawai_status ASC";
                                    $resdidik = mysql_query( $sqldidik );
                                    while($hdidik = mysql_fetch_array( $resdidik )){
                        ?>
                          <option value="<?php echo $hdidik['kd_pegawai_status'];?>"><?php echo $hdidik['nama'];?></option>
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

              $('#kode').val('');   
              $('#kodehid').val('');   
              $('#nip').val('');
              $('#niphid').val('');   
              $('#nama').val('');
              $('#alamat').val(''); 
              $('#tmtlahir').val('');
              $('#tgllahir').val('<?php echo date('Y-m-d');?>');
              $('#jkel').val('');
              $('#pendidikan').val('');
              $('#bidang').val('');
              $('#golongan').val('');
              $('#jabatan').val('');
              $('#status').val('');              
              $('#alamat').val('');
            }

            function bataladd(){
              refresh();
            }

            function batalubah(){
              refresh();
            }
            //<?//kd_pegawai  nip nama  alamat  tempat_lahir  tgl_lahir jenis_kelamin fk_kd_jenjang_pendidikan  fk_kd_bidang_studi  fk_kd_golongan  fk_kd_jabatan fk_kd_pegawai_status?>

            function ubahpegawai(a,b,c,d,e,f,g,h,i,j,k,l){                
                          //no_bukti,tr_date,transaction_type,fk_akun,nmakun,ref_akun,nmref,amount
                  $('#kode').val(a);   
                  $('#kodehid').val(a);   
                  $('#nip').val(b);
                  $('#niphid').val(b);
                  $('#nama').val(c);
                  $('#alamat').val(d); 
                  $('#tmtlahir').val(e);
                  $('#tgllahir').val(f);
                  $('#jkel').val(g);
                  $('#pendidikan').val(h);
                  $('#bidang').val(i);
                  $('#golongan').val(j);
                  $('#jabatan').val(k);
                  $('#status').val(l);
                          
                          $('#saveadd').hide();
                          $('#canceladd').hide();
                          $('#saveedit').show();
                          $('#canceledit').show();
            }
            function simpanubah(){
                  var kode = $('#kode').val();   
                  var kodehid = $('#kodehid').val();   
                  var nip = $('#nip').val();
                  var niphid = $('#niphid').val();
                  var nama = $('#nama').val();
                  var alamat = $('#alamat').val(); 
                  var tempat_lahir = $('#tmtlahir').val();
                  var tgl_lahir = $('#tgllahir').val();
                  var jenis_kelamin  = $('#jkel').val();
                  var fk_kd_jenjang_pendidikan = $('#pendidikan').val();
                  var fk_kd_bidang_studi = $('#bidang').val();
                  var fk_kd_golongan = $('#golongan').val();
                  var fk_kd_jabatan = $('#jabatan').val();
                  var fk_kd_pegawai_status = $('#status').val();

                  //alert('pages/pegawai/pegawai_edit_save.php?kode='+kode+'&kodehid='+kodehid+'&nip='+nip+'&niphid='+niphid+'&nama='+nama+'&alamat='+alamat+'&tmtlahir='+tempat_lahir+'&tgllahir='+tgl_lahir+'&jkel='+jenis_kelamin+'&pendidikan='+fk_kd_jenjang_pendidikan+'&bidang='+fk_kd_bidang_studi+'&golongan='+fk_kd_golongan+'&jabatan='+fk_kd_jabatan+'&status='+fk_kd_pegawai_status);

                   $.ajax({
                                url: 'pages/pegawai/pegawai_edit_save.php?kode='+kode+'&kodehid='+kodehid+'&nip='+nip+'&niphid='+niphid+'&nama='+nama+'&alamat='+alamat+'&tmtlahir='+tempat_lahir+'&tgllahir='+tgl_lahir+'&jkel='+jenis_kelamin+'&pendidikan='+fk_kd_jenjang_pendidikan+'&bidang='+fk_kd_bidang_studi+'&golongan='+fk_kd_golongan+'&jabatan='+fk_kd_jabatan+'&status='+fk_kd_pegawai_status,
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
                                  $("#tablepegawai").load('pages/pegawai/pegawai_load.php');

                                }
                        });
              }

            $(document).ready(function (){
                 $("#tablepegawai").load('pages/pegawai/pegawai_load.php');

                    $("#formpegawai").on('submit', function(e){
                          e.preventDefault();
                                      $.ajax({
                                                  type: 'POST',
                                                  url: 'pages/pegawai/pegawai_add_save.php',
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
                                                      $("#tablepegawai").load('pages/pegawai/pegawai_load.php');  
                                                      refresh();
                                                            alert('Data Berhasil Disimpan');
                                                  }
                                                      }
                                                });
                      });
            });


</script>
