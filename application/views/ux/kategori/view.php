<?= $this->session->flashdata('pesan'); ?>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="card-title d-flex">
                    <h4 class="mb-0">List Kategori</h4>
                    <a type="button" data-bs-toggle="modal" data-bs-target="#add_kategori" class="btn btn-primary bg-gradient-primary ms-auto">+ Kategori</a>
                </div>
                <hr />
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Icon</th>
                                <th>Kategori</th>
                                <th>Tampilkan di Home</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($kategori as $row) :
                            ?>
                                <tr>
                                    <td><img src="<?= base_url('images/kategori/') . $row->icon ?>" width="30px" height="30px" alt=""></td>
                                    <td><?= $row->kategori ?></td>
                                    <td><?php if ($row->tampilkan_di_home == 1) echo "Aktif";
                                        else echo "Tidak Aktif"; ?></td>
                                    <td>
                                        <a type="button" data-bs-toggle="modal" data-bs-target="#edit<?= $row->id_kategori ?>"><i class="bx bx-pencil"></i></a> -
                                        <a type="button" data-bs-toggle="modal" data-bs-target="#delete<?= $row->id_kategori ?>" data-bs-id="<?= $row->id_kategori ?>"><i class="bx bx-trash"></i></a>
                                    </td>
                                </tr>

                                <div class="modal fade" id="edit<?= $row->id_kategori ?>" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <form action="<?= base_url('admin/kategori/edit/') . $row->id_kategori ?>" method="post" enctype="multipart/form-data">
                                                <div class="modal-body">
                                                    <div class="mb-3">
                                                        <label for="icon" class="form-label">Icon</label>
                                                        <input name="icon" class="form-control" id="icon" type="file">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="kategori" class="form-label">Nama Kategori</label>
                                                        <input name="kategori" class="form-control" value="<?= $row->kategori ?>" required id="kategori" type="text">
                                                    </div>
                                                    <div class="mb-3 form-check form-switch">
                                                        <input class="form-check-input" type="checkbox" <?php if ($row->tampilkan_di_home == 1) echo "checked"; ?> name="tampilkan_di_home" id="tampilkan_home">
                                                        <label class="form-check-label" for="tampilkan_home">Tampilkan di Home</label>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal fade" id="delete<?= $row->id_kategori ?>" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <form action="<?= base_url('admin/kategori/hapus/') . $row->id_kategori ?>" method="post">
                                                <div class="modal-body">
                                                    <p>Yakin hapus Kategori <?= $row->kategori ?> ?</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            endforeach
                            ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Icon</th>
                                <th>Kategori</th>
                                <th>Tampilkan di Home</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="add_kategori" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form action="<?= base_url('admin/kategori') ?>" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="icon" class="form-label">Icon</label>
                        <input name="icon" class="form-control" id="icon" type="file">
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Nama Kategori</label>
                        <input name="kategori" class="form-control" type="text" id="formFile">
                    </div>
                    <div class="mb-3 form-check form-switch">
                        <input class="form-check-input" type="checkbox" name="tampilkan_di_home" id="flexSwitchCheckDefault">
                        <label class="form-check-label" for="flexSwitchCheckDefault">Tampilkan di Home</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>