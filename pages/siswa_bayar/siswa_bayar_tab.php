                      <?php
                            include_once 'lib/config.php';
                      ?>
  <script>
    
            function buattagihan(){
                              var e = document.getElementById("tahun");
                              var x = e.options[e.selectedIndex].value;
                              
                                $.ajax({
                                    url: "pages/siswa_bayar/buattagihan_save.php?tahun="+x,
                                    type: "GET",
                                    success: function (data){
                                        var hsl=data.trim();
                                      //alert(hsl);                                     
                                        var hasil=hsl.split("-");
                                        //alert('Jumlah Siswa :'+hasil[1]);
                                        alert(hasil);
                                        $("#tablesiswa_bayar").load('pages/siswa_bayar/siswa_bayar_load.php')

                                    }
                                });
            };
  </script>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper"  style="margin-left: -0px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Siswa
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
        <li class="active">Data Pembayaran</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-8">
          <!-- general form elements -->
          <div class="box box-primary">
            
              <div class="box-body">
                <div id="tablesiswa_bayar">
                </div>

                <div id="idbayar">
                  <h3>
                    Data Pembayaran Siswa
                    <!--<small>Control panel</small>-->
                    
                  </h3>
                  <div id="tablebayar"></div>
                </div>
              </div>             
          </div>
          <!-- /.box -->
        </div>
  <!--
        <div class="col-md-4">
         Horizontal Form 
                <h4>
                  <u>Buat Tagihan</u>&nbsp;(<span onclick="tampiltagihan()" style="color: blue; cursor:pointer;" id="op">Open</span>)
                  <small>Control panel</small>
                </h4>
            
        </div>-->

        <div class="col-md-4" id="formtagihan">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <!-- <div class="box-header with-border">
              <h3 class="box-title">Horizontal Form</h3>
            </div>
            /.box-header -->
            <!-- form start -->
            

            <form class="form-horizontal" enctype="multipart/form-data" novalidate id="formsiswa_tagihan_bayar">
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
                          <input type="hidden" class="form-control" id="tahunhid" name="tahunhid" readonly="yes">
                      </div>
                    </div>
                
               
              </div>

              <!-- /.box-body -->
              <div class="box-footer">
                <button type="button" class="btn btn-primary" onclick="buattagihan();" id="buattagih">Buat Tagihan</button>             
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
            <form class="form-horizontal" enctype="multipart/form-data" novalidate id="formsiswa_bayar">
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
                    <input type="text" class="form-control" id="nama" name="nama" readonly="yes">
                    <input type="hidden" class="form-control" id="namahid" name="namahid" >
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">Kelas</label>

                  <div class="col-sm-6">
                    <input type="text" class="form-control" id="kelas" name="kelas" readonly="yes">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">Jurusan</label>

                  <div class="col-sm-6">
                    <input type="text" class="form-control" id="jurusan" name="jurusan" readonly="yes">
                  </div>
                </div>
              <!--
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
              -->
               <span id="detail">
                    
                </span>
                
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
          
          $('#formtagihan').hide();
          $('#idbayar').hide();

            function tampiltagihan(){
              var buka = $('#op').html();
              if (buka=='Open'){
                $('#op').html('Close');
                $('#formtagihan').show();
              }else{
                $('#op').html('Open');
                $('#formtagihan').hide();
              }
            } 
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
              $('#detail').hide();

              //document.getElementById("saveadd").disabled = true;        
            }

            function batal(){
              refresh();
                          var sts = $('#sts').val();
                          if (sts=='1') {                           
                            $('#sts').val('');
                          }
            }

            function ubahsiswa_kewajiban_bayar(a,b,c,d,e){
                  $('#kode').val(e);   
                  $('#kodehid').val(e);  
                  $('#nama').val(b);  
                  $('#tahun').val(c);
                  $('#tahunhid').val(c);
                  $('#jurusan').val(d);
                  $('#kelas').val(c);
                  //$('#sts').val('1');
                  $('#detail').show();

                  //fk_kd_siswa_kelas fk_kd_kelas_jenjang_bayar total_bayar status_bayar
                  $("#detail").load('pages/siswa_bayar/detail_tagihan.php?kdkelas='+e);
                 
                          //document.getElementById("saveadd").disabled = false;        
            }

            function hpstagihan(a,b){
              var r = confirm("Anda akan menghapus data "+a+"?");
              if (r == false) {
                return false;
              } else {                
                 var kdkelase=$('#kode').val();
                 $.ajax({
                    url: "pages/siswa_bayar/tagihan_del.php?id="+b,
                    type: "GET",
                    success: function (ajaxData){
                      $('#detail').load('pages/siswa_kewajiban_bayar/detail_tagihan.php?kdkelas='+kdkelase);
                      $("#tablesiswa_kewajiban_bayar").load('pages/siswa_bayar/siswa_kewajiban_bayar_load.php');
                    }
                 });
                 
               }
            }

            function pilangk(){
                var angkatan = $('#pilihangk').val();
                 var kelas = $('#pilihkelas').val();
                 var jurusan = $('#pilihjurusan').val();
                 $("#tablesiswa_bayar").load('pages/siswa_bayar/siswa_bayar_load.php?angkatan='+angkatan+'&kelas='+kelas+'&jurusan='+jurusan);
            }
            function pilkelas(){
              var angkatan = $('#pilihangk').val();
                 var kelas = $('#pilihkelas').val();
                 var jurusan = $('#pilihjurusan').val();
                 $("#tablesiswa_bayar").load('pages/siswa_bayar/siswa_bayar_load.php?angkatan='+angkatan+'&kelas='+kelas+'&jurusan='+jurusan);

            }
            function piljur(){
                var angkatan = $('#pilihangk').val();
                 var kelas = $('#pilihkelas').val();
                 var jurusan = $('#pilihjurusan').val();
                 $("#tablesiswa_bayar").load('pages/siswa_bayar/siswa_bayar_load.php?angkatan='+angkatan+'&kelas='+kelas+'&jurusan='+jurusan);
            }
            
            $(document).ready(function (){
              var angkatan = $('#pilihangk').val();
                 var kelas = $('#pilihkelas').val();
                 var jurusan = $('#pilihjurusan').val();
                 $("#tablesiswa_bayar").load('pages/siswa_bayar/siswa_bayar_load.php?angkatan='+angkatan+'&kelas='+kelas+'&jurusan='+jurusan);

                    $("#formsiswa_bayar").on('submit', function(e){                         
                          e.preventDefault();
                           var bayare = $('#bayar').val();
                          var pilx = document.getElementById("listtagih");
                          //var pils = pil.options[pil.selectedIndex].text;
                          var pilsx = pilx.options[pilx.selectedIndex].value;

                           if (pilsx=='' || bayare=='0'){
                              return false;
                           }
                       //alert(bayare);
                          var sts = $('#sts').val();
                          if (sts=='') {
                            var lks='siswa_bayar_add_save.php?kode='+pilsx;
                          }else{
                            kdne=$('#kode').val();
                            var lks='siswa_bayar_edit_save.php?kdkelas='+kdne;
                          }
                          
                                      $.ajax({
                                                  type: 'POST',
                                                  url: 'pages/siswa_bayar/'+lks,
                                                  data: new FormData(this),
                                                  contentType: false,
                                                  cache: false,
                                                  processData:false,
                                                  success: function(data){
                                                        //alert('lolos');
                                                        var hsl=data.trim();
                                                        //alert(hsl);
                                                        //return false;                
                                                      
                                                      refresh();
                                                            alert('Data Berhasil Disimpan');
                                                            $("#tablesiswa_bayar").load('pages/siswa_bayar/siswa_bayar_load.php');
                                                      }
                                                });
                      });
            });



</script>

