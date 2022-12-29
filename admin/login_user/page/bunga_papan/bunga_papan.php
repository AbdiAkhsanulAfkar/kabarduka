<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Master Bunga Papan
                        </div>
						<a href="?page=bunga_papan&aksi=tambah" class="btn btn-primary" style="margin-left: 13px; margin-top: 8px;"><i 
									class="fa fa-plus"></i>Tambah Data</a>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr> 
										    <th>No</th>
                                            <th>Nama Florist</th>
											<th>Nama Produk</th>
											<th>Harga Produk</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
									    $no = 1;
										$sql = $koneksi->query("select * from tb_mbunga_papan INNER JOIN tb_mflorist on tb_mbunga_papan.id_florist = tb_mflorist.id_florist");
										while ($data = $sql->fetch_assoc()) {                                        
									?>
									    <tr>
										    <td><?php echo $no++;?></td>
									        <td><?php echo $data['nama_florist'];?></td>
											<td><?php echo $data['nama_produk'];?></td>
											<td><?php echo $data['harga_produk'];?></td>				
											<td>
											    <a href="?page=bunga_papan&aksi=ubah&id=<?php echo $data['id_produk'];?>" class="btn btn-info" ><i class="fa fa-edit"></i>Ubah</a>
                                                <a onclick="return confirm('Anda Yakin Akan Menghapus Data ini ... ???')" href="?page=bunga_papan&aksi=hapus&id=<?php
                                                echo $data['id_produk'];?>" class="btn btn-danger" ></i class="fa fa-trash"></i>Hapus</a>
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