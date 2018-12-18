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

        $sqlcek = "SELECT * FROM t_siswa_kewajiban_bayar WHERE (kd_siswa_kewajiban_bayar='$kode' AND kd_siswa_kewajiban_bayar<>'$kodehid') OR (nama='$nama' AND fk_kd_tahun_akademik<>'$tahunhid')";
        //echo $sqlcek;
        $qrycek = mysql_query($sqlcek);
        $row = mysql_fetch_array($qrycek);
        if ($row){
            echo 'y';
        }else{
                $sqltbemp = "UPDATE t_siswa_kewajiban_bayar SET kd_siswa_kewajiban_bayar='$kode',nama='$nama',fk_kd_kelas='$kelas' ,fk_kd_jurusan='$jurusan',fk_kd_tahun_akademik='$tahun',total_bayar='$jumlah', wajib='$wajib'  WHERE kd_siswa_kewajiban_bayar='$kodehid'";
                echo $sqltbemp;
                mysql_query($sqltbemp);
           // echo '
     }
?>