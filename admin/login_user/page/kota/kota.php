<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Master Kota
                        </div>
						<a href="?page=kota&aksi=tambah" class="btn btn-primary" style="margin-left:13px; margin-top: 8px;"><i 
									class="fa fa-plus"></i>Tambah Data</a>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr> 
										    <th>No</th>
                                            <th>Nama Provinsi</th>
											<th>Nama Kota</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
									    $no = 1;
										$sql = $koneksi->query("select * from tb_mkota INNER JOIN tb_mprovinsi on tb_mkota.id_provinsi = tb_mprovinsi.id_provinsi order by tb_mprovinsi.id_provinsi");
										while ($data = $sql->fetch_assoc()) {
                                        
									?>
									    <tr>
										    <td><?php echo $no++;?></td>
											<td><?php echo $data['nama_provinsi'];?></td>
									        <td><?php echo $data['nama_kota'];?></td>

									    </tr>
										<?php } ?>
									<tbody>
									</table>
									</div>

									
									
									

						   
						   </div>
					    </div>
				      </div>
</div>