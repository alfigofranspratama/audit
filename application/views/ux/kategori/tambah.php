<div class="card">
    <div class="card-header">Tambah Project</div>
    <div class="card-body">
        <!-- SmartWizard html -->
        <form action="<?= base_url('admin/project/tambah') ?>" method="post">
            <div class="mb-3">
                <label class="form-label">Nama Project</label>
                <input type="text" required name="nama_project" class="form-control datepicker" />
            </div>
            <div class="mb-3">
                <label class="form-label">Kategori</label>
                <select required name="kategori" class="multiple-select" data-placeholder="Choose anything" multiple="multiple">
                    <option value="United States" selected>United States</option>
                    <option value="United Kingdom" selected>United Kingdom</option>
                    <option value="Afghanistan" selected>Afghanistan</option>
                    <option value="Aland Islands">Aland Islands</option>
                    <option value="Albania">Albania</option>
                    <option value="Algeria">Algeria</option>
                    <option value="American Samoa">American Samoa</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="formFile" class="form-label">File Project</label>
                <input class="form-control" type="file" name="file_project" id="formFile">
                <label for="formFile" class="form-label text-danger">Ext : jpeg, jpg, png, zip, rar, exe, msi, pdf, xml, psd, tiff, raw, eps, mp3, mp4</label>
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Deskripsi</label>
                <textarea id="mytextarea" name="deskripsi"></textarea>
            </div>
            <div class="mb-3">
                <label for="customRange1" class="form-label">Score : <span id="score"></span></label>
                <input type="range" class="form-range" name="score" min="1" max="100" value="1" onclick="range()" id="customRange1">
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Thumbnail</label>
                <input class="form-control" type="file" name="file_project" id="formFile">
                <label for="formFile" class="form-label text-danger">Ext : jpeg, jpg, png</label>
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