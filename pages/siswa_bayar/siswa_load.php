                      <?php
                            include_once '../../lib/config.php';
                      ?>
                      <table id="example1" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                          <th>No</th>
                          <th>Kode</th>
                          <th>NIS</th>
                          <th>Nama</th>
                          <th>Jenis Kelamin</th>
                          <th></th>
                        </tr>
                        </thead>
                        <tbody>
                              <?php
                                    $j=1;
                                    $sqlcatat = "SELECT * FROM t_siswa ORDER BY kd_siswa DESC";
                                    $rescatat = mysql_query( $sqlcatat );
                                    while($catat = mysql_fetch_array( $rescatat )){
                                ?>
                        <tr class="tr1">
                          <td><?php echo $j++;?></td>
                          <td ><?php echo $catat['kd_siswa'];?></td>
                          <td ><?php echo $catat['nis'];?></td>
                          <td ><?php echo $catat['nama'];?></td>
                          <td ><?php echo $catat['jenis_kelamin'];?></td>
                          <td >
                                        <button type="button" class="btn btn btn-default btn-circle" id="pilihsiswa"  onclick="ubahsiswa(
                                         '<?php echo $catat['kd_siswa'];?>',
                                         '<?php echo $catat['nis'];?>',
                                         '<?php echo $catat['nisn'];?>',
                                         '<?php echo $catat['nama'];?>'
                                        );"><span>Pilih</span></button>
                                         
                                    </td>
                        </tr>
                    <?php }?>                                           
                        
                        </tbody>
                      </table>

                      <script>
                        $(function () {
                          $('#example1').DataTable()
                        });
                        
                      </script>