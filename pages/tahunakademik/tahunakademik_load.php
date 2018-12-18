                      <?php
                            include_once '../../lib/config.php';
                      ?>
                      <table id="example1" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                          <th>No</th>
                          <th>Kode</th>
                          <th>Tahun Pertama</th>
                          <th>Tahun Kedua</th>
                          <th></th>
                        </tr>
                        </thead>
                        <tbody>
                              <?php
                                    $j=1;
                                    $sqlcatat = "SELECT * FROM t_tahun_akademik ORDER BY tahun_pertama DESC";
                                    $rescatat = mysql_query( $sqlcatat );
                                    while($catat = mysql_fetch_array( $rescatat )){
                                ?>
                        <tr class="tr1">
                          <td><?php echo $j++;?></td>
                          <td ><?php echo $catat['kd_tahun_akademik'];?></td>
                          <td ><?php echo $catat['tahun_pertama'];?></td>
                          <td ><?php echo $catat['tahun_kedua'];?></td>
                          <td >
                                        <button type="button" class="btn btn btn-default btn-circle" id="<?php echo $catat['kd_tahun_akademik']; ?>"  onclick="ubahakademik(
                                         '<?php echo $catat['kd_tahun_akademik'];?>',
                                         '<?php echo $catat['tahun_pertama'];?>',
                                         '<?php echo $catat['tahun_kedua'];?>'
                                        );"><span>Ubah</span></button>
                                         <button type="button" class="btn btn btn-default btn-circle" id="<?php echo $catat['kd_tahun_akademik']; ?>" onclick="open_del(iddelsatuan='<?php echo $catat['kd_tahun_akademik']; ?>');"><span>Hapus</span></button>

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
                                    url: "pages/tahunakademik/tahunakademik_del.php?id="+x,
                                    type: "GET",
                                    success: function (ajaxData){
                                        $("#ModalBatal").html(ajaxData);
                                        $("#ModalBatal").modal({backdrop: 'static',keyboard: false});
                                    }
                                });
                        };
                      </script>