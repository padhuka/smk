<?php
        include_once '../../lib/config.php';
        include_once '../../lib/fungsi.php';
        $kdini = date('YmdHis');
         //$ip = ; // Ambil IP Address dari User
        ////
        $kode = trim($_GET['kode']);   
        $bayar = trim($_POST['bayar']);
        //message_back($id_satuan);
         #cek idsurat
            //kd_siswa_bayar  fk_kd_siswa_kewajiban_bayar   tgl   jml_bayar
            $sqltbemp = "INSERT INTO t_siswa_bayar (kd_siswa_bayar,fk_kd_siswa_kewajiban_bayar,jml_bayar) VALUES ('$kdini','$kode','$bayar')";
            mysql_query($sqltbemp);
            //echo $sqltbemp;
?>