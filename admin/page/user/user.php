<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Master User
                        </div>
						<a href="?page=user&aksi=tambah" class="btn btn-primary" style="margin-left: 13px; margin-top: 8px;"><i 
									class="fa fa-plus"></i>Tambah Data</a>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr> 
										
                                            <th>ID User</th>
											<th>Username</th>
											<th>Role User</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
									   
										$sql = $koneksi->query("select * from tb_user");
										while ($data = $sql->fetch_assoc()) {
                                        
									?>
									    <tr>
                                            <td><?php echo $data['id'];?></td>
									        <td><?php echo $data['username'];?></td>
											<td><?php echo $data['role_user']?></td>
											<td>
											    <a href="?page=user&aksi=ubah&id=<?php echo $data['id'];?>" class="btn btn-info" ><i class="fa fa-edit"></i>Ubah</a>
                                                <a onclick="return confirm('Anda Yakin Akan Menghapus Data ini ... ???')" href="?page=user&aksi=hapus&id=<?php
                                                echo $data['id'];?>" class="btn btn-danger" ></i class="fa fa-trash"></i>Hapus</a>
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