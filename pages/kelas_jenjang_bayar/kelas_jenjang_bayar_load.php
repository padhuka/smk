                      <?php
                            include_once '../../lib/config.php'; 
                            //kd_kelas_jenjang_bayar  fk_kd_tahun_akademik  fk_kd_jurusan   fk_kd_kelas   fk_kd_ruang   fk_kd_siswa                          
                      ?>
                      <table id="example1" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                          <th>No</th>
                          <th>Kode</th>
                          <th>Nama</th>
                          <th>Kelas</th>
                          <th>Tahun Akademik</th>   
                          <th>Jurusan</th>   
                          <th>Jumlah</th>   
                          <th>Wajib</th>   
                          <th></th>
                        </tr>
                        </thead>
                        <tbody>
                              <?php 
                                    $j=1;
                                    $sqlcatat = "SELECT A.*,A.nama AS jenjang,B.nama AS kelas, D.kd_tahun_akademik AS tahun, E.nama AS jurusan FROM t_kelas_jenjang_bayar A
                                    LEFT JOIN t_kelas B ON A.fk_kd_kelas=B.kd_kelas
                                    LEFT JOIN t_tahun_akademik D ON A.fk_kd_tahun_akademik=D.kd_tahun_akademik                                    
                                    LEFT JOIN t_jurusan E ON A.fk_kd_jurusan=E.kd_jurusan
                                    ORDER BY A.kd_kelas_jenjang_bayar DESC";
                                    $rescatat = mysql_query( $sqlcatat );
                                    while($catat = mysql_fetch_array( $rescatat )){
                                ?>
                        <tr class="tr1">
                          <td><?php echo $j++;?></td>
                          <td><?php echo $catat['kd_kelas_jenjang_bayar'];?></td>
                          <td><?php echo $catat['jenjang'];?></td>
                          <td><?php echo $catat['kelas'];?></td>
                          <td><?php echo $catat['tahun'];?></td>
                          <td><?php echo $catat['jurusan'];?></td>                   
                          <td><?php echo $catat['total_bayar'];?></td>
                          <td><?php echo $catat['wajib'];?></td>
                          </td>
                          <td > <!-- kd_kelas_jenjang_bayar   fk_kd_tahun_akademik  fk_kd_jurusan   fk_kd_kelas   fk_kd_ruang   fk_kd_siswa -->
                                        <button type="button" class="btn btn btn-default btn-circle" id="<?php echo $catat['kd_kelas_jenjang_bayar']; ?>"  onclick="ubahkelas_jenjang_bayar(
                                         '<?php echo $catat['kd_kelas_jenjang_bayar'];?>',
                                         '<?php echo $catat['jenjang'];?>',
                                         '<?php echo $catat['fk_kd_tahun_akademik'];?>',
                                         '<?php echo $catat['fk_kd_jurusan'];?>',
                                         '<?php echo $catat['fk_kd_kelas'];?>',
                                         '<?php echo $catat['total_bayar'];?>',
                                         '<?php echo $catat['wajib'];?>'
                                        );"><span>Ubah</span></button>
                                         <button type="button" class="btn btn btn-default btn-circle" id="<?php echo $catat['kd_kelas_jenjang_bayar']; ?>" onclick="open_del(iddelsatuan='<?php echo $catat['kd_kelas_jenjang_bayar']; ?>');"><span>Hapus</span></button>

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
                                    url: "pages/kelas_jenjang_bayar/kelas_jenjang_bayar_del.php?id="+x,
                                    type: "GET",
                                    success: function (ajaxData){
                                        $("#ModalBatal").html(ajaxData);
                                        $("#ModalBatal").modal({backdrop: 'static',keyboard: false});
                                    }
                                });
                        };
                      </script>