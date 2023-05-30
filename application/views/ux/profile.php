<?php
$users = $this->session->userdata('users');
$users = $this->db->get_where('tb_users', ['id_users' => $users['id_users']])->row_array();
?>
<?= $this->session->flashdata('pesan');
 ?>
<div class="user-profile-page">
    <div class="card radius-15">
        <div class="card-body">
            <!--end row-->
            <ul class="nav nav-pills">
                <li class="nav-item">
                    <a class="nav-link active" data-bs-toggle="tab" href="#Edit-Profile"><span class="p-tab-name">Edit Profile</span><i class='bx bx-message-edit font-24 d-sm-none'></i></a>
                </li>
            </ul>
            <div class="tab-content mt-3">
                <div class="tab-pane fade show active" id="Edit-Profile">
                    <div class="card shadow-none border mb-0 radius-15">
                        <div class="card-body">
                            <div class="form-body">
                                <form class="row" method="post" action="<?= base_url('admin/profile') ?>">
                                    <div class="col-12 col-lg-5 border-right">
                                        <div class="row g-3">
                                            <div class="col-12">
                                                <label class="form-label">Nama Lengkap</label>
                                                <input type="text" name="nama" value="<?= $users['nama'] ?>" class="form-control">
                                            </div>
                                            <div class="col-12">
                                                <label class="form-label">Email</label>
                                                <input type="text" value="<?= $users['email'] ?>" disabled class="form-control">
                                            </div>
                                            <div class="col-12">
                                                <button class="btn btn-primary">Simpan</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-5 border-right">
                                        <label class="form-label">Password Baru</label>
                                        <input type="password" name="password" placeholder="Kosongkan jika tidak mengganti password" class="form-control">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>