<?php
        include_once '../../lib/config.php';
        include_once '../../lib/fungsi.php';
		$kode = trim($_POST['kode']);   
        $kodehid = trim($_POST['kodehid']);   
        $nama = trim($_POST['nama']);
        $kelas = trim($_POST['kelas']);
        $jurusan = trim($_POST['jurusan']); 
        $tahun = trim($_POST['tahun']);        
        $tahunhid = trim($_POST['tahunhid']);        
        $jumlah = trim($_POST['jumlah']);
        $wajib = trim($_POST['wajib']);

        $sqlcek = "SELECT * FROM t_kelas_jenjang_bayar WHERE (kd_kelas_jenjang_bayar='$kode' AND kd_kelas_jenjang_bayar<>'$kodehid') OR (fk_kd_jenis_pembayaran='$nama' AND fk_kd_tahun_akademik<>'$tahunhid')";
        //echo $sqlcek;
        $qrycek = mysql_query($sqlcek);
        $row = mysql_fetch_array($qrycek);
        if ($row){
            echo 'y';
        }else{
                $sqltbemp = "UPDATE t_kelas_jenjang_bayar SET kd_kelas_jenjang_bayar='$kode',fk_kd_jenis_pembayaran='$nama',fk_kd_kelas='$kelas' ,fk_kd_jurusan='$jurusan',fk_kd_tahun_akademik='$tahun',total_bayar='$jumlah', wajib='$wajib'  WHERE kd_kelas_jenjang_bayar='$kodehid'";
                echo $sqltbemp;
                mysql_query($sqltbemp);
           // echo '
     }
?>