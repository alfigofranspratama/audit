<div class="row ">
    <div class="col-lg-3 col-md-4">
        <div class="sidebar sidebar-collection">
            <div class="widget widget-clothing widget-accordion">
                <h6 class="widget-title active">Category</h6>
                <div class="widget-content">
                    <form action="<?= base_url('home/search_kategori') ?>" method="get" class="form-checkbox">
                        <?php
                        $kategori = $this->db->get_where('tb_kategori', ['tampilkan_di_home' => 1])->result();

                        foreach ($kategori as $row) :
                        ?>
                            <label class="checkbox-item">
                                <span class="custom-checkbox">
                                    <input type="checkbox" name="kategori[]" value="<?= $row->kategori; ?>">
                                    <span class="btn-checkbox"></span>
                                </span>
                                <img src="<?= base_url('images/kategori/') . $row->icon ?>" width="20px" height="20px" alt="">&nbsp;
                                <span><?= $row->kategori ?></span>
                            </label>
                        <?php
                        endforeach;
                        ?>
                        <button type="submit" class="btn btn-primary">Filter</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-9 col-md-8 ">
        <div class="top-option">
            <h2 class="heading">
                <?php
                if ($this->uri->segment(2) == 'search') {
                ?>Hasil Search : <?php
                                } if ($this->uri->segment(2) == 'search_kategori'){
                                    echo "Filter Kategori :";
                                }
                                 else {
                                    ?>All Project<?php
                                                }
                                                    ?>
            </h2>

            <div class="flex">
                <div class="widget widget-search">
                    <form action="<?= base_url('home/search') ?>" method="GET">
                        <input type="text" name="keyw" style="padding: 17px 110px 17px 23px;" placeholder="Search Project" required="">
                        <button type="submit" class="btn-search btn-primary" style="margin-right: -1.8rem; padding: -100px"><i class="icon-fl-search-filled"></i></button>
                    </form>
                </div>
            </div>

        </div>
        <ul class="filter-content">
            <li><a href="#">Audit</a></li>
            <li><a href="#">KYC </a></li>
            <li><a href="#"></a></li>
        </ul>
        <div class="row">
            <?php

            if ($c > 0) {
                foreach ($project as $row) :
            ?>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12 ">
                        <div class="tf-product">
                            <div class="image">
                                <img src="<?= base_url('images/project/') . $row->thumbnail; ?>" style="width: 290px; height:290px; object-fit:cover;" alt="Image">
                            </div>
                            <h6 class="name">
                                <img class="bsc" src="<?= base_url('images/project/') ?><?= $row->logo_project ?>">
                                <a title="<?= $row->nama_project ?>" href="<?= base_url('home/detail/') . $row->id_project ?>"><?= substr($row->nama_project,0,19); ?></a>
                            </h6>
                        </div>
                    </div>
                <?php
                endforeach;
            } else {
                ?>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12 ">
                    <h4>Tidak ada hasil project.</h4>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</div>