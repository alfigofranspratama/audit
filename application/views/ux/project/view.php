<?= $this->session->flashdata('pesan'); ?>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="card-title d-flex">
                    <h4 class="mb-0">List Project</h4>
                    <a href="<?= base_url('admin/project/tambah/') ?>" class="btn btn-primary bg-gradient-primary ms-auto">+ Project</a>
                </div>
                <hr />
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Nama Project</th>
                                <th>Deskripsi</th>
                                <th>Function Graph</th>
                                <th>Function Overview</th>
                                <!-- <th>Embed Code</th> -->
                                <th>File Project</th>
                                <th>Tanggal Posting</th>
                                <th>Score</th>
                                <th>Thumbnail</th>
                                <th>Viewer</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($project as $row) :
                            ?>
                                <tr>
                                    <td><?= $row->nama_project ?></td>
                                    <td><?= substr($row->deskripsi, 0, 22) ?>...</td>
                                    <td>
                                        <a type="button" data-bs-toggle="modal" data-bs-target="#fg<?= $row->id_project ?>">Lihat</a>
                                    </td>
                                    <td><?= substr($row->function_overview, 0, 22) ?>...</td>
                                    <!-- <td>
                                        <a type="button" data-bs-toggle="modal" data-bs-target="#ec<?= $row->id_project ?>">Lihat</a>
                                    </td> -->
                                    <td><a href="<?= base_url('images/project/') . $row->file_project ?>">Download</a></td>
                                    <td><?= format_indo($row->tanggal_post) ?></td>
                                    <td><?= $row->score ?>%</td>
                                    <td>
                                        <a type="button" data-bs-toggle="modal" data-bs-target="#thumbnail<?= $row->id_project ?>"><i class="bx bx-show"></i></a>
                                    </td>
                                    <td>
                                        <?= $row->views; ?>
                                    </td>
                                    <td>
                                        <?php if ($row->arsipkan == 0) {
                                            echo "Publish";
                                        } else {
                                            echo "diarsipkan";
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <a href="<?= base_url('admin/project/edit/') . $row->id_project ?>"><i class="bx bx-pencil"></i></a> -
                                        <a type="button" data-bs-toggle="modal" data-bs-target="#delete<?= $row->id_project ?>"><i class="bx bx-trash"></i></a> -
                                        <a type="button" data-bs-toggle="modal" data-bs-target="#arsip<?= $row->id_project ?>">
                                            <?php if ($row->arsipkan == 0) {
                                                echo "<i class='bx bx-archive-in'>";
                                            } else {
                                                echo "<i class='bx bx-archive-out'></i>";
                                            }
                                            ?>
                                            </i></a>
                                    </td>
                                </tr>

                                <div class="modal fade" id="thumbnail<?= $row->id_project ?>" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <img src="<?= base_url('images/project/') . $row->thumbnail; ?>" width="100%" alt="<?= $row->nama_project ?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="modal fade" id="fg<?= $row->id_project ?>" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <img src="<?= base_url('images/project/') . $row->function_graph; ?>" width="100%" alt="<?= $row->nama_project ?>">
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="modal fade" id="ec<?= $row->id_project ?>" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            
                                        </div>
                                    </div>
                                </div> -->

                                <div class="modal fade" id="delete<?= $row->id_project ?>" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <form action="<?= base_url('admin/project/hapus/') . $row->id_project ?>" method="post">
                                                <div class="modal-body">
                                                    <p>Yakin hapus Project <?= $row->nama_project ?> ?</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal fade" id="arsip<?= $row->id_project ?>" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <form action="<?= base_url('admin/project/arsip/') . $row->id_project ?>" method="post">
                                                <div class="modal-body">
                                                    <?php if ($row->arsipkan == 0) {
                                                        echo "Arsipkan Project ini ?";
                                                    } else {
                                                        echo "Publish Project ini ?";
                                                    }
                                                    ?>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-danger">
                                                        <?php if ($row->arsipkan == 0) {
                                                            echo "Arsipkan";
                                                        } else {
                                                            echo "Publish";
                                                        }
                                                        ?>
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            endforeach;
                            ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Nama Project</th>
                                <th>Deskripsi</th>
                                <th>Function Graph</th>
                                <th>Function Overview</th>
                                <!-- <th>Embed Code</th> -->
                                <th>File Project</th>
                                <th>Tanggal Posting</th>
                                <th>Score</th>
                                <th>Thumbnail</th>
                                <th>Viewer</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>