<link rel="stylesheet" href="lib/css/cssmenu/styles.css">
<script src="lib/css/cssmenu/script.js"></script>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo 
    <a href="index2.html" class="logo">-->
      <!-- mini logo for sidebar mini 50x50 pixels 
      <span class="logo-mini"><b>A</b>LT</span>-->
      <!-- logo for regular state and mobile devices 
      <span class="logo-lg"><b>SIMRS</b>&nbsp; MEDIKA</span>
    </a>-->
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top"  style="margin-left: -0px;">
      <div class="navbar-custom-menu" style="float: left;">
        <img src="dist/img/user-160x160.jpg" class="user-image" alt="User Image" height="60" width="60" style="padding: 5px 5px 5px 5px;">
              <span style="font-size: 20px; color: #FFFFFF;">Sistem Informasi Manajemen - SMKS Muhammadiyah 9 Gambiran</span>
        
      </div>  
    </nav>
   <div id='cssmenu'>
<ul>
   <li class='has-sub'><a href='#'>Master</a>
      <ul>
         <li><a href='?p=tahunakademik'>Tahun Akademik</a></li>
         <li><a href='?p=kelas'>Kelas</a></li>
         <li><a href='?p=jurusan'>Jurusan</a></li>
         <li><a href='?p=siswa'>Siswa</a></li>
         <li><a href='?p=jabatan'>Jabatan</a></li>
         <li><a href='?p=golongan'>Golongan</a></li>
         <li><a href='?p=ruang'>Ruang</a></li>
         <li><a href='?p=bidang_studi'>Bidang Studi</a></li>
         <li><a href='?p=jenis_pembayaran'>Jenis Pembayaran</a></li>
         <li><a href='?p=jenjang_pendidikan'>Jenjang Pendidikan</a></li>
         <li><a href='?p=pegawai_status'>Pegawai Status</a></li>
         <li><a href='?p=pegawai'>Pegawai</a></li>
         <li><a href='?p=siswa_kelas'>Siswa Kelas</a></li>
         <li><a href='?p=jenjang_bayar'>Jenjang Pembayaran</a></li>      
         <li><a href='?p=wajib_bayar'>Tagihan Siswa</a></li>   
      </ul>
   </li>
   
   <li class='has-sub'><a href='#'>Laporan</a>
      <ul>
         <li><a href='#'>Dokter, Bidan, Fisio</a></li>
         <li><a href='#'>Farmasi</a></li>
         <li><a href='#'>Keuangan</a></li>
      </ul>
   </li>
   <li class='has-sub'><a href='logout.php'>Logout</a>
</ul>
</div>
<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunctionx() {
    document.getElementById("myDropdownx").classList.toggle("showx");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(e) {
  if (!e.target.matches('.dropbtn')) {

    var myDropdown = document.getElementById("myDropdownx");
      if (myDropdown.classList.contains('showx')) {
        myDropdown.classList.remove('showx');
      }
  }
}
</script>
  </header>