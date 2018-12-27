<?php include_once 'header.php';?>
<?php include_once 'header_menu.php';?>
<?php //include_once 'menu_left.php';?>
<?php
            if(!empty($_GET["p"])){
                $pag = $_GET["p"];}else{
                    $pag="";
                }
                //echo $h;
                switch($pag){
                        default : include_once 'middle.php'; break;
                        ## MASTER ##
                        case 'tahunakademik' : include_once 'pages/tahunakademik/tahunakademik_tab.php'; break;
                        case 'kelas' : include_once 'pages/kelas/kelas_tab.php'; break;
                        case 'siswa' : include_once 'pages/siswa/siswa_tab.php'; break;
                        case 'jurusan' : include_once 'pages/jurusan/jurusan_tab.php'; break;
                        case 'jabatan' : include_once 'pages/jabatan/jabatan_tab.php'; break;
                        case 'golongan' : include_once 'pages/golongan/golongan_tab.php'; break;
                        case 'ruang' : include_once 'pages/ruang/ruang_tab.php'; break;
                        case 'bidang_studi' : include_once 'pages/bidang_studi/bidang_studi_tab.php'; break;
                        case 'jenis_pembayaran' : include_once 'pages/jenis_pembayaran/jenis_pembayaran_tab.php'; break;
                        case 'jenjang_pendidikan' : include_once 'pages/jenjang_pendidikan/jenjang_pendidikan_tab.php'; break;
                        case 'pegawai_status' : include_once 'pages/pegawai_status/pegawai_status_tab.php'; break;
                        case 'pegawai' : include_once 'pages/pegawai/pegawai_tab.php'; break;
                        case 'siswa_kelas' : include_once 'pages/siswa_kelas/siswa_kelas_tab.php'; break;
                        case 'siswa_bayar' : include_once 'pages/siswa_bayar/siswa_bayar_tab.php'; break;
                        case 'jenjang_bayar' : include_once 'pages/kelas_jenjang_bayar/kelas_jenjang_bayar_tab.php'; break;
                        case 'wajib_bayar' : include_once 'pages/siswa_kewajiban_bayar/siswa_kewajiban_bayar_tab.php'; break;
                      }
        ?>
  
<?php include_once 'footer.php';?>