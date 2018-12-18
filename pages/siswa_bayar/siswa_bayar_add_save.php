<?php
        include_once '../../lib/config.php';
        include_once '../../lib/fungsi.php';
         //$ip = ; // Ambil IP Address dari User
        //kd_siswa_bayar  nip nama  alamat  tempat_lahir  tgl_lahir jenis_kelamin fk_kd_jenjang_pendidikan  fk_kd_bidang_studi  fk_kd_golongan  fk_kd_jabatan fk_kd_siswa_bayar_status-->
        $kode = trim($_POST['kode']);   
        $nip = trim($_POST['nip']);
        $nama = trim($_POST['nama']);
        $alamat = trim($_POST['alamat']); 
        $tempat_lahir = trim($_POST['tmtlahir']);
        $tgl_lahir = trim($_POST['tgllahir']);
        $jenis_kelamin  = trim($_POST['jkel']);
        $fk_kd_jenjang_pendidikan = trim($_POST['pendidikan']);
        $fk_kd_bidang_studi = trim($_POST['bidang']);
        $fk_kd_golongan = trim($_POST['golongan']);
        $fk_kd_jabatan = trim($_POST['jabatan']);
        $fk_kd_siswa_bayar_status = trim($_POST['status']);
        //message_back($id_satuan);
         #cek idsurat
        $sqlcek = "SELECT * FROM t_siswa_bayar WHERE kd_siswa_bayar='$kode' OR nip='$nip'";
        $qrycek = mysql_query($sqlcek);
        $row = mysql_fetch_array($qrycek);

        if ($row){
            echo 'y';
        }else{
            $sqltbemp = "INSERT INTO t_siswa_bayar (kd_siswa_bayar,nip, nama,alamat,tempat_lahir,tgl_lahir,jenis_kelamin,fk_kd_jenjang_pendidikan,fk_kd_bidang_studi,fk_kd_golongan,fk_kd_jabatan,fk_kd_siswa_bayar_status) VALUES ('$kode','$nip','$nama','$alamat','$tempat_lahir','$tgl_lahir','$jenis_kelamin','$fk_kd_jenjang_pendidikan','$fk_kd_bidang_studi','$fk_kd_golongan','$fk_kd_jabatan','$fk_kd_siswa_bayar_status')";
            mysql_query($sqltbemp);
            //echo $sqltbemp;
        }
?>