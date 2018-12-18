<?php
        include_once '../../lib/config.php';
        include_once '../../lib/fungsi.php';
		 //$ip = ; // Ambil IP Address dari User
        $kode = trim($_GET['kode']);
        $kodehid = trim($_GET['kodehid']);

        $nama = trim($_GET['nama']);
        $namahid= trim($_GET['namahid']);

        $sqlcek = "SELECT * FROM t_jenjang_pendidikan WHERE (kd_jenjang_pendidikan='$kode' AND kd_jenjang_pendidikan<>'$kodehid') OR (nama='$nama' AND nama<>'$namahid')";
        //echo $sqlcek;
        $qrycek = mysql_query($sqlcek);
        $row = mysql_fetch_array($qrycek);
        if ($row){
            echo 'y';
        }else{
                $sqltbemp = "UPDATE t_jenjang_pendidikan SET kd_jenjang_pendidikan='$kode',nama='$nama' WHERE kd_jenjang_pendidikan='$kodehid'";
                //echo $sqltbemp;
                mysql_query($sqltbemp);
           // echo '
     }
?>