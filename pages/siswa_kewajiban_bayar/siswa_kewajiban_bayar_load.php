                      <?php
                            include_once '../../lib/config.php'; 
                            //kd_siswa_kewajiban_bayar  fk_kd_tahun_akademik  fk_kd_jurusan   fk_kd_kelas   fk_kd_ruang   fk_kd_siswa                          
                      ?>
                      <table id="example1" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                          <th>No</th>
                          <th>Siswa</th>
                          <th>Kelas</th>
                          <th>Tahun Akademik</th>   
                          <th>Jurusan</th>  
                          <th></th>
                        </tr>
                        </thead>
                        <tbody>
                              <?php 
                  //kd_siswa_kewajiban_bayar  fk_kd_siswa_kelas   fk_kd_kelas_jenjang_bayar   status_bayar 
                                    $j=1;
                                    if (($_GET['kelas']) && ($_GET['jurusan'])){
                                        $sqlcatat = "SELECT A.*,B.fk_kd_tahun_akademik, C.nama AS siswa, D.nama AS jurusan,E.nama AS kelas, G.nama AS tagih FROM t_siswa_kewajiban_bayar A
                                        LEFT JOIN t_siswa_kelas B ON A.fk_kd_siswa_kelas=B.kd_siswa_kelas
                                        LEFT JOIN t_siswa C ON B.fk_kd_siswa=C.kd_siswa
                                        LEFT JOIN t_jurusan D ON B.fk_kd_jurusan=D.kd_jurusan
                                        LEFT JOIN t_kelas E ON B.fk_kd_kelas=E.kd_kelas
                                        LEFT JOIN t_kelas_jenjang_bayar F ON A.fk_kd_kelas_jenjang_bayar=F.kd_kelas_jenjang_bayar
                                        LEFT JOIN t_jenis_pembayaran G ON F.fk_kd_jenis_pembayaran=G.kd_jenis_pembayaran
                                        WHERE B.fk_kd_tahun_akademik='$_GET[angkatan]' AND B.fk_kd_kelas='$_GET[kelas]' AND B.fk_kd_jurusan='$_GET[jurusan]'
                                        GROUP BY A.fk_kd_siswa_kelas";
                                    }
                                    if (($_GET['kelas']) && ($_GET['jurusan']=='')){
                                        $sqlcatat = "SELECT A.*,B.fk_kd_tahun_akademik, C.nama AS siswa, D.nama AS jurusan,E.nama AS kelas, G.nama AS tagih FROM t_siswa_kewajiban_bayar A
                                        LEFT JOIN t_siswa_kelas B ON A.fk_kd_siswa_kelas=B.kd_siswa_kelas
                                        LEFT JOIN t_siswa C ON B.fk_kd_siswa=C.kd_siswa
                                        LEFT JOIN t_jurusan D ON B.fk_kd_jurusan=D.kd_jurusan
                                        LEFT JOIN t_kelas E ON B.fk_kd_kelas=E.kd_kelas
                                        LEFT JOIN t_kelas_jenjang_bayar F ON A.fk_kd_kelas_jenjang_bayar=F.kd_kelas_jenjang_bayar
                                        LEFT JOIN t_jenis_pembayaran G ON F.fk_kd_jenis_pembayaran=G.kd_jenis_pembayaran
                                        WHERE B.fk_kd_tahun_akademik='$_GET[angkatan]' AND B.fk_kd_kelas='$_GET[kelas]'
                                        GROUP BY A.fk_kd_siswa_kelas";
                                    }
                                    if (($_GET['kelas']=='') && ($_GET['jurusan'])){
                                        $sqlcatat = "SELECT A.*,B.fk_kd_tahun_akademik, C.nama AS siswa, D.nama AS jurusan,E.nama AS kelas, G.nama AS tagih FROM t_siswa_kewajiban_bayar A
                                        LEFT JOIN t_siswa_kelas B ON A.fk_kd_siswa_kelas=B.kd_siswa_kelas
                                        LEFT JOIN t_siswa C ON B.fk_kd_siswa=C.kd_siswa
                                        LEFT JOIN t_jurusan D ON B.fk_kd_jurusan=D.kd_jurusan
                                        LEFT JOIN t_kelas E ON B.fk_kd_kelas=E.kd_kelas
                                        LEFT JOIN t_kelas_jenjang_bayar F ON A.fk_kd_kelas_jenjang_bayar=F.kd_kelas_jenjang_bayar
                                        LEFT JOIN t_jenis_pembayaran G ON F.fk_kd_jenis_pembayaran=G.kd_jenis_pembayaran
                                       WHERE B.fk_kd_tahun_akademik='$_GET[angkatan]' AND B.fk_kd_jurusan='$_GET[jurusan]'
                                        GROUP BY A.fk_kd_siswa_kelas";
                                    }
                                    if (($_GET['kelas']=='') && ($_GET['jurusan']=='')){
                                        $sqlcatat = "SELECT A.*,B.fk_kd_tahun_akademik, C.nama AS siswa, D.nama AS jurusan,E.nama AS kelas, G.nama AS tagih FROM t_siswa_kewajiban_bayar A
                                        LEFT JOIN t_siswa_kelas B ON A.fk_kd_siswa_kelas=B.kd_siswa_kelas
                                        LEFT JOIN t_siswa C ON B.fk_kd_siswa=C.kd_siswa
                                        LEFT JOIN t_jurusan D ON B.fk_kd_jurusan=D.kd_jurusan
                                        LEFT JOIN t_kelas E ON B.fk_kd_kelas=E.kd_kelas
                                        LEFT JOIN t_kelas_jenjang_bayar F ON A.fk_kd_kelas_jenjang_bayar=F.kd_kelas_jenjang_bayar
                                        LEFT JOIN t_jenis_pembayaran G ON F.fk_kd_jenis_pembayaran=G.kd_jenis_pembayaran
                                       WHERE B.fk_kd_tahun_akademik='$_GET[angkatan]'
                                       GROUP BY A.fk_kd_siswa_kelas";
                                    }
                                    
                                    $rescatat = mysql_query( $sqlcatat );
                                    while($catat = mysql_fetch_array( $rescatat )){
                                ?>
                        <tr class="tr1">
                          <td><?php echo $j++;?></td>
                          <td><?php echo $catat['siswa'];?></td>
                          <td><?php echo $catat['kelas'];?></td>
                          <td><?php echo $catat['fk_kd_tahun_akademik'];?></td>
                          <td><?php echo $catat['jurusan'];?></td>  
                          </td>
                          <td > <!-- kd_siswa_kewajiban_bayar   fk_kd_tahun_akademik  fk_kd_jurusan   fk_kd_kelas   fk_kd_ruang   fk_kd_siswa -->
                                        <button type="button" class="btn btn btn-default btn-circle" id="<?php echo $catat['kd_siswa_kewajiban_bayar']; ?>"  onclick="ubahsiswa_kewajiban_bayar(
                                          '<?php echo $catat['siswa'];?>',
                                         '<?php echo $catat['siswa'];?>',
                                         '<?php echo $catat['kelas'];?>',
                                         '<?php echo $catat['jurusan'];?>',
                                         '<?php echo $catat['fk_kd_siswa_kelas'];?>'
                                        );"><span>Ubah</span></button>
                                         <button type="button" class="btn btn btn-default btn-circle" id="<?php echo $catat['kd_siswa_kewajiban_bayar']; ?>" onclick="open_del(iddelsatuan='<?php echo $catat['kd_siswa_kewajiban_bayar']; ?>');"><span>Hapus</span></button>

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
                                    url: "pages/siswa_kewajiban_bayar/siswa_kewajiban_bayar_del.php?id="+x,
                                    type: "GET",
                                    success: function (ajaxData){
                                        $("#ModalBatal").html(ajaxData);
                                        $("#ModalBatal").modal({backdrop: 'static',keyboard: false});
                                    }
                                });
                        };
                      </script>