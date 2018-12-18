<?php
        include_once '../../lib/config.php';
        include_once '../../lib/fungsi.php';
		 //$ip = ; // Ambil IP Address dari User
        $kode = trim($_GET['kode']);
        $kodehid = trim($_GET['kodehid']);

        $nama = trim($_GET['nama']);
        $namahid= trim($_GET['namahid']);

        $sqlcek = "SELECT * FROM t_ruang WHERE (kd_ruang='$kode' AND kd_ruang<>'$kodehid') OR (nama='$nama' AND nama<>'$namahid')";
        //echo $sqlcek;
        $qrycek = mysql_query($sqlcek);
        $row = mysql_fetch_array($qrycek);
        if ($row){
            echo 'y';
        }else{
                $sqltbemp = "UPDATE t_ruang SET kd_ruang='$kode',nama='$nama' WHERE kd_ruang='$kodehid'";
                //echo $sqltbemp;
                mysql_query($sqltbemp);
           // echo '
     }
?>