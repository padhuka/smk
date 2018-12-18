<?php
        include_once '../../lib/config.php';
        include_once '../../lib/fungsi.php';
		 //$ip = ; // Ambil IP Address dari User
        $kode = trim($_GET['kode']);   
        $kodehid = trim($_GET['kodehid']);   
        $nis = trim($_GET['nis']);
        $nishid = trim($_GET['nishid']);
        $nisn = trim($_GET['nisn']);
        $nisnhid = trim($_GET['nisnhid']);
        $nama = trim($_GET['nama']); 
        $jenis_kelamin = trim($_GET['jkel']);
        $tempat_lahir = trim($_GET['tmtlahir']);
        $tgl_lahir  = trim($_GET['tgllahir']);
        $alamat = trim($_GET['alamat']);
         
        $sqlcek = "SELECT * FROM t_siswa WHERE (kd_siswa='$kode' AND kd_siswa<>'$kodehid') OR (nis='$nis' AND nis<>'$nishid') OR (nisn='$nisn' AND nisn<>'$nisnhid')";
        //echo $sqlcek;
        $qrycek = mysql_query($sqlcek);
        $row = mysql_fetch_array($qrycek);
        if ($row){
            echo 'y';
        }else{
                $sqltbemp = "UPDATE t_siswa SET kd_siswa='$kode',nis='$nis',nisn='$nisn',nama='$nama',tempat_lahir='$tempat_lahir',tgl_lahir='$tgl_lahir',jenis_kelamin='$jenis_kelamin',alamat='$alamat' WHERE kd_siswa='$kodehid'";
                //echo $sqltbemp;
                mysql_query($sqltbemp);
           // echo '
     }
?>