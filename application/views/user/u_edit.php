<div class="container-fluid">
    <!--  Row 1 -->
    <div class="row">
        <div class="card">
            <div class="card-body">
                <!-- <form > -->
                <h5 class="card-title fw-semibold mb-4">Form Edit Data</h5>
                <div class="card">
                    <div class="card-body">

                        <form action="<?= base_url(); ?>User/update" method="post">
                            <div class="mb-3">
                                <label for="exampleInputName" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="exampleInputName" name="nama" value="<?= $user->nama ?>" require>
                                <div id="emailHelp" class="form-text">We'll never share your name with anyone else.</div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail" class="form-label">Email Adrress</label>
                                <input type="email" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp" name="username" value="<?= $user->username ?>" require>
                                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword" class="form-label">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword" name="password" value="<?= $user->password ?>" require>
                                <div id="emailHelp" class="form-text">We'll never share your password with anyone else.</div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputAkses" class="form-label">Kode Akses</label>
                                <input type="text" class="form-control" id="exampleInputAkses" name="kode_akses" value="<?= $user->kode_akses ?>" require>
                                <div id="emailHelp" class="form-text">We'll never share your access kode with anyone else.</div>
                            </div>
                            <input type="hidden" name="id" value="<?= $user->id ?>">
                            <button type="submit" class="btn btn-primary" value="Update">Submit</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>