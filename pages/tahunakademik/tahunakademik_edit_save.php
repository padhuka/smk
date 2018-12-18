<?php
        include_once '../../lib/config.php';
        include_once '../../lib/fungsi.php';
		 //$ip = ; // Ambil IP Address dari User
        $kd_tahun_akademik = trim($_GET['id']);
		$tahun1 = trim($_GET['tahun1']);
        $tahun2 = trim($_GET['tahun2']);
        
		    $sqltbemp = "UPDATE t_tahun_akademik SET tahun_pertama='$tahun1', tahun_kedua='$tahun2' WHERE kd_tahun_akademik='$kd_tahun_akademik'";
            mysql_query($sqltbemp);
?>