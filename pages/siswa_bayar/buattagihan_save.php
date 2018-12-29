<?php
	//kd_siswa_kewajiban_bayar 	fk_kd_siswa_kelas 	fk_kd_kelas_jenjang_bayar 	status_bayar 
	include_once '../../lib/config.php';
    include_once '../../lib/fungsi.php';
    $tahunak= $_GET['tahun'];
    $kdini = date('YmdHis');
    //$tahunak= '2018/2019';

		$result = mysql_query("SELECT * FROM t_siswa_kelas WHERE fk_kd_tahun_akademik='$tahunak'");
		$num_rows = mysql_num_rows($result);


		//PROSES
		$i=1;
		$j=0;
		$sqlcatat="SELECT * FROM t_siswa_kelas A
		LEFT JOIN t_kelas_jenjang_bayar B ON A.fk_kd_tahun_akademik=B.fk_kd_tahun_akademik AND A.fk_kd_jurusan=B.fk_kd_jurusan AND A.fk_kd_kelas=B.fk_kd_kelas
		WHERE A.fk_kd_tahun_akademik='$tahunak' AND B.kd_kelas_jenjang_bayar<>''";
		//echo $sqlcatat;
		$jml = mysql_num_rows(mysql_query($sqlcatat));

		if ($jml){

				$rescatat = mysql_query( $sqlcatat );
		        while($catat = mysql_fetch_array( $rescatat )){
		        	//filter
				        	$kode=$kdini.'-'.$i++;
				        	$sqlcek="SELECT * FROM t_siswa_kewajiban_bayar WHERE fk_kd_kelas_jenjang_bayar='$catat[kd_kelas_jenjang_bayar]' AND fk_kd_siswa_kelas='$catat[kd_siswa_kelas]'";
				        	//echo $sqlcek;fk_kd_siswa_kelas	fk_kd_kelas_jenjang_bayar	total_bayar	status_bayar
				        	$hcek=mysql_fetch_array(mysql_query($sqlcek));
				        		if (!$hcek){
				        			$sqltbemp = "INSERT INTO t_siswa_kewajiban_bayar (kd_siswa_kewajiban_bayar,fk_kd_siswa_kelas,fk_kd_kelas_jenjang_bayar,total_bayar) VALUES ('$kode','$catat[kd_siswa_kelas]','$catat[kd_kelas_jenjang_bayar]','$catat[total_bayar]')";
				        				//echo $sqltbemp;
				            			mysql_query($sqltbemp);
				            			$j++;
				        		}
		        }
				echo 'Jumlah Siswa '.$num_rows.'-  Jumlah Dibuat '.$j.'-  Jumlah Sudah Ada '.($num_rows-$j);
		}else{
			echo 'Data Jenjang Bayar Tidak ada';
		}
?>