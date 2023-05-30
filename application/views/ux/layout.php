<?php
$users = $this->session->userdata('users');
$users = $this->db->get_where('tb_users', ['id_users' => $users['id_users']])->row_array();
$settings = $this->db->get('tb_website')->row_array();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title><?= $settings['title_website'] ?></title>
    <!--favicon-->
    <link rel="icon" href="<?= base_url('components/images/favicon/') ?><?= $settings['favicon'] ?>" type="image/png" />
    <!-- Vector CSS -->
    <link href="<?= base_url('components/ux/') ?>assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <!--plugins-->
    <link href="<?= base_url('components/ux/') ?>assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <link href="<?= base_url('components/ux/') ?>assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
    <link href="<?= base_url('components/ux/') ?>assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
    <link href="<?= base_url('components/ux/') ?>assets/plugins/select2/css/select2.min.css" rel="stylesheet" />
    <link href="<?= base_url('components/ux/') ?>assets/plugins/select2/css/select2-bootstrap4.css" rel="stylesheet" />
    <!--Data Tables -->
    <link href="<?= base_url('components/ux/') ?>assets/plugins/datatable/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url('components/ux/') ?>assets/plugins/datatable/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css">
    <!-- loader-->
    <link href="<?= base_url('components/ux/') ?>assets/css/pace.min.css" rel="stylesheet" />
    <script src="<?= base_url('components/ux/') ?>assets/js/pace.min.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('components/ux/') ?>assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&family=Roboto&display=swap" />
    <!-- Icons CSS -->
    <link rel="stylesheet" href="<?= base_url('components/ux/') ?>assets/css/icons.css" />
    <!-- App CSS -->
    <link rel="stylesheet" href="<?= base_url('components/ux/') ?>assets/css/app.css" />
    <link rel="stylesheet" href="<?= base_url('components/ux/') ?>assets/css/dark-sidebar.css" />
    <link rel="stylesheet" href="<?= base_url('components/ux/') ?>assets/css/dark-theme.css" />
</head>

<body>
    <!-- wrapper -->
    <div class="wrapper">
        <!--sidebar-wrapper-->
        <div class="sidebar-wrapper" data-simplebar="true">
            <div class="sidebar-header">
                <div class="">
                    <img src="<?= base_url('components/images/favicon/') . $settings['logo_header_ux'] ?>" class="logo-icon-2" alt="" />
                </div>
                <div>
                    <h4 class="logo-text"><?= $settings['title_ux'] ?></h4>
                </div>
                <a href="javascript:;" class="toggle-btn ms-auto"> <i class="bx bx-menu"></i>
                </a>
            </div>
            <!--navigation-->
            <ul class="metismenu" id="menu">
                <li>
                    <a href="<?= base_url('admin/dashboard') ?>">
                        <div class="parent-icon icon-color-1"><i class="bx bx-home-alt"></i>
                        </div>
                        <div class="menu-title">Dashboard</div>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('admin/profile') ?>">
                        <div class="parent-icon icon-color-5"><i class="bx bx-user"></i>
                        </div>
                        <div class="menu-title">Profile</div>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('auth/daftar') ?>">
                        <div class="parent-icon icon-color-6"><i class="bx bx-user-plus"></i>
                        </div>
                        <div class="menu-title">Tambah Users</div>
                    </a>
                </li>
                <!-- Content Management System -->
                <li class="menu-label">Content Management System</li>
                <li>
                    <a href="<?= base_url('admin/project') ?>">
                        <div class="parent-icon icon-color-2"><i class="bx bx-archive"></i>
                        </div>
                        <div class="menu-title">Project</div>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('admin/kategori') ?>">
                        <div class="parent-icon icon-color-3"><i class="bx bx-folder"></i>
                        </div>
                        <div class="menu-title">Kategori</div>
                    </a>
                </li>

                <li class="menu-label">Website Settings</li>
                <li>
                    <a href="<?= base_url('admin/settings') ?>">
                        <div class="parent-icon icon-color-9"><i class="bx bx-cog"></i>
                        </div>
                        <div class="menu-title">Settings</div>
                    </a>
                </li>
            </ul>
            <!--end navigation-->
        </div>
        <!--end sidebar-wrapper-->
        <!--header-->
        <header class="top-header">
            <nav class="navbar navbar-expand">
                <div class="left-topbar d-flex align-items-center">
                    <a href="javascript:;" class="toggle-btn"> <i class="bx bx-menu"></i>
                    </a>
                </div>
                <div class="right-topbar ms-auto">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown dropdown-user-profile">
                            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;" data-bs-toggle="dropdown">
                                <div class="d-flex user-box align-items-center">
                                    <div class="user-info">
                                        <p class="user-name mb-0"><?= $users['nama'] ?></p>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="<?= base_url('admin/settings/') ?>"><i class="bx bx-cog"></i><span>Settings</span></a>
                                <a class="dropdown-item" href="<?= base_url('') ?>"><i class="bx bx-globe"></i><span>Go to Website</span></a>
                                <div class="dropdown-divider mb-0"></div> <a class="dropdown-item" href="<?= base_url('auth/logout') ?>"><i class="bx bx-power-off"></i><span>Logout</span></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!--end header-->
        <!--page-wrapper-->
        <div class="page-wrapper">
            <!--page-content-wrapper-->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <?php
                    if ($this->uri->segment('2') != 'dashboard') {
                    ?>
                        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                            <div class="breadcrumb-title pe-3 text-uppercase"><?= $this->uri->segment('2'); ?></div>
                            <div class="ps-3">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb mb-0 p-0">
                                        <li class="breadcrumb-item"><a href="<?= base_url('admin/dashboard/') ?>"><i class="bx bx-home-alt"></i></a>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page"><?= $title ?></li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                    <!--end breadcrumb-->
                    <?php
                    if ($content) {
                        $this->load->view('ux/' . $content);
                    }
                    ?>
                </div>
            </div>
            <!--end page-content-wrapper-->
        </div>
        <!--end page-wrapper-->
        <!--start overlay-->
        <div class="overlay toggle-btn-mobile"></div>
        <!--end overlay-->
        <!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
        <!--End Back To Top Button-->
        <!--footer -->
        <div class="footer">
            <p class="mb-0">Syndash @2020 | Developed By : <a href="https://themeforest.net/user/codervent" target="_blank">codervent</a>
            </p>
        </div>
        <!-- end footer -->
    </div>
    <!--start switcher-->
    <div class="switcher-body">
        <button class="btn btn-primary btn-switcher shadow-sm" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"><i class="bx bx-cog bx-spin"></i></button>
        <div class="offcanvas offcanvas-end shadow border-start-0 p-2" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling">
            <div class="offcanvas-header border-bottom">
                <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Theme Customizer</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
            </div>
            <div class="offcanvas-body">
                <h6 class="mb-0">Theme Variation</h6>
                <hr>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="lightmode" value="option1" checked>
                    <label class="form-check-label" for="lightmode">Light</label>
                </div>
                <hr>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="darkmode" value="option2">
                    <label class="form-check-label" for="darkmode">Dark</label>
                </div>
                <hr>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="darksidebar" value="option3">
                    <label class="form-check-label" for="darksidebar">Semi Dark</label>
                </div>
                <hr>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="ColorLessIcons" value="option3">
                    <label class="form-check-label" for="ColorLessIcons">Color Less Icons</label>
                </div>
            </div>
        </div>
    </div>
    <!--end switcher-->
    <!-- JavaScript -->
    <!-- Bootstrap JS -->
    <script src="<?= base_url('components/ux/') ?>assets/js/bootstrap.bundle.min.js"></script>

    <!--plugins-->
    <script src="<?= base_url('components/ux/') ?>assets/js/jquery.min.js"></script>
    <script src="<?= base_url('components/ux/') ?>assets/plugins/simplebar/js/simplebar.min.js"></script>
    <script src="<?= base_url('components/ux/') ?>assets/plugins/metismenu/js/metisMenu.min.js"></script>
    <script src="<?= base_url('components/ux/') ?>assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
    <!-- Vector map JavaScript -->
    <script src="<?= base_url('components/ux/') ?>assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="<?= base_url('components/ux/') ?>assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="<?= base_url('components/ux/') ?>assets/plugins/vectormap/jquery-jvectormap-in-mill.js"></script>
    <script src="<?= base_url('components/ux/') ?>assets/plugins/vectormap/jquery-jvectormap-us-aea-en.js"></script>
    <script src="<?= base_url('components/ux/') ?>assets/plugins/vectormap/jquery-jvectormap-uk-mill-en.js"></script>
    <script src="<?= base_url('components/ux/') ?>assets/plugins/vectormap/jquery-jvectormap-au-mill.js"></script>
    <script src="<?= base_url('components/ux/') ?>assets/plugins/apexcharts-bundle/js/apexcharts.min.js"></script>
    <script src="<?= base_url('components/ux/') ?>assets/js/index2.js"></script>
    <!-- App JS -->
    <script src="<?= base_url('components/ux/') ?>assets/js/app.js"></script>
    <!--Data Tables js-->
    <script src="<?= base_url('components/ux/') ?>assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            //Default data table
            $('#example').DataTable();
            var table = $('#example2').DataTable({
                lengthChange: false,
                buttons: ['copy', 'excel', 'pdf', 'print', 'colvis']
            });
            table.buttons().container().appendTo('#example2_wrapper .col-md-6:eq(0)');
        });
    </script>
    <script src="<?= base_url('components/ux/') ?>assets/plugins/select2/js/select2.min.js"></script>
    <script>
        $('.single-select').select2({
            theme: 'bootstrap4',
            width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
            placeholder: $(this).data('placeholder'),
            allowClear: Boolean($(this).data('allow-clear')),
        });
        $('.multiple-select').select2({
            theme: 'bootstrap4',
            width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
            placeholder: $(this).data('placeholder'),
            allowClear: Boolean($(this).data('allow-clear')),
        });
    </script>
    <script src='https://cdn.tiny.cloud/1/vdqx2klew412up5bcbpwivg1th6nrh3murc6maz8bukgos4v/tinymce/5/tinymce.min.js' referrerpolicy="origin">
    </script>
    <script>
        tinymce.init({
            selector: '#mytextarea'
        });
    </script>

    <?php
    $chart = $this->db->query("SELECT * FROM tb_visitor ORDER BY tanggal DESC LIMIT 7")->result();
    ?>
    <script>
        // chart 7
        var options = {
            chart: {
                height: 350,
                type: "line",
                stacked: false
            },
            dataLabels: {
                enabled: false
            },
            colors: ["#FF1654"],
            series: [{
                name: "Visitor",
                data: [
                    <?php
                    foreach ($chart as $row) :
                        echo $row->visitor . ",";
                    endforeach
                    ?>
                ]
            }],
            stroke: {
                width: [4, 4]
            },
            plotOptions: {
                bar: {
                    columnWidth: "20%"
                }
            },
            xaxis: {
                categories: [
                    <?php
                    foreach ($chart as $row) :
                        echo "\"" . format_indo($row->tanggal) . "\"" . ",";
                    endforeach
                    ?>
                ]
            },
            yaxis: [{
                axisTicks: {
                    show: true
                },
                axisBorder: {
                    show: true,
                    color: "#FF1654"
                },
                labels: {
                    style: {
                        colors: "#FF1654"
                    }
                },
                title: {
                    text: "Series A",
                    style: {
                        color: "#FF1654"
                    }
                }
            }],
            tooltip: {
                shared: false,
                intersect: true,
                x: {
                    show: false
                }
            },
            legend: {
                horizontalAlign: "left",
                offsetX: 40
            }
        };
        var chart = new ApexCharts(document.querySelector("#chart1000"), options);
        chart.render();
    </script>


</body>

</html>