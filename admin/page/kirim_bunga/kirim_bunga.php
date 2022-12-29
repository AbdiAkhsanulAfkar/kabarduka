<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Master Kirim Bunga
                        </div>

                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr> 
										    <th>No</th>
                                            <th>Nama Pengirim</th>
											<th>Nomer Pengirim</th>
											<th>Alamat Pengirim</th>
											<th>Nama Almarhum</th>
											<th>Alamat Penerima</th>
											<th>Kontak Keluarga</th>
                                            <th>Nama Kota</th>
                                            <th>Nama Florist</th>
                                            <th>Nama Produk</th>
                                            <th>Kalimat Ucapan</th>
                                            <th>Status Pengiriman</th>
											<th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
									    $no = 1;
										$sql = $koneksi->query("SELECT * from kirim_bunga INNER JOIN tb_mkota on kirim_bunga.id_kota = tb_mkota.id_kota JOIN tb_mflorist ON kirim_bunga.id_florist = tb_mflorist.id_florist JOIN tb_mbunga_papan ON kirim_bunga.id_produk = tb_mbunga_papan.id_produk");
										while ($data = $sql->fetch_assoc()) {
                                        
									?>
									    <tr>
										    <td><?php echo $no++;?></td>
                                            <td><?php echo $data['nama_pengirim'];?></td>
											<td><?php echo $data['no_pengirim'];?></td>
											<td><?php echo $data['alamat_pengirim'];?></td>
											<td><?php echo $data['nama_almarhum'];?></td>
											<td><?php echo $data['alamat_penerima'];?></td>
                                            <td><?php echo $data['kontak_keluarga'];?></td>
                                            <td><?php echo $data['nama_kota'];?></td>
                                            <td><?php echo $data['nama_florist'];?></td>
                                            <td><?php echo $data['nama_produk'];?></td>
                                            <td><?php echo $data['kalimat_ucapan'];?></td>
											<td><?php echo $data['statuskb'];?></td>
													
											<td>
												<a href="?page=kirim_bunga&aksi=status&id=<?php echo $data['id']; ?>" class="btn btn-success">Ubah Status</a>
											    <a href="?page=kirim_bunga&aksi=lihat&id=<?php echo $data['id'];?>" class="btn btn-info" ><i class="fa fa-edit"></i>Lihat Detail</a>

											</td>
									    </tr>
										<?php } ?>
									<tbody>
									</table>
									</div>

									
									
									

						   
						   </div>
					    </div>
				      </div>
</div>