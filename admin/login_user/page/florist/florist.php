<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Master Florist
                        </div>
						<a href="?page=florist&aksi=tambah" class="btn btn-primary" style="margin-left: 13px; margin-top: 8px;"><i 
									class="fa fa-plus"></i>Tambah Data</a>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr> 
										    <th>No</th>
                                            <th>Nama Kota  </th>
											<th>Nama Florist</th>
											<th>Alamat Florist</th>
											<th>WA Florist</th>
											<th>Bank Florist</th>
											<th>AC Bank Florist</th>
											<th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
									    $no = 1;
										$sql = $koneksi->query("select * from tb_mflorist INNER JOIN tb_mkota on tb_mflorist.id_kota = tb_mkota.id_kota");
										while ($data = $sql->fetch_assoc()) {
                                        
									?>
									    <tr>
										    <td><?php echo $no++;?></td>
                                            <td><?php echo $data['nama_kota'];?></td>
											<td><?php echo $data['nama_florist'];?></td>
											<td><?php echo $data['alamat_florist'];?></td>
											<td><?php echo $data['wa_florist'];?></td>
											<td><?php echo $data['bank_florist'];?></td>
											<td><?php echo $data['ac_bank_florist'];?></td>
											<td><?php echo $data['status'];?></td>
											
									    </tr>
										<?php } ?>
									<tbody>
									</table>
									</div>

									
									
									

						   
						   </div>
					    </div>
				      </div>
</div>