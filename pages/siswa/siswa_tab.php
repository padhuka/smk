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
        <li class="active">Data Siswa</li>
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
            <form class="form-horizontal" enctype="multipart/form-data" novalidate id="formsiswa">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">Kode</label>

                  <div class="col-sm-6">
                    <input type="text" class="form-control" id="kode" name="kode" >
                    <input type="hidden" class="form-control" id="kodehid" name="kodehid" >
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">NIS</label>

                  <div class="col-sm-6">
                    <input type="text" class="form-control" id="nis" name="nis" >
                    <input type="hidden" class="form-control" id="nishid" name="nishid" >
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">NIS Nasional</label>

                  <div class="col-sm-6">
                    <input type="text" class="form-control" id="nisn" name="nisn" >
                    <input type="hidden" class="form-control" id="nisnhid" name="nisnhid" >
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-4 control-label">Nama</label>

                  <div class="col-sm-6">
                    <input type="text" class="form-control" id="nama" name="nama">
                  </div>
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

                  <input type="text" class="form-control" id="tgllahir" style="width: 65%;" value="<?php echo date('Y-m-d');?>">
                </div>
                <!-- /.input group -->
              </div>

                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-4 control-label">Alamat</label>

                    <div class="col-sm-6">
                      <textarea id="alamat" name="alamat" class="col-sm-12"></textarea>
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
              $('#nis').val('');
              $('#nishid').val('');
              $('#nisn').val('');
              $('#nisnhid').val('');
              $('#nama').val('');   
              $('#jkel').val('');
              $('#tmtlahir').val('');
              $('#tgllahir').val('<?php echo date('Y-m-d');?>');
              $('#alamat').val('');
            }

            function bataladd(){
              refresh();
            }

            function batalubah(){
              refresh();
            }
            function ubahsiswa(a,b,c,d,e,f,g,h){                
                          //no_bukti,tr_date,transaction_type,fk_akun,nmakun,ref_akun,nmref,amount
                          $('#kode').val(a);
                          $('#kodehid').val(a);              
                          $('#nis').val(b);
                          $('#nishid').val(b);
                          $('#nisn').val(c);
                          $('#nisnhid').val(c);
                          $('#nama').val(d);   
                          //$('#jkel').val(e);                          
                          $('#tmtlahir').val(f);
                          $('#tgllahir').val(g);
                          $('#alamat').val(h);
                          
                          var jk= e;
                          
                          if (jk=='L'){
                              var myobject = {
                                  L : 'Laki-laki',
                                  P : 'Perempuan'
                              };
                            }
                            if (jk=='P'){
                              var myobject = {
                                  P : 'Perempuan',
                                  L : 'Laki-laki',                     
                              };
                            }
                            
                             var select = document.getElementById("jkel");
                              select.options.length = 0;
                              for(index in myobject) {
                                  select.options[select.options.length] = new Option(myobject[index], index);
                              }

                          $('#saveadd').hide();
                          $('#canceladd').hide();
                          $('#saveedit').show();
                          $('#canceledit').show();
            }
            function simpanubah(){
                  var kode = $('#kode').val();
                  var kodehid = $('#kodehid').val();              
                  var nis = $('#nis').val();
                  var nishid = $('#nishid').val();
                  var nisn = $('#nisn').val();
                  var nisnhid = $('#nisnhid').val();
                  var nama = $('#nama').val();   
                  var jkel = $('#jkel').val();
                  var tmtlahir = $('#tmtlahir').val();
                  var tgllahir = $('#tgllahir').val();
                  var alamat = $('#alamat').val();
                  //alert('pages/siswa/siswa_edit_save.php?kode='+kode+'&kodehid='+kodehid+'&nis='+nis+'&nishid='+nishid+'&nisn='+nisn+'&nisnhid='+nisnhid+'&nama='+nama+'&jkel='+jkel+'&tmtlahir='+tmtlahir+'&tgllahir='+tgllahir+'&alamat='+alamat);
                   $.ajax({
                                url: 'pages/siswa/siswa_edit_save.php?kode='+kode+'&kodehid='+kodehid+'&nis='+nis+'&nishid='+nishid+'&nisn='+nisn+'&nisnhid='+nisnhid+'&nama='+nama+'&jkel='+jkel+'&tmtlahir='+tmtlahir+'&tgllahir='+tgllahir+'&alamat='+alamat,
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
                                  $("#tablesiswa").load('pages/siswa/siswa_load.php');

                                }
                        });
              }

            $(document).ready(function (){
                 $("#tablesiswa").load('pages/siswa/siswa_load.php');

                    $("#formsiswa").on('submit', function(e){
                          e.preventDefault();
                                      $.ajax({
                                                  type: 'POST',
                                                  url: 'pages/siswa/siswa_add_save.php',
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
                                                      $("#tablesiswa").load('pages/siswa/siswa_load.php');  
                                                      refresh();
                                                            alert('Data Berhasil Disimpan');
                                                  }
                                                      }
                                                });
                      });
            });


</script>
