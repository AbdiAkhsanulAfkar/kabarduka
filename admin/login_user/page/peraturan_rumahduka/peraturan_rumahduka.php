<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Master Peraturan Rumah Duka
                        </div>
						<a href="?page=peraturan_rumahduka&aksi=tambah" class="btn btn-primary" style="margin-left: 13px; margin-top: 8px;"><i 
									class="fa fa-plus"></i>Tambah Data</a>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr> 
										    <th>No</th>
                                            <th>Peraturan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
									    $no = 1;
										$sql = $koneksi->query("select * from peraturan_rumahduka");
										while ($data = $sql->fetch_assoc()) {                                        
									?>
									    <tr>
										    <td><?php echo $no++;?></td>
									        <td><?php echo $data['peraturan'];?></td>				

									    </tr>
										<?php } ?>
									<tbody>
									</table>
									</div>

									
						   </div>
					    </div>
				      </div>
</div>