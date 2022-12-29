<div class="row">
    <div class="col-md-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading">
                Master Almarhum
            </div>
            <a href="?page=almarhum&aksi=tambah" class=" btn btn-primary" style="margin-left: 13px; margin-top: 8px;"><i class="fa fa-plus"></i>Tambah Data</a>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Rumah Duka</th>
                                <th>Nama Almarhum</th>
                                <th>Foto Almarhum</th>
                                <th>Tanggal Lahir</th>
                                <th>Tanggal Kematian</th>
                                <th>Alamat Almarhum</th>
                                <th>Kontak Keluarga</th>
                                <th>Upacara Kematian</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            function tgl_indo($tanggal){
                                $bulan = array (
                                    1 =>   'Januari',
                                    'Februari',
                                    'Maret',
                                    'April',
                                    'Mei',
                                    'Juni',
                                    'Juli',
                                    'Agustus',
                                    'September',
                                    'Oktober',
                                    'November',
                                    'Desember'
                                );
                                $pecahkan = explode('-', $tanggal);
                                
                                // variabel pecahkan 0 = tanggal
                                // variabel pecahkan 1 = bulan
                                // variabel pecahkan 2 = tahun
                            
                                return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
                            }
                            $no = 1;
                            $sql = $koneksi->query("select * from tb_almarhum INNER JOIN tb_mrumah_duka ON tb_almarhum.id_rumah_duka = tb_mrumah_duka.id_rumah_duka");
                            while ($data = $sql->fetch_assoc()) {

                            ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $data['nama_rumah_duka']; ?></td>
                                    <td><?php echo $data['nama_almarhum']; ?></td>
                                    <td> <?php echo '<img src = "data:image/jpg;base64,' . base64_encode($data['foto']) . '" alt="Image" style="width: 100px; height:100px;" >'; ?> </td>
                                    <td><?php echo tgl_indo( $data['tanggal_lahir']); ?></td>
                                    <td><?php echo tgl_indo( $data['tanggal_kematian']); ?></td>
                                    <td><?php echo $data['alamat']; ?></td>
                                    <td><?php echo $data['kontak_keluarga']; ?></td>
                                    <td><?php echo tgl_indo( $data['upacara_kematian']); ?></td>
                                    <td><?php echo $data['status']; ?></td>
                                    <td>
                                        <a href="?page=almarhum&aksi=status&id=<?php echo $data['id_almarhum']; ?>" class="btn btn-success"><i class="fa fa-pencil"></i> Ubah Status</a>
                                        <a href="?page=almarhum&aksi=ubah&id=<?php echo $data['id_almarhum']; ?>" class="btn btn-info"><i class="fa fa-edit"></i> Ubah</a>
                                        <a onclick="return confirm('Anda Yakin Akan Menghapus Data ini ... ???')" href="?page=almarhum&aksi=hapus&id=<?php
                                        echo $data['id_almarhum']; ?>" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</a>
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