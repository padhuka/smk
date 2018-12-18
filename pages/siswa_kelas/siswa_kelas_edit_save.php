<?php
        include_once '../../lib/config.php';
        include_once '../../lib/fungsi.php';
		$kode = trim($_GET['kode']);   
        $kodehid = trim($_GET['kodehid']);   
        $kdsiswa = trim($_GET['kdsiswa']);
        $kelas = trim($_GET['kelas']);
        $jurusan = trim($_GET['jurusan']); 
        $ruang = trim($_GET['ruang']);
        $tahun = trim($_GET['tahun']);
        $tahunhid = trim($_GET['tahunhid']);
         //$sqlcek = "SELECT * FROM t_siswa_kelas WHERE kd_siswa_kelas='$kode' OR (fk_kd_siswa='$kdsiswa' AND fk_kd_tahun_akademik='$tahun')";
        $sqlcek = "SELECT * FROM t_siswa_kelas WHERE (kd_siswa_kelas='$kode' AND kd_siswa_kelas<>'$kodehid') OR (fk_kd_siswa='$kdsiswa' AND fk_kd_tahun_akademik<>'$tahunhid')";
        //echo $sqlcek;
        $qrycek = mysql_query($sqlcek);
        $row = mysql_fetch_array($qrycek);
        if ($row){
            echo 'y';
        }else{
                $sqltbemp = "UPDATE t_siswa_kelas SET kd_siswa_kelas='$kode' ,fk_kd_tahun_akademik='$tahun' ,fk_kd_jurusan='$jurusan' ,fk_kd_kelas='$kelas' ,fk_kd_ruang='$ruang'  WHERE kd_siswa_kelas='$kodehid'";
                echo $sqltbemp;
                mysql_query($sqltbemp);
           // echo '
     }
?>