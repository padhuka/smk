<?php
        include_once '../../lib/config.php';
        include_once '../../lib/fungsi.php';
		 //$ip = ; // Ambil IP Address dari User
		$tahun1 = trim($_POST['tahun1']);
        $tahun2 = trim($_POST['tahun2']);
        //message_back($id_satuan);
		 #cek idsurat
        $kode=$tahun1.'/'.$tahun2;
        $sqlcek = "SELECT * FROM t_tahun_akademik WHERE kd_tahun_akademik='$kode'";
        $qrycek = mysql_query($sqlcek);
        $row = mysql_fetch_array($qrycek);

        if ($row){
            echo 'y';
        }else{
		    $sqltbemp = "INSERT INTO t_tahun_akademik (kd_tahun_akademik,tahun_pertama, tahun_kedua) VALUES ('$kode','$tahun1','$tahun2')";
            mysql_query($sqltbemp);
            //echo 'n';
        }
?>