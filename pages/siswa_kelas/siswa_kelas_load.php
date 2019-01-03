                      <?php
                            include_once '../../lib/config.php'; 
                            //kd_siswa_kelas  fk_kd_tahun_akademik  fk_kd_jurusan   fk_kd_kelas   fk_kd_ruang   fk_kd_siswa                          
                      ?>
                      <table id="example1" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                          <th>No</th>
                          <th>NIS</th>
                          <th>Nama</th>
                          <th>Kelas</th>
                          <th>Tahun Akademik</th>   
                          <th>Jurusan</th>                      
                          <th>Ruang</th>
                          <th></th>
                        </tr>
                        </thead>
                        <tbody>
                              <?php
                              $j=1;
                                    //?angkatan='+angkatan+'&kelas='+kelas+'&jurusan='+jurusan
                                    if (($_GET['kelas']) && ($_GET['jurusan'])){
                                          $sqlcatat = "SELECT A.*,B.nama AS kelas, C.nama AS siswa,C.nis AS nis, D.kd_tahun_akademik AS tahun, E.nama AS jurusan, F.nama AS ruang FROM t_siswa_kelas A
                                          LEFT JOIN t_kelas B ON A.fk_kd_kelas=B.kd_kelas
                                          LEFT JOIN t_siswa C ON A.fk_kd_siswa=C.kd_siswa
                                          LEFT JOIN t_tahun_akademik D ON A.fk_kd_tahun_akademik=D.kd_tahun_akademik
                                          LEFT JOIN t_jurusan E ON A.fk_kd_jurusan=E.kd_jurusan
                                          LEFT JOIN t_ruang F ON A.fk_kd_ruang=F.kd_ruang
                                          WHERE A.fk_kd_tahun_akademik='$_GET[angkatan]' AND A.fk_kd_kelas='$_GET[kelas]' AND A.fk_kd_jurusan='$_GET[jurusan]'
                                          ORDER BY A.kd_siswa_kelas DESC";
                                    }
                                    if (($_GET['kelas']) && ($_GET['jurusan']=='')){
                                          $sqlcatat = "SELECT A.*,B.nama AS kelas, C.nama AS siswa,C.nis AS nis, D.kd_tahun_akademik AS tahun, E.nama AS jurusan, F.nama AS ruang FROM t_siswa_kelas A
                                          LEFT JOIN t_kelas B ON A.fk_kd_kelas=B.kd_kelas
                                          LEFT JOIN t_siswa C ON A.fk_kd_siswa=C.kd_siswa
                                          LEFT JOIN t_tahun_akademik D ON A.fk_kd_tahun_akademik=D.kd_tahun_akademik
                                          LEFT JOIN t_jurusan E ON A.fk_kd_jurusan=E.kd_jurusan
                                          LEFT JOIN t_ruang F ON A.fk_kd_ruang=F.kd_ruang
                                          WHERE A.fk_kd_tahun_akademik='$_GET[angkatan]' AND A.fk_kd_kelas='$_GET[kelas]'
                                          ORDER BY A.kd_siswa_kelas DESC";
                                    }
                                    if (($_GET['kelas']=='') && ($_GET['jurusan'])){
                                          $sqlcatat = "SELECT A.*,B.nama AS kelas, C.nama AS siswa,C.nis AS nis, D.kd_tahun_akademik AS tahun, E.nama AS jurusan, F.nama AS ruang FROM t_siswa_kelas A
                                          LEFT JOIN t_kelas B ON A.fk_kd_kelas=B.kd_kelas
                                          LEFT JOIN t_siswa C ON A.fk_kd_siswa=C.kd_siswa
                                          LEFT JOIN t_tahun_akademik D ON A.fk_kd_tahun_akademik=D.kd_tahun_akademik
                                          LEFT JOIN t_jurusan E ON A.fk_kd_jurusan=E.kd_jurusan
                                          LEFT JOIN t_ruang F ON A.fk_kd_ruang=F.kd_ruang
                                          WHERE A.fk_kd_tahun_akademik='$_GET[angkatan]' AND A.fk_kd_jurusan='$_GET[jurusan]'
                                          ORDER BY A.kd_siswa_kelas DESC";
                                    }
                                    if (($_GET['kelas']=='') && ($_GET['jurusan']=='')){
                                          $sqlcatat = "SELECT A.*,B.nama AS kelas, C.nama AS siswa,C.nis AS nis, D.kd_tahun_akademik AS tahun, E.nama AS jurusan, F.nama AS ruang FROM t_siswa_kelas A
                                          LEFT JOIN t_kelas B ON A.fk_kd_kelas=B.kd_kelas
                                          LEFT JOIN t_siswa C ON A.fk_kd_siswa=C.kd_siswa
                                          LEFT JOIN t_tahun_akademik D ON A.fk_kd_tahun_akademik=D.kd_tahun_akademik
                                          LEFT JOIN t_jurusan E ON A.fk_kd_jurusan=E.kd_jurusan
                                          LEFT JOIN t_ruang F ON A.fk_kd_ruang=F.kd_ruang
                                          WHERE A.fk_kd_tahun_akademik='$_GET[angkatan]'
                                          ORDER BY A.kd_siswa_kelas DESC";
                                    }
                                    //echo $sqlcatat;
                                    $rescatat = mysql_query( $sqlcatat );
                                    while($catat = mysql_fetch_array( $rescatat )){
                                ?>
                        <tr class="tr1">
                          <td><?php echo $j++;?></td>
                          <td><?php echo $catat['fk_kd_siswa'];?></td>
                          <td><?php echo $catat['siswa'];?></td>
                          <td><?php echo $catat['kelas'];?></td>
                          <td><?php echo $catat['tahun'];?></td>
                          <td><?php echo $catat['jurusan'];?></td>
                          <td><?php echo $catat['ruang'];?></td>                           
                          </td>
                          <td > <!-- kd_siswa_kelas   fk_kd_tahun_akademik  fk_kd_jurusan   fk_kd_kelas   fk_kd_ruang   fk_kd_siswa -->
                                        <button type="button" class="btn btn btn-default btn-circle" id="<?php echo $catat['kd_siswa_kelas']; ?>"  onclick="ubahsiswa_kelas(
                                         '<?php echo $catat['siswa'];?>',
                                         '<?php echo $catat['nis'];?>',
                                         '<?php echo $catat['kd_siswa_kelas'];?>',
                                         '<?php echo $catat['fk_kd_tahun_akademik'];?>',
                                         '<?php echo $catat['fk_kd_jurusan'];?>',
                                         '<?php echo $catat['fk_kd_kelas'];?>',
                                         '<?php echo $catat['fk_kd_ruang'];?>',
                                         '<?php echo $catat['fk_kd_siswa'];?>'
                                        );"><span>Ubah</span></button>
                                         <button type="button" class="btn btn btn-default btn-circle" id="<?php echo $catat['kd_siswa_kelas']; ?>" onclick="open_del(iddelsatuan='<?php echo $catat['kd_siswa_kelas']; ?>');"><span>Hapus</span></button>

                                    </td>
                        </tr>
                    <?php }?>                                           
                        
                        </tbody>
                      </table>

                      <script>
                        $(function () {
                          $('#example1').DataTable()
                        });

                        function open_del(x){
                                $.ajax({
                                    url: "pages/siswa_kelas/siswa_kelas_del.php?id="+x,
                                    type: "GET",
                                    success: function (ajaxData){
                                        $("#ModalBatal").html(ajaxData);
                                        $("#ModalBatal").modal({backdrop: 'static',keyboard: false});
                                    }
                                });
                        };
                      </script>