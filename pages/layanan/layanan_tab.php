<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper"  style="margin-left: -0px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Layanan
        <!--<small>Control panel</small>-->
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data Layanan</li>
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
                <table id="example1" class="table table-bordered table-hover">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Kode Layanan</th>
                            <th>Nama Layanan</th>
                          </tr>
                        </thead>
                        
                        <tbody>
                            <tr class="tr1">
                                <td>1</td>
                                <td>Lay1</td>
                                <td>Kebidanan</td>                                
                            </tr>                                            
                            <tr class="tr1">
                                <td>2</td>
                                <td>lay2</td>
                                <td>Fisioterapi</td>                                
                            </tr>
                            <tr class="tr1">
                                <td>3</td>
                                <td>lay3</td>
                                <td>Kedokteran Umum</td>                                
                            </tr>                        
                            <tr class="tr1">
                                <td>4</td>
                                <td>lay4</td>
                                <td>Kedokteran Gigi</td>                                
                            </tr>  
                        </tbody>
                      </table>
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
            <form class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">Kode Layanan</label>

                  <div class="col-sm-7">
                    <input type="email" class="form-control" id="inputEmail3">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-4 control-label">Nama Layanan</label>

                  <div class="col-sm-7">
                    <input type="text" class="form-control" id="inputPassword3">
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-info pull-left">Simpan</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>

    </div>



      
    </section>
</div>
<script>
  $(function () {
    $('#example1').DataTable()
  })
</script>