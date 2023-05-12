<?php 
$this->load->view("template/head");
?>
<div class="container-fluid">
        <!--  Row 1 -->
        <div class="row">
            <div class="card">
                <div class="card-header">
                    Table User
                </div>
                <div class="card-body">
                    <a href="#" class="btn btn-primary">Tambah Data</a>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Username</th>
                                <th>Password</th>
                                <th>Kode Akses</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                            $no = 1;
                            foreach($tbl_user as $u):
                        ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?php echo $u->nama ?></td>
                            <td><?php echo $u->username ?></td>
                            <td><?php echo $u->password ?></td>
                            <td><?php echo $u->kode_akses ?></td>                            
                            <td>
                                <a href="<?php echo site_url('user/edit/'.$u->id) ?>"
										class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
									<a onclick="deleteConfirm('<?php echo site_url('user/delete/'.$u->id) ?>')"
										href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
                            </td>
                        </tr>
                        <?php
                            endforeach;
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>    
        </div>        
    </div>
</div>
</div>