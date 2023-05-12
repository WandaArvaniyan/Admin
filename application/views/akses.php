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
                                <th>Kode Akses</th>
                                <th>Akses</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                            $no = 1;
                            foreach($kode_akses->result_array() as $a):
                        ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $a['kode_akses'] ?></td>
                            <td><?= $a['akses'] ?></td>
                            <td>
                                <?php //echo anchor('crud/edit/'.$u->id,'Edit'); ?>
                                            <?php //echo anchor('crud/hapus/'.$u->id,'Hapus'); ?>
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