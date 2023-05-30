<?php
$kategori = $this->db->get('tb_kategori')->result();
?>
<div class="card">
    <div class="card-header">Edit Project</div>
    <div class="card-body">
        <!-- SmartWizard html -->
        <form action="<?= base_url('admin/project/edit/') . $project['id_project']; ?>" enctype="multipart/form-data" method="post">
            <div class="mb-3">
                <label class="form-label">Nama Project</label>
                <input type="text" value="<?= $project['nama_project'] ?>" required name="nama_project" class="form-control datepicker" />
            </div>
            <div class="mb-3">
                <label class="form-label">Kategori</label>
                <select required name="kategori[]" class="multiple-select" data-placeholder="Choose anything" multiple="multiple">
                    <?php
                    foreach ($projectKategori as $row) :
                        foreach ($kategori as $k) {
                            if ($row != $k->kategori) {
                    ?>
                                <option value="<?= $k->kategori; ?>"><?= $k->kategori; ?></option>
                            <?php
                            } else {
                            ?>
                                <option selected value="<?= $k->kategori; ?>"><?= $k->kategori; ?></option>
                        <?php
                            }
                        }
                        ?>
                    <?php
                    endforeach
                    ?>
                </select>
            </div>

            <div class="mb-3">
                <label for="" class="form-label">File Project ( <a href="<?= base_url('images/project/') . $project['file_project'] ?>">Download file saat ini</a> )</label>
                <input class="form-control" type="file" name="file_project" id="formFile">
                <label for="formFile" class="form-label text-danger">Ext : jpeg, jpg, png, zip, rar, exe, msi, pdf, xml, psd, tiff, raw, eps, mp3, mp4</label>
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Deskripsi</label>
                <textarea class="form-control" name="deskripsi"><?= $project['deskripsi'] ?></textarea>
            </div>
            <div class="mb-3">
                <label for="formFileFG" class="form-label">Function Graph</label>
                <input class="form-control" type="file" name="function_graph" id="formFileFG">
                <label for="formFileFG" class="form-label text-danger">Ext : jpeg, jpg, png, zip, rar, exe, msi, pdf, xml, psd, tiff, raw, eps, mp3, mp4</label>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Function Overview</label>
                <textarea name="function_overview" class="form-control" rows="6"><?= $project['function_overview'] ?></textarea>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Embed Code</label>
                <textarea name="embed_code" class="form-control" rows="3"><?= $project['embed_code'] ?></textarea>
            </div>
            <div class="mb-3">
                <label for="customRange1" class="form-label">Score : <span id="score"></span></label>
                <input type="range" required class="form-range" name="score" value="<?= $project['score'] ?>" min="1" max="100" value="1" onclick="range()" id="customRange1">
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Logo Project</label>
                <input class="form-control" type="file" name="logo" id="formFile">
                <label for="formFile" class="form-label text-danger">Ext : jpeg, jpg, png</label>
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Thumbnail ( <a href="<?= base_url('images/project/') . $project['thumbnail']; ?>" target="_blank">Lihat</a> )</label>
                <input class="form-control" type="file" name="thumbnail" id="formFile">
                <label for="formFile" class="form-label text-danger">Ext : jpeg, jpg, png</label>
            </div>
            <div class="mb-3">
                <label for="a" class="form-label">Buy on Pancake (Link)</label>
                <input class="form-control" required type="text" value="<?= $project['buy_on_pancake'] ?>" name="buy_on_pancake" id="a">
            </div>
            <div class="mb-3">
                <label for="b" class="form-label">Website (Link)</label>
                <input class="form-control" required type="text" value="<?= $project['website'] ?>" name="website" id="b">
            </div>
            <div class="mb-3">
                <label for="c" class="form-label">Join Telegram (Link)</label>
                <input class="form-control" required type="text" value="<?= $project['telegram'] ?>" name="telegram" id="c">
            </div>
            <div class="mb-3">
                <label for="d" class="form-label">Join Discord (Link)</label>
                <input class="form-control" required type="text" value="<?= $project['discord'] ?>" name="discord" id="d">
            </div>
            <div class="mb-3">
                <label for="e" class="form-label">Join Twitter (Link)</label>
                <input class="form-control" required type="text" value="<?= $project['twitter'] ?>" name="twitter" id="e">
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Posting</button>
            </div>
        </form>
    </div>
</div>
<script>
    function range() {
        var nilaiRange = document.getElementById('customRange1').value;
        document.getElementById('score').innerHTML = nilaiRange + "%";
    }
</script>