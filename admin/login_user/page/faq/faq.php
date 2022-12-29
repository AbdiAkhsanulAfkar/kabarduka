<div class="row">
    <div class="col-md-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading">
                Master FAQ
            </div>
            <a href="?page=faq&aksi=tambah" class="btn btn-primary" style="margin-left: 13px; margin-top: 8px;"><i class="fa fa-plus"></i>Tambah FAQ</a>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                               
                                <th>ID</th>
                                <th>Pertanyaan</th>
                                <th>Jawaban</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                           
                            $sql = $koneksi->query("select * from faq");
                            while ($data = $sql->fetch_assoc()) {
                            ?>
                                <tr>
                                    
                                    <td><?php echo $data['id_faq']; ?></td>
                                    <td><?php echo $data['question']; ?></td>
                                    <td><?php echo $data['answer']; ?></td>
                                </tr>
                            <?php } ?>
                        <tbody>
                    </table>
                </div>

                
            </div>
        </div>
    </div>
</div>