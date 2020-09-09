<?php require 'includes/header_start.php'; ?>

<?php require 'includes/header_end.php'; ?>


        <div class="wrapper">
            <div class="container-fluid">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="btn-group float-right">
                                <ol class="breadcrumb hide-phone p-0 m-0">
                                    <li class="breadcrumb-item"><a href="#">Highdmin</a></li>
                                    <li class="breadcrumb-item"><a href="#">Components</a></li>
                                    <li class="breadcrumb-item"><a href="#">Charts</a></li>
                                    <li class="breadcrumb-item active">Sparkline Charts</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Sparkline Charts</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->

                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="card-box">
                            <h4 class="header-title">Line Charts</h4>

                            <div class="mt-4">
                                <div id="sparkline1"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="card-box">
                            <h4 class="header-title">Bar Chart</h4>

                            <div class="mt-4">
                                <div id="sparkline2" class="text-center"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="card-box">
                            <h4 class="header-title">Pie Chart</h4>

                            <div class="mt-4">
                                <div id="sparkline3" class="text-center"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="card-box">
                            <h4 class="header-title">Custom Line Chart</h4>

                            <div class="mt-4">
                                <div id="sparkline4" class="text-center"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="card-box">
                            <h4 class="header-title">Mouse Speed Chart</h4>

                            <div class="mt-4">
                                <div id="sparkline5" class="text-center"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="card-box">
                            <h4 class="header-title">Composite bar Chart</h4>

                            <div class="text-center mt-4">
                                <div id="sparkline6" class="text-center"></div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-6 col-lg-4">
                        <div class="card-box">
                            <h4 class="header-title">Discrete Chart</h4>

                            <div class="text-center mt-4">
                                <div id="sparkline7" class="text-center"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="card-box">
                            <h4 class="header-title">Bullet Chart</h4>

                            <div class="text-center mt-4" style="min-height: 164px;">
                                <div id="sparkline8" class="text-center"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="card-box">
                            <h4 class="header-title">Box Plot Chart</h4>

                            <div class="text-center mt-4" style="min-height: 164px;">
                                <div id="sparkline9" class="text-center"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="card-box">
                            <h4 class="header-title mt-4">Tristate Charts</h4>

                            <div class="text-center mt-4" style="min-height: 164px;">
                                <div id="sparkline10" class="text-center"></div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- end row -->

            </div> <!-- end container-fluid -->
        </div>
        <!-- end wrapper -->


        <?php require 'includes/footer_start.php'; ?>

        <!-- Sparkline charts -->
        <script src="../plugins/jquery-sparkline/jquery.sparkline.min.js"></script>
        <script src="assets/pages/jquery.charts-sparkline.js"></script>

        <?php require 'includes/footer_end.php'; ?>