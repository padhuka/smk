<?php
        include_once '../../lib/config.php';
        include_once '../../lib/fungsi.php';
		 //$ip = ; // Ambil IP Address dari User
        $kode = trim($_GET['kode']);
        $kodehid = trim($_GET['kodehid']);

        $nama = trim($_GET['nama']);
        $namahid= trim($_GET['namahid']);

        $sqlcek = "SELECT * FROM t_jabatan WHERE (kd_jabatan='$kode' AND kd_jabatan<>'$kodehid') OR (nama='$nama' AND nama<>'$namahid')";
        //echo $sqlcek;
        $qrycek = mysql_query($sqlcek);
        $row = mysql_fetch_array($qrycek);
        if ($row){
            echo 'y';
        }else{
                $sqltbemp = "UPDATE t_jabatan SET kd_jabatan='$kode',nama='$nama' WHERE kd_jabatan='$kodehid'";
                //echo $sqltbemp;
                mysql_query($sqltbemp);
           // echo '
     }
?>