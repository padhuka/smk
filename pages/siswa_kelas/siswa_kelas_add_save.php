<?php
        include_once '../../lib/config.php';
        include_once '../../lib/fungsi.php';
         //$ip = ; // Ambil IP Address dari User
        //kd_siswa_kelas    fk_kd_tahun_akademik    fk_kd_jurusan   fk_kd_kelas     fk_kd_ruang     fk_kd_siswa 
        $kode = trim($_POST['kode']);   
        $kdsiswa = trim($_POST['kdsiswa']);
        $kelas = trim($_POST['kelas']);
        $jurusan = trim($_POST['jurusan']); 
        $ruang = trim($_POST['ruang']);
        $tahun = trim($_POST['tahun']);
        //message_back($id_satuan);
         #cek idsurat
        $sqlcek = "SELECT * FROM t_siswa_kelas WHERE kd_siswa_kelas='$kode' OR (fk_kd_siswa='$kdsiswa' AND fk_kd_tahun_akademik='$tahun')";
        $qrycek = mysql_query($sqlcek);
        $row = mysql_fetch_array($qrycek);

        if ($row){
            echo 'y';
        }else{
            $sqltbemp = "INSERT INTO t_siswa_kelas (kd_siswa_kelas ,fk_kd_tahun_akademik,fk_kd_jurusan,fk_kd_kelas,fk_kd_ruang,fk_kd_siswa) VALUES ('$kode','$tahun','$jurusan','$kelas','$ruang','$kdsiswa')";
            mysql_query($sqltbemp);
            //echo $sqlcek;
        }
?>