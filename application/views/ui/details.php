<?php
$settings = $this->db->get('tb_website')->row_array();
?>
<div class="row mb-3">
    <div class="col-lg-6 col-md-12">
        <div class="tf-item-detail-image">
            <img src="<?= base_url('images/project/') . $project['thumbnail'] ?>" style="width: 690px; height:690px; object-fit:cover;" alt="Image">
            <div class="countdown-inner">
                <h4 class="heading">AUDIT REPORT</h4>
                <button><a href="<?= base_url('images/project/') . $project['file_project'] ?>">Download File</a></button>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-12">
        <div class="tf-item-detail-inner">
            <div class="infor-item-wrap">
                <div class="container">
                    <p>SAFU Score </p>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="<?= $project['score'] ?>" aria-valuemin="0" aria-valuemax="100" style="width:<?= $project['score'] ?>%"><?= $project['score'] ?>%
                        </div>
                    </div>
                </div>
            </div>
            <div class="sidebar sidebar-collection">
                <div class="widget widget-clothing widget-accordion">
                    <h6 class="widget-title active">Other</h6>
                    <div class="widget-content">
                        <div class="group-btn">
                            <a href="<?= $project['buy_on_pancake'] ?>" class="tf-button opensea"><i class="icon-fl-bag"></i> BUY ON PancakeSwap</a>
                            <div class="group-2 group-21">
                                <a href="<?= $project['website'] ?>" class="tf-button style-2 "><i class="fa fa-globe"></i>WEBSITE</a>
                                <a href="<?= $project['telegram'] ?>" class="tf-button style-2 twitter"><i class="fab fa-telegram-plane"></i>JOIN TELEGRAM</a>
                            </div>
                        </div>
                        <div class="group-btn">
                            <div class="group-2 group-21">
                                <a href="<?= $project['discord'] ?>" class="tf-button style-2 "><i class="icon-fl-vt"></i> JOIN DISCORD</a>
                                <a href="<?= $project['twitter'] ?>" class="tf-button style-2 twitter"><i class="fab fa-twitter"></i> JOIN TWITTER</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom-inner">
                <h2 class="title">Description</h2>
                <div style="word-wrap: break-word;">
                    <?= $project['deskripsi']; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row mb-3">
    <div class="col-lg-12 col-md-12">
        <h2 class="title">Function Graph</h2>
        <img src="<?= base_url('images/project/') . $project['function_graph'] ?>" alt="Function Graph">
    </div>
</div>

<div class="row mb-3">
    <div class="col-lg-12 col-md-12">
        <h2 class="title">Function Overview</h2>
        <pre style="max-height:400px;">
            <code>
                <?= $project['function_overview'] ?>
            </code>
        </pre>
    </div>
</div>
<div class="row mb-3">
    <div class="col-lg-12 col-md-12">
        <?= $project['embed_code'] ?>
    </div>
</div>