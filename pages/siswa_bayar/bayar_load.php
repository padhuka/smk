                      <?php
                            include_once '../../lib/config.php'; 
                            //kd_siswa_kewajiban_bayar  fk_kd_tahun_akademik  fk_kd_jurusan   fk_kd_kelas   fk_kd_ruang   fk_kd_siswa                          
                      ?>
                      <table id="examplebayar" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                          <th>No</th>
                          <th>Tgl Bayar</th>
                          <th>Jumlah Bayar</th>   
                          <th></th>
                        </tr>
                        </thead>
                        <tbody>
                              <?php 
                  //kd_siswa_kewajiban_bayar  fk_kd_siswa_kelas   fk_kd_kelas_jenjang_bayar   status_bayar 
                                    $j=1;
                                    $sqlcatat = "SELECT * FROM t_siswa_bayar WHERE fk_kd_siswa_kewajiban_bayar='$_GET[kdkelas]'";
                                    $rescatat = mysql_query( $sqlcatat );
                                    //echo $sqlcatat;
                                    while($catat = mysql_fetch_array( $rescatat )){
                                ?>
                        <tr class="tr1">
                          <td><?php echo $j++;?></td>
                          <td><?php echo $catat['tgl'];?></td>
                          <td><?php echo $catat['jml_bayar'];?></td>
                          </td>
                          <td > <!-- kd_siswa_kewajiban_bayar   fk_kd_tahun_akademik  fk_kd_jurusan   fk_kd_kelas   fk_kd_ruang   fk_kd_siswa -->
                                        <button type="button" class="btn btn btn-default btn-circle" id="<?php echo $catat['kd_siswa_kewajiban_bayar']; ?>"  onclick="ubahsiswa_kewajiban_bayar(
                                          '<?php echo $catat['siswa'];?>',
                                         '<?php echo $catat['siswa'];?>',
                                         '<?php echo $catat['kelas'];?>',
                                         '<?php echo $catat['jurusan'];?>',
                                         '<?php echo $catat['fk_kd_siswa_kelas'];?>'
                                        );"><span>Edit</span></button>
                                        
                                        <button type="button" class="btn btn btn-default btn-circle">Hapus</button>
                                    </td>
                        </tr>
                    <?php }?>                                           
                        
                        </tbody>
                      </table>

                      <script>
                        $(function () {
                          $('#examplebayar').DataTable({
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