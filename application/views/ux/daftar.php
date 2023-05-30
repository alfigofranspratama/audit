<?php
echo $this->session->flashdata('pesan');

?>
<div class="row">
    <div class="col-xl-7">
        <div class="card border-top border-0 border-4 border-primary">
            <div class="card-body p-5">
                <div class="card-title d-flex align-items-center">
                    <div><i class="bx bxs-user me-1 font-22 text-primary"></i>
                    </div>
                    <h5 class="mb-0 text-primary">Daftar Users</h5>
                </div>
                <hr>
                <form class="row g-3" method="POST" action="<?= base_url('auth/daftar') ?>">
                    <div class="col-md-6">
                        <label for="inputFirstName" class="form-label">Nama</label>
                        <input type="text" name="nama" required class="form-control" id="inputFirstName">
                    </div>
                    <div class="col-md-6">
                        <label for="inputFirstName" class="form-label">Email</label>
                        <input type="email" name="email" required class="form-control" id="inputFirstName">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword" class="form-label">Password</label>
                        <input type="password" name="password" required class="form-control" id="inputPassword">
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary px-5">Daftar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>