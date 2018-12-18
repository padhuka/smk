<?php
        include_once '../../lib/config.php';
        include_once '../../lib/fungsi.php';
		 //$ip = ; // Ambil IP Address dari User
        $kode = trim($_GET['kode']);
        $kodehid = trim($_GET['kodehid']);

        $nama = trim($_GET['nama']);
        $namahid= trim($_GET['namahid']);

        $sqlcek = "SELECT * FROM t_golongan WHERE (kd_golongan='$kode' AND kd_golongan<>'$kodehid') OR (nama='$nama' AND nama<>'$namahid')";
        //echo $sqlcek;
        $qrycek = mysql_query($sqlcek);
        $row = mysql_fetch_array($qrycek);
        if ($row){
            echo 'y';
        }else{
                $sqltbemp = "UPDATE t_golongan SET kd_golongan='$kode',nama='$nama' WHERE kd_golongan='$kodehid'";
                //echo $sqltbemp;
                mysql_query($sqltbemp);
           // echo '
     }
?>