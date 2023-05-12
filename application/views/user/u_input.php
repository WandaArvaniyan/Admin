<?php 
//$this->load->view("template/head");
?>
<div class="container-fluid">
        <!--  Row 1 -->
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <form action="<?php echo base_url(). 'crud/tambah_aksi';?>">
                <table>
                    <tr>
                        <td>Nama</td>
                        <td><input type="text" name="nama"></td>
                    </tr>
                    <tr>
                        <td>Username</td>
                        <td><input type="text" name="username"></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="text" name="password"></td>
                    </tr>
                    <tr>
                        <td>Kode Akses</td>
                        <td><input type="text" name="kode_akses"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" value="Tambah"></td>
                    </tr>
                </table>
                </form>
                </div>                
        </div>        
    </div>
</div>
</div>