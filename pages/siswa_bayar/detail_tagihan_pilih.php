<?php
    //kd_siswa_bayar  fk_kd_siswa_kewajiban_bayar   tgl   jml_bayar
    include_once '../../lib/config.php';
    include_once '../../lib/fungsi.php';
    $kode= $_GET['id'];
    $qpil="SELECT * FROM t_siswa_kewajiban_bayar WHERE kd_siswa_kewajiban_bayar='$kode'";
    $hpil=mysql_fetch_array(mysql_query($qpil));
    $totbayar=$hpil['total_bayar'];

    $sqlcatat = "SELECT sum(jml_bayar) AS jmlbayar FROM t_siswa_bayar WHERE fk_kd_siswa_kewajiban_bayar='$kode'";
    $hcatat=mysql_fetch_array(mysql_query($sqlcatat));
    if ($hcatat['jmlbayar']){
      $jmlbyre=$hcatat['jmlbayar'];
    }else{
      $jmlbyre=0;
    }
    $sisa=$totbayar-$jmlbyre;

    echo 'var hsl=new Array('.$totbayar.','.$jmlbyre.','.$sisa.');';
    //echo $totbayar."-".$jmlbyre."-".$sisa;


?>