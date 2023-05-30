<form action="<?= base_url('admin/settings') ?>" enctype="multipart/form-data" method="post">
    <div class="row">
        <?= $this->session->flashdata('pesan'); ?>
        <div class="col-xl-6">
            <!-- UI -->
            <div class="card">
                <div class="card-body">
                    <div class="mb-2">
                        <h6 class="fw-bold opacity-50 mb-3">User Interface</h6>
                        <div class="form-group mb-2">
                            <h6 for="">Title</h6>
                            <input type="text" value="<?= $settings['title_website'] ?>" required name="title_website" class="form-control">
                        </div>
                        <div class="form-group mb-2">
                            <h6 for="">Description Website</h6>
                            <textarea name="deskripsi_web" id="" cols="30" rows="2" class="form-control"><?= $settings['deskripsi_web'] ?></textarea>
                        </div>
                        <div class="form-group mb-2">
                            <h6 for="">Deskripsi Footer</h6>
                            <textarea name="deskripsi_footer" id="" cols="30" rows="2" class="form-control"><?= $settings['deskripsi_footer'] ?></textarea>
                        </div>
                        <div class="form-group mb-2">
                            <h6 for="">Logo Header</h6>
                            <input type="file" name="logo_header_ui" class="form-control">
                        </div>
                        <div class="form-group mb-2">
                            <h6 for="">Fav Icon</h6>
                            <input type="file" name="favicon" class="form-control" id="">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Meta -->
            <div class="card">
                <div class="card-body">
                    <div class="mb-2">
                        <h6 class="fw-bold opacity-50 mb-3">Meta Tags</h6>
                        <div class="form-group mb-2">
                            <h6 for="">Search Description</h6>
                            <textarea name="meta_deskripsi" class="form-control" id="" cols="30" rows="2"><?= $settings['meta_deskripsi'] ?></textarea>
                        </div>
                        <div class="form-group mb-2">
                            <h6 for="">Meta Keywords</h6>
                            <textarea name="meta_keywords" class="form-control" id="" cols="30" rows="2"><?= $settings['meta_keywords'] ?></textarea>
                        </div>
                        <div class="form-group mb-2">
                            <h6 for="">Meta Title</h6>
                            <textarea name="meta_title" class="form-control" id="" cols="30" rows="2"><?= $settings['meta_title'] ?></textarea>
                        </div>
                    </div>
                </div>
            </div>



        </div>
        <div class="col-xl-6">

            <!-- UX -->
            <div class="card">
                <div class="card-body">
                    <div class="mb-2">
                        <h6 class="fw-bold opacity-50 mb-3">User Experience</h6>
                        <div class="form-group mb-2">
                            <h6 for="">Title</h6>
                            <input type="text" required name="title_ux" value="<?= $settings['title_ux'] ?>" class="form-control">
                        </div>
                        <div class="form-group mb-2">
                            <h6 for="">Logo Header</h6>
                            <input type="file" name="logo_header_ux" class="form-control">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Social Media -->
            <div class="card">
                <div class="card-body">
                    <div class="mb-2">
                        <h6 class="fw-bold opacity-50 mb-3">Social Media Link</h6>
                        <div class="form-group mb-2">
                            <h6 for="">Twitter</h6>
                            <input type="text" required name="twitter" class="form-control" value="<?= $settings['twitter'] ?>">
                        </div>
                        <div class="form-group mb-2">
                            <h6 for="">Discord</h6>
                            <input type="text" required name="discord" class="form-control" value="<?= $settings['discord'] ?>">
                        </div>
                        <div class="form-group mb-2">
                            <h6 for="">Facebook</h6>
                            <input type="text" required name="facebook" class="form-control" value="<?= $settings['facebook'] ?>">
                        </div>
                        <div class="form-group mb-2">
                            <h6 for="">Telegram</h6>
                            <input type="text" required name="telegram" class="form-control" value="<?= $settings['telegram'] ?>">
                        </div>
                        <div class="form-group mb-2">
                            <h6 for="">Youtube</h6>
                            <input type="text" required name="youtube" class="form-control" value="<?= $settings['youtube'] ?>">
                        </div>
                        <div class="form-group mb-2">
                            <h6 for="">Tiktok</h6>
                            <input type="text" required name="tiktok" class="form-control" value="<?= $settings['tiktok'] ?>">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Advanced -->
            <div class="card">
                <div class="card-body">
                    <div class="mb-2">
                        <h6 class="fw-bold opacity-50 mb-3">Advanced</h6>
                        <div class="form-group mb-2">
                            <h6 for=""></h6>
                            <div class="form-check form-switch">
                                <input class="form-check-input" <?php if ($settings['robots_txt'] != NULL) echo "checked"; ?> type="checkbox" id="robots" onclick="robot(this.checked)">
                                <label class="form-check-label" for="robots">Enable robots.txt</label>
                            </div>
                            <input type="text" class="form-control" value="<?= $settings['robots_txt'] ?>" id="robotstxt" disabled name="robotstxt">
                        </div>
                        <div class="form-group mb-2">
                            <h6 for="">Max Show Project in Homepage</h6>
                            <input type="number" name="max_post" value="<?= $settings['max_post'] ?>" placeholder="0 Untuk Menampilkan Semua Project" class="form-control" id="">
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <button class="btn btn-primary" type="submit">Simpan</button>
    </div>
</form>

<script>
    function robot(checked) {
        var cek = document.getElementById('robots')
        if (checked == true) document.getElementById('robotstxt').removeAttribute('disabled');
        else document.getElementById('robotstxt').setAttribute('disabled', 0);
    }
</script>