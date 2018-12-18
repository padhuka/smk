<?php
        include_once '../../lib/config.php';
        include_once '../../lib/fungsi.php';
		 //$ip = ; // Ambil IP Address dari User
        $kd_siswa = trim($_POST['kode']);   
        $nis = trim($_POST['nis']);
        $nisn = trim($_POST['nisn']);
        $nama = trim($_POST['nama']); 
        $jenis_kelamin = trim($_POST['jkel']);
        $tempat_lahir = trim($_POST['tmtlahir']);
        $tgl_lahir  = trim($_POST['tgllahir']);
        $alamat = trim($_POST['alamat']);
        //message_back($id_satuan);
		 #cek idsurat
        $sqlcek = "SELECT * FROM t_siswa WHERE kd_siswa='$kode' OR nis='$nis' OR nisn='$nisn'";
        $qrycek = mysql_query($sqlcek);
        $row = mysql_fetch_array($qrycek);

        if ($row){
            echo 'y';
        }else{
		    $sqltbemp = "INSERT INTO t_siswa (kd_siswa,nis,nisn,nama,tempat_lahir,tgl_lahir,jenis_kelamin) VALUES ('$kd_siswa','$nis','$nisn','$nama','$tempat_lahir','$tgl_lahir','$jenis_kelamin')";
            mysql_query($sqltbemp);
            //echo 'n';
        }
?>