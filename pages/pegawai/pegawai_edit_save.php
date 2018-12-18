<?php
        include_once '../../lib/config.php';
        include_once '../../lib/fungsi.php';
		$kode = trim($_GET['kode']);   
        $kodehid = trim($_GET['kodehid']);   
        $nip = trim($_GET['nip']);
        $niphid = trim($_GET['niphid']);
        $nama = trim($_GET['nama']);
        $alamat = trim($_GET['alamat']); 
        $tempat_lahir = trim($_GET['tmtlahir']);
        $tgl_lahir = trim($_GET['tgllahir']);
        $jenis_kelamin  = trim($_GET['jkel']);
        $fk_kd_jenjang_pendidikan = trim($_GET['pendidikan']);
        $fk_kd_bidang_studi = trim($_GET['bidang']);
        $fk_kd_golongan = trim($_GET['golongan']);
        $fk_kd_jabatan = trim($_GET['jabatan']);
        $fk_kd_pegawai_status = trim($_GET['status']);
         
        $sqlcek = "SELECT * FROM t_pegawai WHERE (kd_pegawai='$kode' AND kd_pegawai<>'$kodehid') OR (nip='$nip' AND nip<>'$niphid')";
        //echo $sqlcek;
        $qrycek = mysql_query($sqlcek);
        $row = mysql_fetch_array($qrycek);
        if ($row){
            echo 'y';
        }else{
                $sqltbemp = "UPDATE t_pegawai SET kd_pegawai='$kode',nip='$nip', nama='$nama',alamat='$alamat',tempat_lahir='$tempat_lahir',tgl_lahir='$tgl_lahir',jenis_kelamin='$jenis_kelamin',fk_kd_jenjang_pendidikan='$fk_kd_jenjang_pendidikan',fk_kd_bidang_studi='$fk_kd_bidang_studi',fk_kd_golongan='$fk_kd_golongan',fk_kd_jabatan='$fk_kd_jabatan',fk_kd_pegawai_status='$fk_kd_pegawai_status' WHERE kd_pegawai='$kodehid'";
                //echo $sqltbemp;
                mysql_query($sqltbemp);
           // echo '
     }
?>