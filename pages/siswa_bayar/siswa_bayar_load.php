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
                                    $sqlcatat = "SELECT DISTINCT(A.fk_kd_siswa_kelas),H.fk_kd_siswa_kelas, C.nama AS jurusan, F.nama AS kelas, G.nama AS siswa,B.fk_kd_tahun_akademik FROM t_siswa_kewajiban_bayar A
                                    LEFT JOIN t_kelas_jenjang_bayar B ON A.fk_kd_kelas_jenjang_bayar=B.kd_kelas_jenjang_bayar
                                    LEFT JOIN t_jurusan C ON B.fk_kd_jurusan=C.kd_jurusan
                                    LEFT JOIN t_tahun_akademik D ON B.fk_kd_tahun_akademik=D.kd_tahun_akademik
                                    LEFT JOIN t_siswa_kelas E ON A.fk_kd_siswa_kelas=E.kd_siswa_kelas
                                    LEFT JOIN t_kelas F ON E.fk_kd_kelas=F.kd_kelas
                                    LEFT JOIN t_siswa G ON E.fk_kd_siswa=G.kd_siswa
                                    LEFT JOIN t_siswa_kewajiban_bayar H ON A.fk_kd_siswa_kelas=H.fk_kd_siswa_kelas
                                    WHERE B.fk_kd_tahun_akademik='$_GET[angkatan]' AND B.fk_kd_kelas='$_GET[kelas]' AND B.fk_kd_jurusan='$_GET[jurusan]'
                                    ORDER BY A.kd_siswa_kewajiban_bayar DESC";
                              }
                              if (($_GET['kelas']) && ($_GET['jurusan']=='')){
                                    $sqlcatat = "SELECT DISTINCT(A.fk_kd_siswa_kelas),H.fk_kd_siswa_kelas, C.nama AS jurusan, F.nama AS kelas, G.nama AS siswa,B.fk_kd_tahun_akademik FROM t_siswa_kewajiban_bayar A
                                    LEFT JOIN t_kelas_jenjang_bayar B ON A.fk_kd_kelas_jenjang_bayar=B.kd_kelas_jenjang_bayar
                                    LEFT JOIN t_jurusan C ON B.fk_kd_jurusan=C.kd_jurusan
                                    LEFT JOIN t_tahun_akademik D ON B.fk_kd_tahun_akademik=D.kd_tahun_akademik
                                    LEFT JOIN t_siswa_kelas E ON A.fk_kd_siswa_kelas=E.kd_siswa_kelas
                                    LEFT JOIN t_kelas F ON E.fk_kd_kelas=F.kd_kelas
                                    LEFT JOIN t_siswa G ON E.fk_kd_siswa=G.kd_siswa
                                    LEFT JOIN t_siswa_kewajiban_bayar H ON A.fk_kd_siswa_kelas=H.fk_kd_siswa_kelas
                                    WHERE B.fk_kd_tahun_akademik='$_GET[angkatan]' AND B.fk_kd_kelas='$_GET[kelas]'
                                    ORDER BY A.kd_siswa_kewajiban_bayar DESC";
                              }
                              if (($_GET['kelas']=='') && ($_GET['jurusan'])){
                                    $sqlcatat = "SELECT DISTINCT(A.fk_kd_siswa_kelas),H.fk_kd_siswa_kelas, C.nama AS jurusan, F.nama AS kelas, G.nama AS siswa,B.fk_kd_tahun_akademik FROM t_siswa_kewajiban_bayar A
                                    LEFT JOIN t_kelas_jenjang_bayar B ON A.fk_kd_kelas_jenjang_bayar=B.kd_kelas_jenjang_bayar
                                    LEFT JOIN t_jurusan C ON B.fk_kd_jurusan=C.kd_jurusan
                                    LEFT JOIN t_tahun_akademik D ON B.fk_kd_tahun_akademik=D.kd_tahun_akademik
                                    LEFT JOIN t_siswa_kelas E ON A.fk_kd_siswa_kelas=E.kd_siswa_kelas
                                    LEFT JOIN t_kelas F ON E.fk_kd_kelas=F.kd_kelas
                                    LEFT JOIN t_siswa G ON E.fk_kd_siswa=G.kd_siswa
                                    LEFT JOIN t_siswa_kewajiban_bayar H ON A.fk_kd_siswa_kelas=H.fk_kd_siswa_kelas
                                    WHERE B.fk_kd_tahun_akademik='$_GET[angkatan]' AND B.fk_kd_jurusan='$_GET[jurusan]'
                                    ORDER BY A.kd_siswa_kewajiban_bayar DESC";
                              }
                              if (($_GET['kelas']=='') && ($_GET['jurusan'])){
                                    $sqlcatat = "SELECT DISTINCT(A.fk_kd_siswa_kelas),H.fk_kd_siswa_kelas, C.nama AS jurusan, F.nama AS kelas, G.nama AS siswa,B.fk_kd_tahun_akademik FROM t_siswa_kewajiban_bayar A
                                    LEFT JOIN t_kelas_jenjang_bayar B ON A.fk_kd_kelas_jenjang_bayar=B.kd_kelas_jenjang_bayar
                                    LEFT JOIN t_jurusan C ON B.fk_kd_jurusan=C.kd_jurusan
                                    LEFT JOIN t_tahun_akademik D ON B.fk_kd_tahun_akademik=D.kd_tahun_akademik
                                    LEFT JOIN t_siswa_kelas E ON A.fk_kd_siswa_kelas=E.kd_siswa_kelas
                                    LEFT JOIN t_kelas F ON E.fk_kd_kelas=F.kd_kelas
                                    LEFT JOIN t_siswa G ON E.fk_kd_siswa=G.kd_siswa
                                    LEFT JOIN t_siswa_kewajiban_bayar H ON A.fk_kd_siswa_kelas=H.fk_kd_siswa_kelas
                                    WHERE B.fk_kd_tahun_akademik='$_GET[angkatan]'
                                    ORDER BY A.kd_siswa_kewajiban_bayar DESC";
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
                                        );"><span>Proses</span></button>
                                        

                                    </td>
                        </tr>
                    <?php }?>                                           
                        
                        </tbody>
                      </table>

                      <script>
                        $(function () {
                          $('#example1').DataTable({
                            "lengthMenu": [[2,10, 25, 50, -1], [2,10, 25, 50, "All"]]
                          });

                        });

                        function open_del(x){
                                $.ajax({
                                    url: "pages/siswa_bayar/siswa_bayar_del.php?id="+x,
                                    type: "GET",
                                    success: function (ajaxData){
                                        $("#ModalBatal").html(ajaxData);
                                        $("#ModalBatal").modal({backdrop: 'static',keyboard: false});
                                    }
                                });
                        };
                      </script>