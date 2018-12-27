<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper"  style="margin-left: -0px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Kelas
        <!--<small>Control panel</small>-->
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data Kelas</li>
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
                <div id="tablekelas">
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
            <form class="form-horizontal" enctype="multipart/form-data" novalidate id="formkelas">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">Kode</label>

                  <div class="col-sm-6">
                    <input type="text" class="form-control" id="kode" name="kode" >
                    <input type="hidden" class="form-control" id="kodehid" name="kodehid" >
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-4 control-label">Nama</label>

                  <div class="col-sm-6">
                    <input type="text" class="form-control" id="nama" name="nama">
                    <input type="hidden" class="form-control" id="namahid" name="namahid">
                  </div>
                </div>
                
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary" id="saveadd">Simpan</button>
                <button type="button" class="btn btn-primary" onclick="bataladd()" id="canceladd">Batal</button>

                <!--<button type="submit" class="btn btn-primary" onclick="simpanubah()" id="saveedit">Simpan </button>-->
              <button type="button" class="btn btn-primary" onclick="batalubah()" id="canceledit">Batal</button>
              <input type="text" name="sts" id="sts">
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
              //$('#saveedit').hide();
              $('#canceledit').hide();
              $('#kode').val('');
              $('#nama').val('');
              $('#kodehid').val('');
              $('#namahid').val('');
              $('#sts').val('');
              //document.getElementById("saveadd").disabled = false;        
              
            }

            function bataladd(){
              refresh();
            }

            function batalubah(){
              refresh();

            }
            function ubahkelas(a,b){                
                          //no_bukti,tr_date,transaction_type,fk_akun,nmakun,ref_akun,nmref,amount
                          $('#kode').val(a);
                          $('#nama').val(b);
                          $('#kodehid').val(a);
                          $('#namahid').val(b);
                          $('#sts').val('1');

                          //$('#saveadd').hide();
                          $('#canceladd').hide();
                          //$('#saveedit').show();
                          $('#canceledit').show();
                         
                          //document.getElementById("saveadd").disabled = true;        
                          //document.getElementById("saveedit").disabled = false;        

                        
            }
           
            function simpanubah(){
                  var kode = $('#kode').val();
                  var nama = $('#nama').val();
                  var kodehid = $('#kodehid').val();
                  var namahid = $('#namahid').val();
                  //alert('pages/kelas/kelas_edit_save.php?kode='+kode+'&nama='+nama+'&kodehid='+kodehid+'&namahid='+namahid);
                   $.ajax({
                                url: 'pages/kelas/kelas_edit_save.php?kode='+kode+'&nama='+nama+'&kodehid='+kodehid+'&namahid='+namahid,
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
                                  $("#tablekelas").load('pages/kelas/kelas_load.php');
                                  $('form :submit').attr("enable", "enable");

                                }
                        });
              }

            $(document).ready(function (){
                 $("#tablekelas").load('pages/kelas/kelas_load.php');

                    $("#formkelas").on('submit', function(e){
                          e.preventDefault();
                          var sts = $('#sts').val();
                          if (sts=='') {
                            var lks='kelas_add_save.php';
                            //alert(lks);
                            //return false;
                          }else{
                            var lks='kelas_edit_save.php';
                            //alert(lks);
                            //return false;
                          }
                                      $.ajax({
                                                  type: 'POST',
                                                  url: 'pages/kelas/'+lks,
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
                                                      $("#tablekelas").load('pages/kelas/kelas_load.php');  
                                                      refresh();
                                                            alert('Data Berhasil Disimpan');
                                                  }
                                                      }
                                                });
                      });
            });
</script>
