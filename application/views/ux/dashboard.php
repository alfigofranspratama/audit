<div class="row">
    <div class="col-12 col-lg-3">
        <div class="card radius-15 bg-voilet">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div>
                        <h2 class="mb-0 text-white"><?= $postingan ?></h2>
                    </div>
                    <div class="ms-auto font-35 text-white"><i class="bx bx-cart-alt"></i>
                    </div>
                </div>
                <div class="d-flex align-items-center">
                    <div>
                        <p class="mb-0 text-white">Total Project</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-3">
        <div class="card radius-15 bg-primary-blue">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div>
                        <h2 class="mb-0 text-white"><?= $postingansaya ?></h2>
                    </div>
                    <div class="ms-auto font-35 text-white"><i class="bx bx-support"></i>
                    </div>
                </div>
                <div class="d-flex align-items-center">
                    <div>
                        <p class="mb-0 text-white">Project Saya</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-3">
        <div class="card radius-15 bg-rose">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div>
                        <h2 class="mb-0 text-white"><?= $postinganarsip ?></h2>
                    </div>
                    <div class="ms-auto font-35 text-white"><i class="bx bx-tachometer"></i>
                    </div>
                </div>
                <div class="d-flex align-items-center">
                    <div>
                        <p class="mb-0 text-white">Postingan di arsipkan</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-3">
        <div class="card radius-15 bg-sunset">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div>
                        <h2 class="mb-0 text-white"><?= $team_users ?></h2>
                    </div>
                    <div class="ms-auto font-35 text-white"><i class="bx bx-user"></i>
                    </div>
                </div>
                <div class="d-flex align-items-center">
                    <div>
                        <p class="mb-0 text-white">Team Project</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php 
    $totalvisitor = $this->db->get('tb_visitor')->result();
    $visitor = 0;
    foreach($totalvisitor as $row):
        $visitor += $row->visitor;
    endforeach;
    ?>
    <div class="col-12 col-lg-12">
        <div class="card radius-15 border shadow-none mb-0">
            <div class="card-body">
                <div class="d-flex flex-row align-items-center">
                    <div class="">
                        <p class="text-secondary mb-0">Visitor</p>
                        <h4 class="mb-0"><?= $visitor ?></h4>
                    </div>
                    <div class="fs-2 ms-auto">
                        <i class='bx bx-group'></i>
                    </div>
                </div>
                <div id="chart1000" class="ms-auto mt-1"></div>
            </div>
        </div>
    </div>
</div>
