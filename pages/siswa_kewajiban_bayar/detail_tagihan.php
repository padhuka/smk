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

	<?php while($catat = mysql_fetch_array( $rescatat )){
        //$depan=$depan.','.$catat['kd_siswa_kewajiban_bayar'];
    ?>
        
    <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label"><?php echo $catat['fk_kd_jenis_pembayaran'];?></label>

                  <div class="col-sm-6">
                    <input type="text" class="form-control" id="<?php echo $catat['kd_siswa_kewajiban_bayar'];?>" name="<?php echo $catat['kd_siswa_kewajiban_bayar'];?>" value="<?php echo $catat['tagih'];?>">
                  </div><span id="hps" onclick="hpstagihan('<?php echo $catat['nmtag'];?>','<?php echo $catat['kd_siswa_kewajiban_bayar'];?>');" style="color: blue; cursor: pointer;">Hapus</span>
                </div>
<?php } //$hasil=substr($depan,2);//echo $hasil;

//$kalimat = "satu, dua, tiga, empat, lima";
//$arr_kalimat = explode (",",$hasil);
//echo $arr_kalimat[1];
 ?>