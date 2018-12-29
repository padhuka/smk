<?php
        include_once '../../lib/config.php';
        include_once '../../lib/fungsi.php';
		$kode = trim($_GET['kdkelas']);   

        $sqlcek = "SELECT * FROM t_siswa_kewajiban_bayar WHERE fk_kd_siswa_kelas='$kode'";
        //echo $sqlcek;
        $qrycek = mysql_query($sqlcek);
        //$row = mysql_fetch_array($qrycek);
        /*if ($row){
            echo 'y';
        }else{*/
                //$ttlbayar='';
               while($catat = mysql_fetch_array( $qrycek )){
                   $pilihan=$catat['kd_siswa_kewajiban_bayar'];
                   //$pilihan=$catat['kd_r'];
                   //$wajib = trim($_POST['wajib']);
                   $ttlbayar=trim($_POST[$pilihan]);
                   //echo $ttlbayar;

                   $sqltbemp = "UPDATE t_siswa_kewajiban_bayar SET total_bayar='$ttlbayar' WHERE kd_siswa_kewajiban_bayar='$pilihan'";
                    //echo $sqltbemp;
                    mysql_query($sqltbemp);
                }
               // echo '
     //}
?>