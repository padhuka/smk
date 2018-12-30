<?php
	include_once '../../lib/config.php';
    include_once '../../lib/fungsi.php';
    $kdkelas= $_GET['kdkelas'];

     $j=1;
     $depan='M';
                                    $sqlcatat = "SELECT A.*,B.*, E.nama AS nmtag,A.total_bayar As tagih,C.nama AS jurusan,B.total_bayar AS tagihan FROM t_siswa_kewajiban_bayar A
                                    LEFT JOIN t_kelas_jenjang_bayar B ON A.fk_kd_kelas_jenjang_bayar=B.kd_kelas_jenjang_bayar
                                    LEFT JOIN t_jurusan C ON B.fk_kd_jurusan=C.kd_jurusan
                                    LEFT JOIN t_tahun_akademik D ON B.fk_kd_tahun_akademik=D.kd_tahun_akademik
                                    LEFT JOIN t_jenis_pembayaran E ON B.fk_kd_jenis_pembayaran=E.kd_jenis_pembayaran 
                                    WHERE A.fk_kd_siswa_kelas='$kdkelas'  
                                    ORDER BY A.kd_siswa_kewajiban_bayar DESC";
                                    //echo $sqlcatat;
                                    $rescatat = mysql_query( $sqlcatat );   
?>
    <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">Tagihan</label>
                  <div class="col-sm-6">
                    <select id="listtagih" name="listtagih" onchange="tottagih()" class="form-control" >
                      <option value="">-- Tagihan --</option>
                        <?php while($catat = mysql_fetch_array( $rescatat )){?>                
                        <option value="<?php echo $catat['kd_siswa_kewajiban_bayar'];?>"><?php echo $catat['nmtag'];?></option>
                      <?php } ?>
                    </select>                    
                  </div>

    </div>
    <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">Jumlah Tagihan</label>
                  <div class="col-sm-6">
                      <input type="text" class="form-control" name="tottg" id="tottg" readonly="yes">                   
                  </div>
                  
    </div>
    <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">Jumlah Terbayar</label>
                  <div class="col-sm-6">
                      <input type="text" class="form-control" name="terbyr" id="terbyr" readonly="yes">                   
                  </div>
                  
    </div>
    <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">Kekurangan</label>
                  <div class="col-sm-6">
                      <input type="text" class="form-control" name="kurang" id="kurang" readonly="yes">                   
                  </div>
                  
    </div>
    <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">Pembayaran</label>
                  <div class="col-sm-6">
                      <input type="text" class="form-control" name="bayar" id="bayar" value="0">                   
                  </div>
                  
    </div>
<?php //} //$hasil=substr($depan,2);//echo $hasil;

//$kalimat = "satu, dua, tiga, empat, lima";
//$arr_kalimat = explode (",",$hasil);
//echo $arr_kalimat[1];
 ?>
 <script>
   function tottagih(){
      pil = document.getElementById("listtagih");
      //var pils = pil.options[pil.selectedIndex].text;
      var pils = pil.options[pil.selectedIndex].value;
      //alert(pils);
      $('#tottg').val('');
      if (pils){
            $.ajax({
                url: "pages/siswa_bayar/detail_tagihan_pilih.php?id="+pils,
                dataType:'script',
                type: "GET",
                    success: function (data){
                          $('#tottg').val(hsl[0]);
                          $('#terbyr').val(hsl[1]);
                          $('#kurang').val(hsl[2]);
                    }
              });
      }

       $('#idbayar').show();
       $("#tablebayar").load('pages/siswa_bayar/bayar_load.php?kdkelas='+pils);
      
   }
 </script>