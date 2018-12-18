<?php
        include_once '../../lib/config.php';
        include_once '../../lib/fungsi.php';
         //$ip = ; // Ambil IP Address dari User
        ////
        $kode = trim($_POST['kode']);   
        $nama = trim($_POST['nama']);
        $kelas = trim($_POST['kelas']);
        $jurusan = trim($_POST['jurusan']); 
        $tahun = trim($_POST['tahun']);        
        $jumlah = trim($_POST['jumlah']);
        $wajib = trim($_POST['wajib']);
        //message_back($id_satuan);
         #cek idsurat
        $sqlcek = "SELECT * FROM t_kelas_jenjang_bayar WHERE kd_kelas_jenjang_bayar='$kode' OR (nama='$nama' AND fk_kd_tahun_akademik='$tahun')";
        $qrycek = mysql_query($sqlcek);
        $row = mysql_fetch_array($qrycek);

        if ($row){
            echo 'y';
        }else{
            $sqltbemp = "INSERT INTO t_kelas_jenjang_bayar (kd_kelas_jenjang_bayar,nama,fk_kd_kelas,fk_kd_jurusan,fk_kd_tahun_akademik,total_bayar,wajib) VALUES ('$kode','$nama','$kelas','$jurusan','$tahun','$jumlah','$wajib')";
            mysql_query($sqltbemp);
            echo $sqltbemp;
        }
?>