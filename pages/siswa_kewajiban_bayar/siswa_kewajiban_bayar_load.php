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
                          <th>Tagihan</th> 
                          <th>Jumlah</th>   
                          <th>Status Bayar</th>   
                          <th></th>
                        </tr>
                        </thead>
                        <tbody>
                              <?php 
                  //kd_siswa_kewajiban_bayar  fk_kd_siswa_kelas   fk_kd_kelas_jenjang_bayar   status_bayar 
                                    $j=1;
                                    $sqlcatat = "SELECT A.*,B.*, B.nama AS namatagihan, C.nama AS jurusan FROM t_siswa_kewajiban_bayar A
                                    LEFT JOIN t_kelas_jenjang_bayar B ON A.fk_kd_kelas_jenjang_bayar=B.kd_kelas_jenjang_bayar
                                    LEFT JOIN t_jurusan C ON B.fk_kd_jurusan=C.kd_jurusan
                                    LEFT JOIN t_tahun_akademik D ON B.fk_kd_tahun_akademik=D.kd_tahun_akademik
                                    LEFT JOIN t_siswa_kelas E ON A.fk_kd_siswa_kelas=E.kd_siswa_kelas
                                    LEFT JOIN t_kelas F ON E.fk_kd_kelas=F.kd_kelas
                                    LEFT JOIN t_siswa G ON E.fk_kd_siswa=G.kd_siswa
                                    ORDER BY A.kd_siswa_kewajiban_bayar DESC";
                                    $rescatat = mysql_query( $sqlcatat );
                                    while($catat = mysql_fetch_array( $rescatat )){
                                ?>
                        <tr class="tr1">
                          <td><?php echo $j++;?></td>
                          <td><?php echo $catat['kd_siswa_kewajiban_bayar'];?></td>
                          <td><?php echo $catat['siswa'];?></td>
                          <td><?php echo $catat['kelas'];?></td>
                          <td><?php echo $catat['tahun'];?></td>
                          <td><?php echo $catat['jurusan'];?></td>  
                          <td><?php echo $catat['tagihan'];?></td>    
                          <td><?php echo $catat['total_bayar'];?></td>
                          <td><?php echo $catat['status_bayar'];?></td>
                          </td>
                          <td > <!-- kd_siswa_kewajiban_bayar   fk_kd_tahun_akademik  fk_kd_jurusan   fk_kd_kelas   fk_kd_ruang   fk_kd_siswa -->
                                        <button type="button" class="btn btn btn-default btn-circle" id="<?php echo $catat['kd_siswa_kewajiban_bayar']; ?>"  onclick="ubahsiswa_kewajiban_bayar(
                                         '<?php echo $catat['kd_siswa_kewajiban_bayar'];?>',
                                         '<?php echo $catat['jenjang'];?>',
                                         '<?php echo $catat['fk_kd_tahun_akademik'];?>',
                                         '<?php echo $catat['fk_kd_jurusan'];?>',
                                         '<?php echo $catat['fk_kd_kelas'];?>',
                                         '<?php echo $catat['total_bayar'];?>',
                                         '<?php echo $catat['status_bayar'];?>'
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