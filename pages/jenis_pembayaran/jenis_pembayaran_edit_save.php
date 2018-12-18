<?php
        include_once '../../lib/config.php';
        include_once '../../lib/fungsi.php';
		 //$ip = ; // Ambil IP Address dari User
        $kode = trim($_GET['kode']);
        $kodehid = trim($_GET['kodehid']);

        $nama = trim($_GET['nama']);
        $namahid= trim($_GET['namahid']);

        $sqlcek = "SELECT * FROM t_jenis_pembayaran WHERE (kd_jenis_pembayaran='$kode' AND kd_jenis_pembayaran<>'$kodehid') OR (nama='$nama' AND nama<>'$namahid')";
        //echo $sqlcek;
        $qrycek = mysql_query($sqlcek);
        $row = mysql_fetch_array($qrycek);
        if ($row){
            echo 'y';
        }else{
                $sqltbemp = "UPDATE t_jenis_pembayaran SET kd_jenis_pembayaran='$kode',nama='$nama' WHERE kd_jenis_pembayaran='$kodehid'";
                //echo $sqltbemp;
                mysql_query($sqltbemp);
           // echo '
     }
?>