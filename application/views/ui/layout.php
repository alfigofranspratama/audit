<?php
$settings = $this->db->get('tb_website')->row_array();
?>

<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<!--<![endif]-->

<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title><?= $settings['title_website'] ?></title>

    <meta name="author" content="themesflat.com">
    <meta name="description" content="<?= $settings['meta_deskripsi'] ?>">
    <meta name="title" content="<?= $settings['meta_title'] ?>">
    <meta name="keywords" content="<?= $settings['meta_keywords'] ?>">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('components/ui/') ?>assets/css/style.css">

    <!-- Reponsive -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('components/ui/') ?>assets/css/responsive.css">

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="<?= base_url('components/images/favicon/') . $settings['favicon'] ?>">
    <link rel="apple-touch-icon-precomposed" href="<?= base_url('components/images/favicon/') . $settings['favicon'] ?>">

</head>

<body class="body header-fixed">

    <!-- preloade -->
    <div class="preload preload-container">
        <div class="preload-logo"></div>
    </div>
    <!-- /preload -->

    <div id="wrapper" class="wrapper-style">
        <div id="page" class="clearfix">
            <header class="header">
                <div class="tf-container">
                    <div class="row">
                        <div class="col-md-12">
                            <div id="site-header-inner">
                                <div id="site-logo" class="clearfix">
                                    <div id="site-logo-inner">
                                        <a href="<?= base_url('project') ?>" rel="home" class="main-logo">
                                            <img id="" src="<?= base_url('components/images/favicon/') . $settings['logo_header_ui'] ?>">
                                        </a>
                                    </div>
                                </div>

                                <div class="header-center">
                                    <nav id="main-nav" class="main-nav">
                                        <ul id="menu-primary-menu" class="menu">
                                            <li class="menu-item  ">
                                                <a href="<?= base_url(''); ?>">HOME</a>
                                            </li>

                                        </ul>
                                    </nav><!-- /#main-nav -->
                                </div>

                                <div class="header-right">

                                    <a href="<?= $settings['telegram'] ?>" class="tf-button discord"><i class="fab fa-telegram-plane"></i><span>Telegram</span></a>

                                </div>

                                <div class="mobile-button"><span></span></div><!-- /.mobile-button -->
                            </div>
                        </div>
                    </div>
                </div>

            </header>

            <!-- title page -->
            <section class="tf-page-title">
                <div class="tf-container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="page-title-heading">Security Audit</h2>
                            <p class="sc-title">security assessment of your smart contract</p>
                            <a href=""><button class="request-audit">Request Audit</button></a>
                        </div>
                    </div>
                </div>
            </section>

            <section class="tf-collection-inner">
                <div class="tf-container">
                    <?php
                    if ($content) {
                        $this->load->view('ui/' . $content);
                    }
                    ?>

                </div>
            </section>

            <!-- Footer -->
            <footer class="footer">
                <div class="action-box">
                    <div class="tf-container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="action-box-inner">
                                    <h2 class="title">JOIN OUR COMMUNITY</h2>
                                    <div class="group-btn">
                                        <a href="<?= $settings['telegram'] ?>" class="tf-button discord"><i class="fab fa-telegram-plane"></i><span>Telegram</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="footer-inner">
                    <div class="tf-container">
                        <div class="row">
                            <div class="col-xl-4 col-lg-3 col-md-12">
                                <div class="widget widget-infor">
                                    <div class="logo">
                                        <img id="logo_footer" src="<?= base_url('components/images/favicon/') ?><?= $settings['logo_header_ui'] ?>" alt="Image">
                                    </div>
                                    <p class="content"><?= $settings['deskripsi_footer'] ?></p>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-12">
                                <div class="widget widget-menu">
                                    <div class="menu menu-1">
                                        <h6 class="widget-title">SUBSCRIBE</h6>
                                        <ul>
                                            <li><a href="index.html">Home</a></li>
                                            <li><a href="about1.html">About</a></li>
                                            <li><a href="roadmap-1.html">Roadmap</a></li>
                                            <li><a href="team.html">Our Team</a></li>
                                            <li><a href="faq1.html">FAQs</a></li>
                                        </ul>
                                    </div>
                                    <div class="menu menu-2">
                                        <h6 class="widget-title">COMPANY</h6>
                                        <ul>
                                            <li><a href="about2.html">About Us 2</a></li>
                                            <li><a href="roadmap-2.html">Road Map 2</a></li>
                                            <li><a href="testimonial.html">Testimonial</a></li>
                                            <li><a href="audit-detil.html">Item Details</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-5 col-md-12">
                                <div class="widget widget-subcribe">
                                    <h6 class="widget-title">SUBSCRIBE</h6>
                                    <form action="#" id="subscribe-form">
                                        <input type="email" placeholder="Enter your email" required="" id="subscribe-email">
                                        <button class="tf-button" type="submit" id="subscribe-button">SUBSCRIBE</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bottom-inner">
                    <div class="tf-container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="bottom">

                                    <p class="copy-right">KOSHER CRYPTO 2022 - ALL rights reserved</p>

                                    <ul class="social-item">
                                        <li><a href="<?= $settings['twitter'] ?>"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="<?= $settings['facebook'] ?>"><i class="fab fa-facebook"></i></a></li>
                                        <li><a href="<?= $settings['telegram'] ?>"><i class="fab fa-telegram-plane"></i></a></li>
                                        <li><a href="<?= $settings['youtube'] ?>"><i class="fab fa-youtube"></i></a></li>
                                        <li><a href="<?= $settings['tiktok'] ?>"><i class="icon-fl-tik-tok-2"></i></a></li>
                                        <li><a href="<?= $settings['discord'] ?>"><i class="icon-fl-vt"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>

            <!-- Bottom -->

        </div>
        <!-- /#page -->
    </div>
    <!-- /#wrapper -->

    <a id="scroll-top"></a>
    <!-- Javascript -->

    <script src="<?= base_url('components/ui/') ?>assets/js/jquery.min.js"></script>
    <script src="<?= base_url('components/ui/') ?>assets/js/jquery.easing.js"></script>
    <script src="<?= base_url('components/ui/') ?>assets/js/bootstrap.min.js"></script>
    <script src="<?= base_url('components/ui/') ?>assets/js/swiper-bundle.min.js"></script>
    <script src="<?= base_url('components/ui/') ?>assets/js/swiper.js"></script>
    <script src="<?= base_url('components/ui/') ?>assets/js/switchmode.js"></script>
    <script src="<?= base_url('components/ui/') ?>assets/js/count-down.js"></script>
    <script src="<?= base_url('components/ui/') ?>assets/js/plugin.js"></script>
    <script src="<?= base_url('components/ui/') ?>assets/js/shortcodes.js"></script>
    <script src="<?= base_url('components/ui/') ?>assets/js/main.js"></script>


</body>

</html>