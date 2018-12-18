                      <?php
                            include_once '../../lib/config.php';                           
                      ?>
                      <table id="example1" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                          <th>No</th>
                          <th>NIP</th>
                          <th>Nama</th>
                          <th>Pendidikan</th>
                          <th>Golongan</th>
                          <th>Jabatan</th>
                          <th>Bidang Studi</th>
                          <th>Status</th>                          
                          <th></th>
                        </tr>
                        </thead>
                        <tbody>
                              <?php
                                    $j=1;
                                    $sqlcatat = "SELECT A.*,B.nama AS pendidikan, C.nama AS bidang, D.nama AS golongan, E.nama AS jabatan, F.nama AS status FROM t_siswa_bayar A
                                    LEFT JOIN t_jenjang_pendidikan B ON A.fk_kd_jenjang_pendidikan=B.kd_jenjang_pendidikan
                                    LEFT JOIN t_bidang_studi C ON A.fk_kd_bidang_studi=C.kd_bidang_studi
                                    LEFT JOIN t_golongan D ON A.fk_kd_golongan=D.kd_golongan
                                    LEFT JOIN t_jabatan E ON A.fk_kd_jabatan=E.kd_jabatan
                                    LEFT JOIN t_siswa_bayar_status F ON A.fk_kd_siswa_bayar_status=F.kd_siswa_bayar_status
                                    ORDER BY A.kd_siswa_bayar DESC";
                                    $rescatat = mysql_query( $sqlcatat );
                                    while($catat = mysql_fetch_array( $rescatat )){
                                ?>
                        <tr class="tr1">
                          <td><?php echo $j++;?></td>
                          <td ><?php echo $catat['nip'];?></td>
                          <td ><?php echo $catat['nama'];?></td>
                          <td ><?php echo $catat['pendidikan'];?></td>
                          <td ><?php echo $catat['golongan'];?></td>
                          <td ><?php echo $catat['jabatan'];?></td>
                          <td ><?php echo $catat['bidang'];?></td>
                          <td ><?php echo $catat['status'];?></td>                            
                          </td>
                          <td >
                                        <button type="button" class="btn btn btn-default btn-circle" id="<?php echo $catat['kd_siswa_bayar']; ?>"  onclick="ubahsiswa_bayar(
                                         '<?php echo $catat['kd_siswa_bayar'];?>',
                                         '<?php echo $catat['nip'];?>',
                                         '<?php echo $catat['nama'];?>',
                                         '<?php echo $catat['alamat'];?>',
                                         '<?php echo $catat['tempat_lahir'];?>',
                                         '<?php echo $catat['tgl_lahir'];?>',
                                         '<?php echo $catat['jenis_kelamin'];?>',
                                         '<?php echo $catat['fk_kd_jenjang_pendidikan'];?>',
                                         '<?php echo $catat['fk_kd_bidang_studi'];?>',
                                         '<?php echo $catat['fk_kd_golongan'];?>',
                                         '<?php echo $catat['fk_kd_jabatan'];?>',
                                         '<?php echo $catat['fk_kd_siswa_bayar_status'];?>'
                                        );"><span>Ubah</span></button>
                                         <button type="button" class="btn btn btn-default btn-circle" id="<?php echo $catat['kd_siswa_bayar']; ?>" onclick="open_del(iddelsatuan='<?php echo $catat['kd_siswa_bayar']; ?>');"><span>Hapus</span></button>

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
                                    url: "pages/siswa_bayar/siswa_bayar_del.php?id="+x,
                                    type: "GET",
                                    success: function (ajaxData){
                                        $("#ModalBatal").html(ajaxData);
                                        $("#ModalBatal").modal({backdrop: 'static',keyboard: false});
                                    }
                                });
                        };
                      </script>