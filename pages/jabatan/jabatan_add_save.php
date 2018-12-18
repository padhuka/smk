<?php
        include_once '../../lib/config.php';
        include_once '../../lib/fungsi.php';
		 //$ip = ; // Ambil IP Address dari User
		$nama = trim($_POST['nama']);
        $kode = trim($_POST['kode']);
        //message_back($id_satuan);
		 #cek idsurat
        $sqlcek = "SELECT * FROM t_jabatan WHERE kd_jabatan='$kode' OR nama='$nama'";
        $qrycek = mysql_query($sqlcek);
        $row = mysql_fetch_array($qrycek);

        if ($row){
            echo 'y';
        }else{
		    $sqltbemp = "INSERT INTO t_jabatan (kd_jabatan,nama) VALUES ('$kode','$nama')";
            mysql_query($sqltbemp);
            //echo 'n';
        }
?>